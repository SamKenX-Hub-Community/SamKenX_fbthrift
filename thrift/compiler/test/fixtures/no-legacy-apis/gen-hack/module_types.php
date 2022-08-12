<?hh
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

namespace fixtures\no-legacy-apis;

/**
 * Original thrift enum:-
 * MyEnum
 */
<<\ThriftTypeInfo(shape('uri' => 'test.dev/fixtures/no-legacy-apis/MyEnum'))>>
enum MyEnum: int {
  MyValue1 = 0;
  MyValue2 = 1;
}

class MyEnum_TEnumStaticMetadata implements \IThriftEnumStaticMetadata {
  public static function getEnumMetadata()[]: \tmeta_ThriftEnum {
    return \tmeta_ThriftEnum::fromShape(
      shape(
        "name" => "module.MyEnum",
        "elements" => dict[
          0 => "MyValue1",
          1 => "MyValue2",
        ],
      )
    );
  }

  public static function getAllStructuredAnnotations()[write_props]: \TEnumAnnotations {
    return shape(
      'enum' => dict[],
      'constants' => dict[
      ],
    );
  }
}

/**
 * Original thrift struct:-
 * MyStruct
 */
<<\ThriftTypeInfo(shape('uri' => 'test.dev/fixtures/no-legacy-apis/MyStruct'))>>
class MyStruct implements \IThriftSyncStruct, \IThriftShapishSyncStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'myIntField',
      'type' => \TType::I64,
    ),
    2 => shape(
      'var' => 'myStringField',
      'type' => \TType::STRING,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'myIntField' => 1,
    'myStringField' => 2,
  ];

  const type TConstructorShape = shape(
    ?'myIntField' => ?int,
    ?'myStringField' => ?string,
  );

  const type TShape = shape(
    'myIntField' => int,
    'myStringField' => string,
    ...
  );
  const int STRUCTURAL_ID = 503180278934651066;
  /**
   * Original thrift field:-
   * 1: i64 myIntField
   */
  public int $myIntField;
  /**
   * Original thrift field:-
   * 2: string myStringField
   */
  public string $myStringField;

  public function __construct(?int $myIntField = null, ?string $myStringField = null)[] {
    $this->myIntField = $myIntField ?? 0;
    $this->myStringField = $myStringField ?? '';
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'myIntField'),
      Shapes::idx($shape, 'myStringField'),
    );
  }

  public function getName()[]: string {
    return 'MyStruct';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return \tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.MyStruct",
        "fields" => vec[
          \tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => \tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => \tmeta_ThriftPrimitiveType::THRIFT_I64_TYPE,
                )
              ),
              "name" => "myIntField",
            )
          ),
          \tmeta_ThriftField::fromShape(
            shape(
              "id" => 2,
              "type" => \tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => \tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                )
              ),
              "name" => "myStringField",
            )
          ),
        ],
        "is_union" => false,
      )
    );
  }

  public static function getAllStructuredAnnotations()[write_props]: \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
      ],
    );
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
      $shape['myIntField'],
      $shape['myStringField'],
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
      'myIntField' => $this->myIntField,
      'myStringField' => $this->myStringField,
    );
  }
  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'myIntField') !== null) {
      $this->myIntField = HH\FIXME\UNSAFE_CAST<mixed, int>($parsed['myIntField']);
    }
    if (idx($parsed, 'myStringField') !== null) {
      $this->myStringField = HH\FIXME\UNSAFE_CAST<mixed, string>($parsed['myStringField']);
    }
  }

}

enum MyUnionEnum: int {
  _EMPTY_ = 0;
  myEnum = 1;
  myDataItem = 2;
}

/**
 * Original thrift struct:-
 * MyUnion
 */
