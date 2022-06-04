/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
package test.fixtures.basic;

import java.util.List;
import java.util.ArrayList;
import java.util.Map;
import java.util.HashMap;
import java.util.Set;
import java.util.HashSet;
import java.util.Collections;
import java.util.BitSet;
import java.util.Arrays;
import com.facebook.thrift.*;
import com.facebook.thrift.annotations.*;
import com.facebook.thrift.async.*;
import com.facebook.thrift.meta_data.*;
import com.facebook.thrift.server.*;
import com.facebook.thrift.transport.*;
import com.facebook.thrift.protocol.*;

@SuppressWarnings({ "unused", "serial" })
public class ReservedKeyword implements TBase, java.io.Serializable, Cloneable {
  private static final TStruct STRUCT_DESC = new TStruct("ReservedKeyword");
  private static final TField RESERVED_FIELD_FIELD_DESC = new TField("reserved_field", TType.I32, (short)1);

  public final Integer reserved_field;
  public static final int RESERVED_FIELD = 1;

  public ReservedKeyword(
      Integer reserved_field) {
    this.reserved_field = reserved_field;
  }

  /**
   * Performs a deep copy on <i>other</i>.
   */
  public ReservedKeyword(ReservedKeyword other) {
    if (other.isSetReserved_field()) {
      this.reserved_field = TBaseHelper.deepCopy(other.reserved_field);
    } else {
      this.reserved_field = null;
    }
  }

  public ReservedKeyword deepCopy() {
    return new ReservedKeyword(this);
  }

  public Integer getReserved_field() {
    return this.reserved_field;
  }

  // Returns true if field reserved_field is set (has been assigned a value) and false otherwise
  public boolean isSetReserved_field() {
    return this.reserved_field != null;
  }

  @Override
  public boolean equals(Object _that) {
    if (_that == null)
      return false;
    if (this == _that)
      return true;
    if (!(_that instanceof ReservedKeyword))
      return false;
    ReservedKeyword that = (ReservedKeyword)_that;

    if (!TBaseHelper.equalsNobinary(this.isSetReserved_field(), that.isSetReserved_field(), this.reserved_field, that.reserved_field)) { return false; }

    return true;
  }

  @Override
  public int hashCode() {
    return Arrays.deepHashCode(new Object[] {reserved_field});
  }

  // This is required to satisfy the TBase interface, but can't be implemented on immutable struture.
  public void read(TProtocol iprot) throws TException {
    throw new TException("unimplemented in android immutable structure");
  }

  public static ReservedKeyword deserialize(TProtocol iprot) throws TException {
    Integer tmp_reserved_field = null;
    TField __field;
    iprot.readStructBegin();
    while (true)
    {
      __field = iprot.readFieldBegin();
      if (__field.type == TType.STOP) {
        break;
      }
      switch (__field.id)
      {
        case RESERVED_FIELD:
          if (__field.type == TType.I32) {
            tmp_reserved_field = iprot.readI32();
          } else {
            TProtocolUtil.skip(iprot, __field.type);
          }
          break;
        default:
          TProtocolUtil.skip(iprot, __field.type);
          break;
      }
      iprot.readFieldEnd();
    }
    iprot.readStructEnd();

    ReservedKeyword _that;
    _that = new ReservedKeyword(
      tmp_reserved_field
    );
    _that.validate();
    return _that;
  }

  public void write(TProtocol oprot) throws TException {
    validate();

    oprot.writeStructBegin(STRUCT_DESC);
    if (this.reserved_field != null) {
      oprot.writeFieldBegin(RESERVED_FIELD_FIELD_DESC);
      oprot.writeI32(this.reserved_field);
      oprot.writeFieldEnd();
    }
    oprot.writeFieldStop();
    oprot.writeStructEnd();
  }

  @Override
  public String toString() {
    return toString(1, true);
  }

  @Override
  public String toString(int indent, boolean prettyPrint) {
    return TBaseHelper.toStringHelper(this, indent, prettyPrint);
  }

  public void validate() throws TException {
    // check for required fields
  }

}
