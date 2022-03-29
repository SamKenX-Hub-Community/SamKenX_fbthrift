/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

package test.fixtures.complex_struct;

import com.facebook.swift.codec.*;
import com.facebook.swift.codec.ThriftField.Requiredness;
import com.facebook.swift.codec.ThriftField.Recursiveness;
import java.util.*;
import org.apache.thrift.*;
import org.apache.thrift.transport.*;
import org.apache.thrift.protocol.*;

import static com.google.common.base.MoreObjects.toStringHelper;

@SwiftGenerated
@ThriftUnion("MyUnionFloatFieldThrowExp")
public final class MyUnionFloatFieldThrowExp implements com.facebook.thrift.payload.ThriftSerializable {
    private static final TStruct STRUCT_DESC = new TStruct("MyUnionFloatFieldThrowExp");
    private static final Map<String, Integer> NAMES_TO_IDS = new HashMap();
    public static final Map<String, Integer> THRIFT_NAMES_TO_IDS = new HashMap();
    private static final Map<Integer, TField> FIELD_METADATA = new HashMap<>();

    public static final int _MYENUM = 1;
    private static final TField MY_ENUM_FIELD_DESC = new TField("myEnum", TType.I32, (short)1);
    public static final int _SETFLOAT = 2;
    private static final TField SET_FLOAT_FIELD_DESC = new TField("setFloat", TType.LIST, (short)2);
    public static final int _MYDATAITEM = 3;
    private static final TField MY_DATA_ITEM_FIELD_DESC = new TField("myDataItem", TType.STRUCT, (short)3);
    public static final int _COMPLEXNESTEDSTRUCT = 4;
    private static final TField COMPLEX_NESTED_STRUCT_FIELD_DESC = new TField("complexNestedStruct", TType.STRUCT, (short)4);

    static {
      NAMES_TO_IDS.put("myEnum", 1);
      THRIFT_NAMES_TO_IDS.put("myEnum", 1);
      FIELD_METADATA.put(1, MY_ENUM_FIELD_DESC);
      NAMES_TO_IDS.put("setFloat", 2);
      THRIFT_NAMES_TO_IDS.put("setFloat", 2);
      FIELD_METADATA.put(2, SET_FLOAT_FIELD_DESC);
      NAMES_TO_IDS.put("myDataItem", 3);
      THRIFT_NAMES_TO_IDS.put("myDataItem", 3);
      FIELD_METADATA.put(3, MY_DATA_ITEM_FIELD_DESC);
      NAMES_TO_IDS.put("complexNestedStruct", 4);
      THRIFT_NAMES_TO_IDS.put("complexNestedStruct", 4);
      FIELD_METADATA.put(4, COMPLEX_NESTED_STRUCT_FIELD_DESC);
    }

    private Object value;
    private short id;

    @ThriftConstructor
    public MyUnionFloatFieldThrowExp() {
    }
    
    @ThriftConstructor
    @Deprecated
    public MyUnionFloatFieldThrowExp(final test.fixtures.complex_struct.MyEnum myEnum) {
        this.value = myEnum;
        this.id = 1;
    }
    
    @ThriftConstructor
    @Deprecated
    public MyUnionFloatFieldThrowExp(final List<List<Float>> setFloat) {
        this.value = setFloat;
        this.id = 2;
    }
    
    @ThriftConstructor
    @Deprecated
    public MyUnionFloatFieldThrowExp(final test.fixtures.complex_struct.MyDataItem myDataItem) {
        this.value = myDataItem;
        this.id = 3;
    }
    
    @ThriftConstructor
    @Deprecated
    public MyUnionFloatFieldThrowExp(final test.fixtures.complex_struct.ComplexNestedStruct complexNestedStruct) {
        this.value = complexNestedStruct;
        this.id = 4;
    }
    
    public static MyUnionFloatFieldThrowExp fromMyEnum(final test.fixtures.complex_struct.MyEnum myEnum) {
        MyUnionFloatFieldThrowExp res = new MyUnionFloatFieldThrowExp();
        res.value = myEnum;
        res.id = 1;
        return res;
    }
    
    public static MyUnionFloatFieldThrowExp fromSetFloat(final List<List<Float>> setFloat) {
        MyUnionFloatFieldThrowExp res = new MyUnionFloatFieldThrowExp();
        res.value = setFloat;
        res.id = 2;
        return res;
    }
    
    public static MyUnionFloatFieldThrowExp fromMyDataItem(final test.fixtures.complex_struct.MyDataItem myDataItem) {
        MyUnionFloatFieldThrowExp res = new MyUnionFloatFieldThrowExp();
        res.value = myDataItem;
        res.id = 3;
        return res;
    }
    