<<\ThriftTypeInfo(shape('uri' => 'test.dev/fixtures/no-legacy-apis/MyUnion'))>>
class MyUnion implements \IThriftSyncStruct, \IThriftUnion<\fixtures\no-legacy-apis\MyUnionEnum>, \IThriftShapishSyncStruct {
  use \ThriftUnionSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'myEnum',
      'union' => true,
      'type' => \TType::I32,
      'enum' => \fixtures\no-legacy-apis\MyEnum::class,
    ),
    2 => shape(
      'var' => 'myDataItem',
      'union' => true,
      'type' => \TType::STRUCT,
      'class' => \fixtures\no-legacy-apis\MyStruct::class,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'myEnum' => 1,
    'myDataItem' => 2,
  ];

  const type TConstructorShape = shape(
    ?'myEnum' => ?\fixtures\no-legacy-apis\MyEnum,
    ?'myDataItem' => ?\fixtures\no-legacy-apis\MyStruct,
  );

  const type TShape = shape(
    ?'myEnum' => ?\fixtures\no-legacy-apis\MyEnum,
    ?'myDataItem' => ?\fixtures\no-legacy-apis\MyStruct::TShape,
    ...
  );
  const int STRUCTURAL_ID = 7590509256672853308;
  /**
   * Original thrift field:-
   * 1: enum module.MyEnum myEnum
   */
  public ?\fixtures\no-legacy-apis\MyEnum $myEnum;
  /**
   * Original thrift field:-
   * 2: struct module.MyStruct myDataItem
   */
  public ?\fixtures\no-legacy-apis\MyStruct $myDataItem;
  protected \fixtures\no-legacy-apis\MyUnionEnum $_type = \fixtures\no-legacy-apis\MyUnionEnum::_EMPTY_;

  public function __construct(?\fixtures\no-legacy-apis\MyEnum $myEnum = null, ?\fixtures\no-legacy-apis\MyStruct $myDataItem = null)[] {
    $this->_type = \fixtures\no-legacy-apis\MyUnionEnum::_EMPTY_;
    if ($myEnum !== null) {
      $this->myEnum = $myEnum;
      $this->_type = \fixtures\no-legacy-apis\MyUnionEnum::myEnum;
    }
    if ($myDataItem !== null) {
      $this->myDataItem = $myDataItem;
      $this->_type = \fixtures\no-legacy-apis\MyUnionEnum::myDataItem;
    }
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'myEnum'),
      Shapes::idx($shape, 'myDataItem'),
    );
  }

  public function getName()[]: string {
    return 'MyUnion';
  }

  public function getType()[]: \fixtures\no-legacy-apis\MyUnionEnum {
    return $this->_type;
  }

  public function reset()[write_props]: void {
    switch ($this->_type) {
      case \fixtures\no-legacy-apis\MyUnionEnum::myEnum:
        $this->myEnum = null;
        break;
      case \fixtures\no-legacy-apis\MyUnionEnum::myDataItem:
        $this->myDataItem = null;
        break;
      case \fixtures\no-legacy-apis\MyUnionEnum::_EMPTY_:
        break;
    }
    $this->_type = \fixtures\no-legacy-apis\MyUnionEnum::_EMPTY_;
  }

  public function set_myEnum(\fixtures\no-legacy-apis\MyEnum $myEnum)[write_props]: this {
    $this->reset();
    $this->_type = \fixtures\no-legacy-apis\MyUnionEnum::myEnum;
    $this->myEnum = $myEnum;
    return $this;
  }

  public function get_myEnum()[]: ?\fixtures\no-legacy-apis\MyEnum {
    return $this->myEnum;
  }

  public function getx_myEnum()[]: \fixtures\no-legacy-apis\MyEnum {
    invariant(
      $this->_type === \fixtures\no-legacy-apis\MyUnionEnum::myEnum,
      'get_myEnum called on an instance of MyUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->myEnum as nonnull;
  }

  public function set_myDataItem(\fixtures\no-legacy-apis\MyStruct $myDataItem)[write_props]: this {
    $this->reset();
    $this->_type = \fixtures\no-legacy-apis\MyUnionEnum::myDataItem;
    $this->myDataItem = $myDataItem;
    return $this;
  }

  public function get_myDataItem()[]: ?\fixtures\no-legacy-apis\MyStruct {
    return $this->myDataItem;
  }

  public function getx_myDataItem()[]: \fixtures\no-legacy-apis\MyStruct {
    invariant(
      $this->_type === \fixtures\no-legacy-apis\MyUnionEnum::myDataItem,
      'get_myDataItem called on an instance of MyUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->myDataItem as nonnull;
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return \tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.MyUnion",
        "fields" => vec[
          \tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => \tmeta_ThriftType::fromShape(
                shape(
                  "t_enum" => \tmeta_ThriftEnumType::fromShape(
                    shape(
                      "name" => "module.MyEnum",
                    )
                  ),
                )
              ),
              "name" => "myEnum",
            )
          ),
          \tmeta_ThriftField::fromShape(
            shape(
              "id" => 2,
              "type" => \tmeta_ThriftType::fromShape(
                shape(
                  "t_struct" => \tmeta_ThriftStructType::fromShape(
                    shape(
                      "name" => "module.MyStruct",
                    )
                  ),
                )
              ),
              "name" => "myDataItem",
            )
          ),
        ],
        "is_union" => true,
      )
    );
  }

  public static function getAllStructuredAnnotations()[write_props]: \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
      ],
    );
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'myEnum'),
      Shapes::idx($shape, 'myDataItem') === null ? null : (\fixtures\no-legacy-apis\MyStruct::__fromShape($shape['myDataItem'])),
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
      'myEnum' => $this->myEnum,
      'myDataItem' => $this->myDataItem?->__toShape(),
    );
  }
  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

  public function readFromJson(string $jsonText): void {
    $this->_type = \fixtures\no-legacy-apis\MyUnionEnum::_EMPTY_;
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'myEnum') !== null) {
      $this->myEnum = \fixtures\no-legacy-apis\MyEnum::coerce(HH\FIXME\UNSAFE_CAST<mixed, \fixtures\no-legacy-apis\MyEnum>($parsed['myEnum']));
      $this->_type = \fixtures\no-legacy-apis\MyUnionEnum::myEnum;
    }
    if (idx($parsed, 'myDataItem') !== null) {
      $_tmp0 = \json_encode(HH\FIXME\UNSAFE_CAST<mixed, \fixtures\no-legacy-apis\MyStruct>($parsed['myDataItem']));
      $_tmp1 = \fixtures\no-legacy-apis\MyStruct::withDefaultValues();
      $_tmp1->readFromJson($_tmp0);
      $this->myDataItem = $_tmp1;
      $this->_type = \fixtures\no-legacy-apis\MyUnionEnum::myDataItem;
    }
  }

}

