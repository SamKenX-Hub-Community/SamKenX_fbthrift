<?hh
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

/**
 * Original thrift enum:-
 * RefType
 */
enum facebook_thrift_annotation_cpp_RefType: int {
  Unique = 0;
  Shared = 1;
  SharedMutable = 2;
}

class facebook_thrift_annotation_cpp_RefType_TEnumStaticMetadata implements \IThriftEnumStaticMetadata {
  public static function getEnumMetadata()[]: \tmeta_ThriftEnum {
    return tmeta_ThriftEnum::fromShape(
      shape(
        "name" => "cpp.RefType",
        "elements" => dict[
          0 => "Unique",
          1 => "Shared",
          2 => "SharedMutable",
        ],
      )
    );
  }

  public static function getAllStructuredAnnotations()[]: \TEnumAnnotations {
    return shape(
      'enum' => dict[],
      'constants' => dict[
      ],
    );
  }
}

/**
 * Original thrift struct:-
 * Ref
 */
class facebook_thrift_annotation_cpp_Ref implements \IThriftStruct, \IThriftShapishStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'type',
      'type' => \TType::I32,
      'enum' => facebook_thrift_annotation_cpp_RefType::class,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'type' => 1,
  ];

  const type TConstructorShape = shape(
    ?'type' => ?facebook_thrift_annotation_cpp_RefType,
  );

  const type TShape = shape(
    ?'type' => ?facebook_thrift_annotation_cpp_RefType,
  );
  const int STRUCTURAL_ID = 8496209332976516665;
  /**
   * Original thrift field:-
   * 1: enum cpp.RefType type
   */
  public ?facebook_thrift_annotation_cpp_RefType $type;

  public function __construct(?facebook_thrift_annotation_cpp_RefType $type = null  )[] {
    $this->type = $type;
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'type'),
    );
  }

  public function getName()[]: string {
    return 'Ref';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "cpp.Ref",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_enum" => tmeta_ThriftEnumType::fromShape(
                    shape(
                      "name" => "cpp.RefType",
                    )
                  ),
                )
              ),
              "name" => "type",
            )
          ),
        ],
        "is_union" => false,
      )
    );
  }

  public static function getAllStructuredAnnotations()[]: \TStructAnnotations {
    return shape(
      'struct' => dict[
        'facebook_thrift_annotation_Field' => facebook_thrift_annotation_Field::fromShape(
          shape(
          )
        ),
      ],
      'fields' => dict[
      ],
    );
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'type'),
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
      'type' => $this->type,
    );
  }
  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'type') !== null) {
      $this->type = facebook_thrift_annotation_cpp_RefType::coerce(/* HH_FIXME[4110] */ $parsed['type']);    }    
  }

}

/**
 * Original thrift struct:-
 * Lazy
 */
class facebook_thrift_annotation_cpp_Lazy implements \IThriftStruct, \IThriftShapishStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'ref',
      'type' => \TType::BOOL,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'ref' => 1,
  ];

  const type TConstructorShape = shape(
    ?'ref' => ?bool,
  );

  const type TShape = shape(
    'ref' => bool,
  );
  const int STRUCTURAL_ID = 2641839514020242314;
  /**
   * Original thrift field:-
   * 1: bool ref
   */
  public bool $ref;

  public function __construct(?bool $ref = null  )[] {
    $this->ref = $ref ?? false;
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'ref'),
    );
  }

  public function getName()[]: string {
    return 'Lazy';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "cpp.Lazy",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_BOOL_TYPE,
                )
              ),
              "name" => "ref",
            )
          ),
        ],
        "is_union" => false,
      )
    );
  }

  public static function getAllStructuredAnnotations()[]: \TStructAnnotations {
    return shape(
      'struct' => dict[
        'facebook_thrift_annotation_Field' => facebook_thrift_annotation_Field::fromShape(
          shape(
          )
        ),
      ],
      'fields' => dict[
      ],
    );
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
      $shape['ref'],
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
      'ref' => $this->ref,
    );
  }
  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'ref') !== null) {
      $this->ref = /* HH_FIXME[4110] */ $parsed['ref'];
    }    
  }

}

