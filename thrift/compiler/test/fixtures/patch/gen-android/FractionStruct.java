/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
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

/**
 * A integer fraction of the form {numerator} / {denominator}
 * 
 * Useful for representing ratios, rates, and metric accumulators.
 * 
 * Considered 'normal' when the denominator is positive.
 * Considered 'simple' when `normal` and the greatest common divisor of the
 * and `numerator` and `denominator`, is 1.
 */
@SuppressWarnings({ "unused", "serial" })
public class FractionStruct implements TBase, java.io.Serializable, Cloneable {
  private static final TStruct STRUCT_DESC = new TStruct("FractionStruct");
  private static final TField NUMERATOR_FIELD_DESC = new TField("numerator", TType.I64, (short)1);
  private static final TField DENOMINATOR_FIELD_DESC = new TField("denominator", TType.I64, (short)2);

  /**
   * The numerator/dividend/antecedent/upper integer.
   */
  public final Long numerator;
  /**
   * The denominator/divisor/consequent/lower integer.
   */
  public final Long denominator;
  public static final int NUMERATOR = 1;
  public static final int DENOMINATOR = 2;

  public FractionStruct(
      Long numerator,
      Long denominator) {
    this.numerator = numerator;
    this.denominator = denominator;
  }

  /**
   * Performs a deep copy on <i>other</i>.
   */
  public FractionStruct(FractionStruct other) {
    if (other.isSetNumerator()) {
      this.numerator = TBaseHelper.deepCopy(other.numerator);
    } else {
      this.numerator = null;
    }
    if (other.isSetDenominator()) {
      this.denominator = TBaseHelper.deepCopy(other.denominator);
    } else {
      this.denominator = null;
    }
  }

  public FractionStruct deepCopy() {
    return new FractionStruct(this);
  }

  /**
   * The numerator/dividend/antecedent/upper integer.
   */
  public Long getNumerator() {
    return this.numerator;
  }

  // Returns true if field numerator is set (has been assigned a value) and false otherwise
  public boolean isSetNumerator() {
    return this.numerator != null;
  }

  /**
   * The denominator/divisor/consequent/lower integer.
   */
  public Long getDenominator() {
    return this.denominator;
  }

  // Returns true if field denominator is set (has been assigned a value) and false otherwise
  public boolean isSetDenominator() {
    return this.denominator != null;
  }

  @Override
  public boolean equals(Object _that) {
    if (_that == null)
      return false;
    if (this == _that)
      return true;
    if (!(_that instanceof FractionStruct))
      return false;
    FractionStruct that = (FractionStruct)_that;

    if (!TBaseHelper.equalsNobinary(this.isSetNumerator(), that.isSetNumerator(), this.numerator, that.numerator)) { return false; }

    if (!TBaseHelper.equalsNobinary(this.isSetDenominator(), that.isSetDenominator(), this.denominator, that.denominator)) { return false; }

    return true;
  }

  @Override
  public int hashCode() {
    return Arrays.deepHashCode(new Object[] {numerator, denominator});
  }

  // This is required to satisfy the TBase interface, but can't be implemented on immutable struture.
  public void read(TProtocol iprot) throws TException {
    throw new TException("unimplemented in android immutable structure");
  }

  public static FractionStruct deserialize(TProtocol iprot) throws TException {
    Long tmp_numerator = null;
    Long tmp_denominator = null;
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
        case NUMERATOR:
          if (__field.type == TType.I64) {
            tmp_numerator = iprot.readI64();
          } else {
            TProtocolUtil.skip(iprot, __field.type);
          }
          break;
        case DENOMINATOR:
          if (__field.type == TType.I64) {
            tmp_denominator = iprot.readI64();
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

    FractionStruct _that;
    _that = new FractionStruct(
      tmp_numerator
      ,tmp_denominator
    );
    _that.validate();
    return _that;
  }

  public void write(TProtocol oprot) throws TException {
    validate();

    oprot.writeStructBegin(STRUCT_DESC);
    if (this.numerator != null) {
      oprot.writeFieldBegin(NUMERATOR_FIELD_DESC);
      oprot.writeI64(this.numerator);
      oprot.writeFieldEnd();
    }
    if (this.denominator != null) {
      oprot.writeFieldBegin(DENOMINATOR_FIELD_DESC);
      oprot.writeI64(this.denominator);
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

