/*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

package com.facebook.thrift.any;

import com.facebook.thrift.type.Type;
import com.facebook.thrift.type.TypeRegistry;
import com.facebook.thrift.type.UniversalName;
import com.facebook.thrift.util.SerializationProtocol;
import com.facebook.thrift.util.SerializerUtil;
import java.util.Objects;
import org.apache.thrift.conformance.Any;
import org.apache.thrift.conformance.StandardProtocol;
import org.apache.thrift.protocol.TProtocol;

/**
 * LazyAny implementation that contains serialized data. Will lazily deseralize the data to a struct
 * when a get method is called. The {@link LazyAnyAdapter} returns this implementation.
 */
public class SerializedLazyAny<T> extends LazyAny<T> {
  private final Any any;

  private transient Object lazyValue;

  SerializedLazyAny(Any any) {
    this.any = Objects.requireNonNull(any);
  }

  @SuppressWarnings("unchecked")
  public <T> T get() {
    if (lazyValue != null) {
      return (T) lazyValue;
    }

    if (getStandardProtocol() == StandardProtocol.CUSTOM) {
      throw new IllegalStateException(
          "This method does not support getting with a custom protocol");
    }

    return get(SerializerUtil.toByteBufProtocol(getSerializationProtocol(), any.getData()));
  }

  private StandardProtocol getStandardProtocol() {
    if (any.getProtocol() == null) {
      return StandardProtocol.COMPACT;
    } else {
      return any.getProtocol();
    }
  }

  private SerializationProtocol getSerializationProtocol() {
    switch (getStandardProtocol()) {
      case JSON:
        return SerializationProtocol.TJSON;
      case BINARY:
        return SerializationProtocol.TBinary;
      case COMPACT:
        return SerializationProtocol.TCompact;
      case SIMPLE_JSON:
        return SerializationProtocol.TSimpleJSONBase64;
      default:
        return null;
    }
  }

  @Override
  public Any getAny() {
    return any;
  }

  @SuppressWarnings("unchecked")
  private <T> T get(TProtocol protocol) {
    synchronized (this) {
      if (lazyValue == null) {
        Type type = null;
        if (any.getType() != null) {
          type = findByType(any.getType());
        }

        if (any.getTypeHashPrefixSha2256() != null) {
          type = TypeRegistry.findByHashPrefix(any.getTypeHashPrefixSha2256());
        }

        Objects.requireNonNull(type, "unable to find type for any to deserialize struct");

        lazyValue = type.getReader().read(protocol);
      }
      return (T) lazyValue;
    }
  }

  Type findByType(String type) {
    UniversalName universalName = new UniversalName(type);
    return TypeRegistry.findByUniversalName(universalName);
  }
}