/**
 * Original thrift struct:-
 * DisableLazyChecksum
 */
class facebook_thrift_annotation_cpp_DisableLazyChecksum implements \IThriftStruct, \IThriftShapishStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
  ];
  const dict<string, int> FIELDMAP = dict[
  ];

  const type TConstructorShape = shape(
  );

  const type TShape = shape(
  );
  const int STRUCTURAL_ID = 957977401221134810;

  public function __construct(  )[] {
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
    );
  }

  public function getName()[]: string {
    return 'DisableLazyChecksum';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "cpp.DisableLazyChecksum",
        "is_union" => false,
      )
    );
  }

  public static function getAllStructuredAnnotations()[]: \TStructAnnotations {
    return shape(
      'struct' => dict[
        'facebook_thrift_annotation_Struct' => facebook_thrift_annotation_Struct::fromShape(
          shape(
          )
        ),
      ],
      'fields' => dict[
      ],
    );
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
    );
  }
  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

  }

}

/**
 * Original thrift struct:-
 * Adapter
 */
class facebook_thrift_annotation_cpp_Adapter implements \IThriftStruct, \IThriftShapishStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'name',
      'type' => \TType::STRING,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'name' => 1,
  ];

  const type TConstructorShape = shape(
    ?'name' => ?string,
  );

  const type TShape = shape(
    'name' => string,
  );
  const int STRUCTURAL_ID = 2593878277785201336;
  /**
   * Original thrift field:-
   * 1: string name
   */
  public string $name;

  public function __construct(?string $name = null  )[] {
    $this->name = $name ?? '';
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'name'),
    );
  }

  public function getName()[]: string {
    return 'Adapter';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "cpp.Adapter",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                )
              ),
              "name" => "name",
            )
          ),
        ],
        "is_union" => false,
      )
    );
  }

  public static function getAllStructuredAnnotations()[]: \TStructAnnotations {
    return shape(
      'struct' => dict[
        'facebook_thrift_annotation_Field' => facebook_thrift_annotation_Field::fromShape(
          shape(
          )
        ),
      ],
      'fields' => dict[
      ],
    );
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
      $shape['name'],
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
      'name' => $this->name,
    );
  }
  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'name') !== null) {
      $this->name = /* HH_FIXME[4110] */ $parsed['name'];
    }    
  }

}

/**
 * Original thrift struct:-
 * PackIsset
 */
class facebook_thrift_annotation_cpp_PackIsset implements \IThriftStruct, \IThriftShapishStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'atomic',
      'type' => \TType::BOOL,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'atomic' => 1,
  ];

  const type TConstructorShape = shape(
    ?'atomic' => ?bool,
  );

  const type TShape = shape(
    'atomic' => bool,
  );
  const int STRUCTURAL_ID = 1587553453134051231;
  /**
   * Original thrift field:-
   * 1: bool atomic
   */
  public bool $atomic;

  public function __construct(?bool $atomic = null  )[] {
    $this->atomic = $atomic ?? false;
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'atomic'),
    );
  }

  public function getName()[]: string {
    return 'PackIsset';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "cpp.PackIsset",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_BOOL_TYPE,
                )
              ),
              "name" => "atomic",
            )
          ),
        ],
        "is_union" => false,
      )
    );
  }

  public static function getAllStructuredAnnotations()[]: \TStructAnnotations {
    return shape(
      'struct' => dict[
        'facebook_thrift_annotation_Struct' => facebook_thrift_annotation_Struct::fromShape(
          shape(
          )
        ),
      ],
      'fields' => dict[
      ],
    );
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
      $shape['atomic'],
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
      'atomic' => $this->atomic,
    );
  }
  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'atomic') !== null) {
      $this->atomic = /* HH_FIXME[4110] */ $parsed['atomic'];
    }    
  }

}