    public static MyUnionFloatFieldThrowExp fromComplexNestedStruct(final test.fixtures.complex_struct.ComplexNestedStruct complexNestedStruct) {
        MyUnionFloatFieldThrowExp res = new MyUnionFloatFieldThrowExp();
        res.value = complexNestedStruct;
        res.id = 4;
        return res;
    }
    

    @com.facebook.swift.codec.ThriftField(value=1, name="myEnum", requiredness=Requiredness.NONE)
    public test.fixtures.complex_struct.MyEnum getMyEnum() {
        if (this.id != 1) {
            throw new IllegalStateException("Not a myEnum element!");
        }
        return (test.fixtures.complex_struct.MyEnum) value;
    }

    public boolean isSetMyEnum() {
        return this.id == 1;
    }

    @com.facebook.swift.codec.ThriftField(value=2, name="setFloat", requiredness=Requiredness.NONE)
    public List<List<Float>> getSetFloat() {
        if (this.id != 2) {
            throw new IllegalStateException("Not a setFloat element!");
        }
        return (List<List<Float>>) value;
    }

    public boolean isSetSetFloat() {
        return this.id == 2;
    }

    @com.facebook.swift.codec.ThriftField(value=3, name="myDataItem", requiredness=Requiredness.NONE)
    public test.fixtures.complex_struct.MyDataItem getMyDataItem() {
        if (this.id != 3) {
            throw new IllegalStateException("Not a myDataItem element!");
        }
        return (test.fixtures.complex_struct.MyDataItem) value;
    }

    public boolean isSetMyDataItem() {
        return this.id == 3;
    }

    @com.facebook.swift.codec.ThriftField(value=4, name="complexNestedStruct", requiredness=Requiredness.NONE)
    public test.fixtures.complex_struct.ComplexNestedStruct getComplexNestedStruct() {
        if (this.id != 4) {
            throw new IllegalStateException("Not a complexNestedStruct element!");
        }
        return (test.fixtures.complex_struct.ComplexNestedStruct) value;
    }

    public boolean isSetComplexNestedStruct() {
        return this.id == 4;
    }

    @ThriftUnionId
    public short getThriftId() {
        return this.id;
    }

    public String getThriftName() {
        TField tField = (TField) FIELD_METADATA.get((int) this.id);
        if (tField == null) {
            return "null";
        } else {
            return tField.name;
        }
    }

    public void accept(Visitor visitor) {
        if (isSetMyEnum()) {
            visitor.visitMyEnum(getMyEnum());
            return;
        }
        if (isSetSetFloat()) {
            visitor.visitSetFloat(getSetFloat());
            return;
        }
        if (isSetMyDataItem()) {
            visitor.visitMyDataItem(getMyDataItem());
            return;
        }
        if (isSetComplexNestedStruct()) {
            visitor.visitComplexNestedStruct(getComplexNestedStruct());
            return;
        }
    }

    @Override
    public String toString() {
        return toStringHelper(this)
            .add("value", value)
            .add("id", id)
            .add("name", getThriftName())
            .add("type", value == null ? "<null>" : value.getClass().getSimpleName())
            .toString();
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) {
            return true;
        }
        if (o == null || getClass() != o.getClass()) {
            return false;
        }

        MyUnionFloatFieldThrowExp other = (MyUnionFloatFieldThrowExp)o;

