/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

package test.fixtures.constants;

import com.facebook.swift.codec.*;
import com.facebook.swift.codec.ThriftField.Requiredness;
import com.facebook.swift.codec.ThriftField.Recursiveness;
import com.google.common.collect.*;
import java.util.*;
import javax.annotation.Nullable;
import org.apache.thrift.*;
import org.apache.thrift.transport.*;
import org.apache.thrift.protocol.*;
import static com.google.common.base.MoreObjects.toStringHelper;
import static com.google.common.base.MoreObjects.ToStringHelper;

@SwiftGenerated
@com.facebook.swift.codec.ThriftStruct(value="struct4", builder=Struct4.Builder.class)
public final class Struct4 implements com.facebook.thrift.payload.ThriftSerializable {

    @ThriftConstructor
    public Struct4(
        @com.facebook.swift.codec.ThriftField(value=1, name="a", requiredness=Requiredness.NONE) final int a,
        @com.facebook.swift.codec.ThriftField(value=2, name="b", requiredness=Requiredness.OPTIONAL) final Double b,
        @com.facebook.swift.codec.ThriftField(value=3, name="c", requiredness=Requiredness.OPTIONAL) final Byte c
    ) {
        this.a = a;
        this.b = b;
        this.c = c;
    }
    
    @ThriftConstructor
    protected Struct4() {
      this.a = 0;
      this.b = null;
      this.c = null;
    }
    
    public static class Builder {
    
        private int a = 0;
        private Double b = null;
        private Byte c = null;
    
        @com.facebook.swift.codec.ThriftField(value=1, name="a", requiredness=Requiredness.NONE)
        public Builder setA(int a) {
            this.a = a;
            return this;
        }
    
        public int getA() { return a; }
    
            @com.facebook.swift.codec.ThriftField(value=2, name="b", requiredness=Requiredness.OPTIONAL)
        public Builder setB(Double b) {
            this.b = b;
            return this;
        }
    
        public Double getB() { return b; }
    
            @com.facebook.swift.codec.ThriftField(value=3, name="c", requiredness=Requiredness.OPTIONAL)
        public Builder setC(Byte c) {
            this.c = c;
            return this;
        }
    
        public Byte getC() { return c; }
    
        public Builder() { }
        public Builder(Struct4 other) {
            this.a = other.a;
            this.b = other.b;
            this.c = other.c;
        }
    
        @ThriftConstructor
        public Struct4 build() {
            Struct4 result = new Struct4 (
                this.a,
                this.b,
                this.c
            );
            return result;
        }
    }
                public static final Map<String, Integer> NAMES_TO_IDS = new HashMap();
    public static final Map<String, Integer> THRIFT_NAMES_TO_IDS = new HashMap();
    public static final Map<Integer, TField> FIELD_METADATA = new HashMap<>();
    private static final TStruct STRUCT_DESC = new TStruct("struct4");
    private final int a;
    public static final int _A = 1;
    private static final TField A_FIELD_DESC = new TField("a", TType.I32, (short)1);
        private final Double b;
    public static final int _B = 2;
    private static final TField B_FIELD_DESC = new TField("b", TType.DOUBLE, (short)2);
        private final Byte c;
    public static final int _C = 3;
    private static final TField C_FIELD_DESC = new TField("c", TType.BYTE, (short)3);
    static {
      NAMES_TO_IDS.put("a", 1);
      THRIFT_NAMES_TO_IDS.put("a", 1);
      FIELD_METADATA.put(1, A_FIELD_DESC);
      NAMES_TO_IDS.put("b", 2);
      THRIFT_NAMES_TO_IDS.put("b", 2);
      FIELD_METADATA.put(2, B_FIELD_DESC);
      NAMES_TO_IDS.put("c", 3);
      THRIFT_NAMES_TO_IDS.put("c", 3);
      FIELD_METADATA.put(3, C_FIELD_DESC);
    }
    
    
    @com.facebook.swift.codec.ThriftField(value=1, name="a", requiredness=Requiredness.NONE)
    public int getA() { return a; }
    
    
    @Nullable
    @com.facebook.swift.codec.ThriftField(value=2, name="b", requiredness=Requiredness.OPTIONAL)
    public Double getB() { return b; }
    
    
    @Nullable
    @com.facebook.swift.codec.ThriftField(value=3, name="c", requiredness=Requiredness.OPTIONAL)
    public Byte getC() { return c; }
    
    @java.lang.Override
    public String toString() {
        ToStringHelper helper = toStringHelper(this);
        helper.add("a", a);
        helper.add("b", b);
        helper.add("c", c);
        return helper.toString();
    }
    
    @java.lang.Override
    public boolean equals(Object o) {
        if (this == o) {
            return true;
        }
        if (o == null || getClass() != o.getClass()) {
            return false;
        }
    
        Struct4 other = (Struct4)o;
    
        return
            Objects.equals(a, other.a) &&
    Objects.equals(b, other.b) &&
    Objects.equals(c, other.c) &&
            true;
    }
    
    @java.lang.Override
    public int hashCode() {
        return Arrays.deepHashCode(new Object[] {
            a,
            b,
            c
        });
    }
    
    
    public static com.facebook.thrift.payload.Reader<Struct4> asReader() {
      return Struct4::read0;
    }
    
    public static Struct4 read0(TProtocol oprot) throws TException {
      TField __field;
      oprot.readStructBegin(Struct4.NAMES_TO_IDS, Struct4.THRIFT_NAMES_TO_IDS, Struct4.FIELD_METADATA);
      Struct4.Builder builder = new Struct4.Builder();
      while (true) {
        __field = oprot.readFieldBegin();
        if (__field.type == TType.STOP) { break; }
        switch (__field.id) {
        case _A:
          if (__field.type == TType.I32) {
            int a = oprot.readI32();
            builder.setA(a);
          } else {
            TProtocolUtil.skip(oprot, __field.type);
          }
          break;
        case _B:
          if (__field.type == TType.DOUBLE) {
            Double b = oprot.readDouble();
            builder.setB(b);
          } else {
            TProtocolUtil.skip(oprot, __field.type);
          }
          break;
        case _C:
          if (__field.type == TType.BYTE) {
            Byte c = oprot.readByte();
            builder.setC(c);
          } else {
            TProtocolUtil.skip(oprot, __field.type);
          }
          break;
        default:
          TProtocolUtil.skip(oprot, __field.type);
          break;
        }
        oprot.readFieldEnd();
      }
      oprot.readStructEnd();
      return builder.build();
    }
    
    public void write0(TProtocol oprot) throws TException {
      oprot.writeStructBegin(STRUCT_DESC);
      oprot.writeFieldBegin(A_FIELD_DESC);
      oprot.writeI32(this.a);
      oprot.writeFieldEnd();
      if (this.b != null) {
        oprot.writeFieldBegin(B_FIELD_DESC);
        oprot.writeDouble(this.b);
        oprot.writeFieldEnd();
      }
      if (this.c != null) {
        oprot.writeFieldBegin(C_FIELD_DESC);
        oprot.writeByte(this.c);
        oprot.writeFieldEnd();
      }
      oprot.writeFieldStop();
      oprot.writeStructEnd();
    }
    
    private static class _Struct4Lazy {
        private static final Struct4 _DEFAULT = new Struct4.Builder().build();
    }
    
    public static Struct4 defaultInstance() {
        return  _Struct4Lazy._DEFAULT;
    }
}