        return Objects.equals(this.id, other.id)
                && Objects.deepEquals(this.value, other.value);
    }

    @Override
    public int hashCode() {
        return Arrays.deepHashCode(new Object[] {
            id,
            value,
        });
    }

    public interface Visitor {
        void visitMyEnum(test.fixtures.complex_struct.MyEnum myEnum);
        void visitSetFloat(List<List<Float>> setFloat);
        void visitMyDataItem(test.fixtures.complex_struct.MyDataItem myDataItem);
        void visitComplexNestedStruct(test.fixtures.complex_struct.ComplexNestedStruct complexNestedStruct);
    }

    public void write0(TProtocol oprot) throws TException {
      if (this.id != 0 && this.value == null ){
         return;
      }
      oprot.writeStructBegin(STRUCT_DESC);
      switch (this.id) {
      case _MYENUM: {
        oprot.writeFieldBegin(MY_ENUM_FIELD_DESC);
        test.fixtures.complex_struct.MyEnum myEnum = (test.fixtures.complex_struct.MyEnum)this.value;
        oprot.writeI32(myEnum == null ? 0 : myEnum.getValue());
        oprot.writeFieldEnd();
        break;
      }
      case _SETFLOAT: {
        oprot.writeFieldBegin(SET_FLOAT_FIELD_DESC);
        List<List<Float>> _iter0 = (List<List<Float>>)this.value;
        oprot.writeListBegin(new TList(TType.LIST, _iter0.size()));
        for (List<Float> _iter1 : _iter0) {
          oprot.writeListBegin(new TList(TType.FLOAT, _iter1.size()));
        for (float _iter2 : _iter1) {
          oprot.writeFloat(_iter2);
        }
        oprot.writeListEnd();
        }
        oprot.writeListEnd();
        oprot.writeFieldEnd();
        break;
      }
      case _MYDATAITEM: {
        oprot.writeFieldBegin(MY_DATA_ITEM_FIELD_DESC);
        test.fixtures.complex_struct.MyDataItem myDataItem = (test.fixtures.complex_struct.MyDataItem)this.value;
        myDataItem.write0(oprot);
        oprot.writeFieldEnd();
        break;
      }
      case _COMPLEXNESTEDSTRUCT: {
        oprot.writeFieldBegin(COMPLEX_NESTED_STRUCT_FIELD_DESC);
        test.fixtures.complex_struct.ComplexNestedStruct complexNestedStruct = (test.fixtures.complex_struct.ComplexNestedStruct)this.value;
        complexNestedStruct.write0(oprot);
        oprot.writeFieldEnd();
        break;
      }
      default:
          // ignore unknown field
      }
      oprot.writeFieldStop();
      oprot.writeStructEnd();
    }
    
    
    public static com.facebook.thrift.payload.Reader<MyUnionFloatFieldThrowExp> asReader() {
      return MyUnionFloatFieldThrowExp::read0;
    }
    
    public static MyUnionFloatFieldThrowExp read0(TProtocol oprot) throws TException {
      MyUnionFloatFieldThrowExp res = new MyUnionFloatFieldThrowExp();
      res.value = null;
      res.id = (short) 0;
      oprot.readStructBegin(MyUnionFloatFieldThrowExp.NAMES_TO_IDS, MyUnionFloatFieldThrowExp.THRIFT_NAMES_TO_IDS, MyUnionFloatFieldThrowExp.FIELD_METADATA);
      TField __field = oprot.readFieldBegin();
      if (__field.type != TType.STOP) {
          switch (__field.id) {
          case _MYENUM:
            if (__field.type == MY_ENUM_FIELD_DESC.type) {
              test.fixtures.complex_struct.MyEnum myEnum = test.fixtures.complex_struct.MyEnum.fromInteger(oprot.readI32());
              res.value = myEnum;
            }
            break;
          case _SETFLOAT:
            if (__field.type == SET_FLOAT_FIELD_DESC.type) {
              List<List<Float>> setFloat;
            {
            TList _list = oprot.readListBegin();
            setFloat = new ArrayList<List<Float>>(Math.max(0, _list.size));
            for (int _i = 0; (_list.size < 0) ? oprot.peekList() : (_i < _list.size); _i++) {
                
                List<Float> _value1;
                            {
                            TList _list1 = oprot.readListBegin();
                            _value1 = new ArrayList<Float>(Math.max(0, _list1.size));
                            for (int _i1 = 0; (_list1.size < 0) ? oprot.peekList() : (_i1 < _list1.size); _i1++) {
                                
                                
                                float _value2 = oprot.readFloat();
                                
                                
                                _value1.add(_value2);
                                
                            }
                            oprot.readListEnd();
                            }
                setFloat.add(_value1);
            }
            oprot.readListEnd();
            }
              res.value = setFloat;
            }
            break;
          case _MYDATAITEM:
            if (__field.type == MY_DATA_ITEM_FIELD_DESC.type) {
              test.fixtures.complex_struct.MyDataItem myDataItem = test.fixtures.complex_struct.MyDataItem.read0(oprot);
              res.value = myDataItem;
            }
            break;
          case _COMPLEXNESTEDSTRUCT:
            if (__field.type == COMPLEX_NESTED_STRUCT_FIELD_DESC.type) {
              test.fixtures.complex_struct.ComplexNestedStruct complexNestedStruct = test.fixtures.complex_struct.ComplexNestedStruct.read0(oprot);
              res.value = complexNestedStruct;
            }
            break;
          default:
            TProtocolUtil.skip(oprot, __field.type);
          }
        if (res.value != null) {
          res.id = __field.id;
        }
        oprot.readFieldEnd();
        TField __stopField = oprot.readFieldBegin(); // Consume the STOP byte
        if (__stopField.type != TType.STOP) {
          throw new TProtocolException(TProtocolException.INVALID_DATA, "Union 'MyUnionFloatFieldThrowExp' is missing a STOP byte");
        }
      }
      oprot.readStructEnd();
      return res;
    }
}
