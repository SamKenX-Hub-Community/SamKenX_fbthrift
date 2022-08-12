<?hh
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

/**
 * Original thrift service:-
 * Raiser
 */
interface RaiserAsyncIf extends \IThriftAsyncIf {
  /**
   * Original thrift definition:-
   * void
   *   doBland();
   */
  public function doBland(): Awaitable<void>;

  /**
   * Original thrift definition:-
   * void
   *   doRaise()
   *   throws (1: Banal b,
   *           2: Fiery f,
   *           3: Serious s);
   */
  public function doRaise(): Awaitable<void>;

  /**
   * Original thrift definition:-
   * string
   *   get200();
   */
  public function get200(): Awaitable<string>;

  /**
   * Original thrift definition:-
   * string
   *   get500()
   *   throws (1: Fiery f,
   *           2: Banal b,
   *           3: Serious s);
   */
  public function get500(): Awaitable<string>;
}

/**
 * Original thrift service:-
 * Raiser
 */
interface RaiserIf extends \IThriftSyncIf {
  /**
   * Original thrift definition:-
   * void
   *   doBland();
   */
  public function doBland(): void;

  /**
   * Original thrift definition:-
   * void
   *   doRaise()
   *   throws (1: Banal b,
   *           2: Fiery f,
   *           3: Serious s);
   */
  public function doRaise(): void;

  /**
   * Original thrift definition:-
   * string
   *   get200();
   */
  public function get200(): string;

  /**
   * Original thrift definition:-
   * string
   *   get500()
   *   throws (1: Fiery f,
   *           2: Banal b,
   *           3: Serious s);
   */
  public function get500(): string;
}

/**
 * Original thrift service:-
 * Raiser
 */
interface RaiserAsyncClientIf extends RaiserAsyncIf {
}

/**
 * Original thrift service:-
 * Raiser
 */
interface RaiserClientIf extends \IThriftSyncIf {
  /**
   * Original thrift definition:-
   * void
   *   doBland();
   */
  public function doBland(): Awaitable<void>;

  /**
   * Original thrift definition:-
   * void
   *   doRaise()
   *   throws (1: Banal b,
   *           2: Fiery f,
   *           3: Serious s);
   */
  public function doRaise(): Awaitable<void>;

  /**
   * Original thrift definition:-
   * string
   *   get200();
   */
  public function get200(): Awaitable<string>;

  /**
   * Original thrift definition:-
   * string
   *   get500()
   *   throws (1: Fiery f,
   *           2: Banal b,
   *           3: Serious s);
   */
  public function get500(): Awaitable<string>;
}

/**
 * Original thrift service:-
 * Raiser
 */
trait RaiserClientBase {
  require extends \ThriftClientBase;

}

class RaiserAsyncClient extends \ThriftClientBase implements RaiserAsyncClientIf {
  use RaiserClientBase;

  /**
   * Original thrift definition:-
   * void
   *   doBland();
   */
  public async function doBland(): Awaitable<void> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = Raiser_doBland_args::withDefaultValues();
    await $this->asyncHandler_->genBefore("Raiser", "doBland", $args);
    $currentseqid = $this->sendImplHelper($args, "doBland", false);
    await $this->genAwaitResponse(Raiser_doBland_result::class, "doBland", true, $currentseqid, $rpc_options);
  }

  /**
   * Original thrift definition:-
   * void
   *   doRaise()
   *   throws (1: Banal b,
   *           2: Fiery f,
   *           3: Serious s);
   */
  public async function doRaise(): Awaitable<void> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = Raiser_doRaise_args::withDefaultValues();
    await $this->asyncHandler_->genBefore("Raiser", "doRaise", $args);
    $currentseqid = $this->sendImplHelper($args, "doRaise", false);
    await $this->genAwaitResponse(Raiser_doRaise_result::class, "doRaise", true, $currentseqid, $rpc_options);
  }

  /**
   * Original thrift definition:-
   * string
   *   get200();
   */
  public async function get200(): Awaitable<string> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = Raiser_get200_args::withDefaultValues();
    await $this->asyncHandler_->genBefore("Raiser", "get200", $args);
    $currentseqid = $this->sendImplHelper($args, "get200", false);
    return await $this->genAwaitResponse(Raiser_get200_result::class, "get200", false, $currentseqid, $rpc_options);
  }

  /**
   * Original thrift definition:-
   * string
   *   get500()
   *   throws (1: Fiery f,
   *           2: Banal b,
   *           3: Serious s);
   */
  public async function get500(): Awaitable<string> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = Raiser_get500_args::withDefaultValues();
    await $this->asyncHandler_->genBefore("Raiser", "get500", $args);
    $currentseqid = $this->sendImplHelper($args, "get500", false);
    return await $this->genAwaitResponse(Raiser_get500_result::class, "get500", false, $currentseqid, $rpc_options);
  }

}

class RaiserClient extends \ThriftClientBase implements RaiserClientIf {
  use RaiserClientBase;

  /**
   * Original thrift definition:-
   * void
   *   doBland();
   */
  public async function doBland(): Awaitable<void> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = Raiser_doBland_args::withDefaultValues();
    await $this->asyncHandler_->genBefore("Raiser", "doBland", $args);
    $currentseqid = $this->sendImplHelper($args, "doBland", false);
    await $this->genAwaitResponse(Raiser_doBland_result::class, "doBland", true, $currentseqid, $rpc_options);
  }

  /**
   * Original thrift definition:-
   * void
   *   doRaise()
   *   throws (1: Banal b,
   *           2: Fiery f,
   *           3: Serious s);
   */
  public async function doRaise(): Awaitable<void> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = Raiser_doRaise_args::withDefaultValues();
    await $this->asyncHandler_->genBefore("Raiser", "doRaise", $args);
    $currentseqid = $this->sendImplHelper($args, "doRaise", false);
    await $this->genAwaitResponse(Raiser_doRaise_result::class, "doRaise", true, $currentseqid, $rpc_options);
  }

  /**
   * Original thrift definition:-
   * string
   *   get200();
   */
  public async function get200(): Awaitable<string> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = Raiser_get200_args::withDefaultValues();
    await $this->asyncHandler_->genBefore("Raiser", "get200", $args);
    $currentseqid = $this->sendImplHelper($args, "get200", false);
    return await $this->genAwaitResponse(Raiser_get200_result::class, "get200", false, $currentseqid, $rpc_options);
  }

  /**
   * Original thrift definition:-
   * string
   *   get500()
   *   throws (1: Fiery f,
   *           2: Banal b,
   *           3: Serious s);
   */
  public async function get500(): Awaitable<string> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = Raiser_get500_args::withDefaultValues();
    await $this->asyncHandler_->genBefore("Raiser", "get500", $args);
    $currentseqid = $this->sendImplHelper($args, "get500", false);
    return await $this->genAwaitResponse(Raiser_get500_result::class, "get500", false, $currentseqid, $rpc_options);
  }

  /* send and recv functions */
  public function send_doBland(): int {
    $args = Raiser_doBland_args::withDefaultValues();
    return $this->sendImplHelper($args, "doBland", false);
  }
  public function recv_doBland(?int $expectedsequenceid = null): void {
    $this->recvImplHelper(Raiser_doBland_result::class, "doBland", true, $expectedsequenceid);
  }
  public function send_doRaise(): int {
    $args = Raiser_doRaise_args::withDefaultValues();
    return $this->sendImplHelper($args, "doRaise", false);
  }
  public function recv_doRaise(?int $expectedsequenceid = null): void {
    $this->recvImplHelper(Raiser_doRaise_result::class, "doRaise", true, $expectedsequenceid);
  }
  public function send_get200(): int {
    $args = Raiser_get200_args::withDefaultValues();
    return $this->sendImplHelper($args, "get200", false);
  }
  public function recv_get200(?int $expectedsequenceid = null): string {
    return $this->recvImplHelper(Raiser_get200_result::class, "get200", false, $expectedsequenceid);
  }
  public function send_get500(): int {
    $args = Raiser_get500_args::withDefaultValues();
    return $this->sendImplHelper($args, "get500", false);
  }
  public function recv_get500(?int $expectedsequenceid = null): string {
    return $this->recvImplHelper(Raiser_get500_result::class, "get500", false, $expectedsequenceid);
  }
}

// HELPER FUNCTIONS AND STRUCTURES

class Raiser_doBland_args implements \IThriftSyncStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
  ];
  const dict<string, int> FIELDMAP = dict[
  ];

  const type TConstructorShape = shape(
  );

  const int STRUCTURAL_ID = 957977401221134810;

  public function __construct()[] {
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
    );
  }

  public function getName()[]: string {
    return 'Raiser_doBland_args';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.doBland_args",
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

  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

}

class Raiser_doBland_result extends \ThriftSyncStructWithoutResult {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
  ];
  const dict<string, int> FIELDMAP = dict[
  ];

  const type TConstructorShape = shape(
  );

  const int STRUCTURAL_ID = 957977401221134810;

  public function __construct()[] {
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
    );
  }

  public function getName()[]: string {
    return 'Raiser_doBland_result';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.Raiser_doBland_result",
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

  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

}

class Raiser_doRaise_args implements \IThriftSyncStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
  ];
  const dict<string, int> FIELDMAP = dict[
  ];

  const type TConstructorShape = shape(
  );

  const int STRUCTURAL_ID = 957977401221134810;

  public function __construct()[] {
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
    );
  }

  public function getName()[]: string {
    return 'Raiser_doRaise_args';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.doRaise_args",
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

  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

}

class Raiser_doRaise_result extends \ThriftSyncStructWithoutResult {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'b',
      'type' => \TType::STRUCT,
      'class' => Banal::class,
    ),
    2 => shape(
      'var' => 'f',
      'type' => \TType::STRUCT,
      'class' => Fiery::class,
    ),
    3 => shape(
      'var' => 's',
      'type' => \TType::STRUCT,
      'class' => Serious::class,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'b' => 1,
    'f' => 2,
    's' => 3,
  ];

  const type TConstructorShape = shape(
    ?'b' => ?Banal,
    ?'f' => ?Fiery,
    ?'s' => ?Serious,
  );

  const int STRUCTURAL_ID = 1991614683033939916;
  public ?Banal $b;
  public ?Fiery $f;
  public ?Serious $s;

  public function __construct(?Banal $b = null, ?Fiery $f = null, ?Serious $s = null)[] {
    $this->b = $b;
    $this->f = $f;
    $this->s = $s;
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'b'),
      Shapes::idx($shape, 'f'),
      Shapes::idx($shape, 's'),
    );
  }

  public function getName()[]: string {
    return 'Raiser_doRaise_result';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.Raiser_doRaise_result",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_typedef" => tmeta_ThriftTypedefType::fromShape(
                    shape(
                      "name" => "module.Banal",
                      "underlyingType" => tmeta_ThriftType::fromShape(
                        shape(
                          "t_struct" => tmeta_ThriftStructType::fromShape(
                            shape(
                              "name" => "module.Banal",
                            )
                          ),
                        )
                      ),
                    )
                  ),
                )
              ),
              "name" => "b",
            )
          ),
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 2,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_struct" => tmeta_ThriftStructType::fromShape(
                    shape(
                      "name" => "module.Fiery",
                    )
                  ),
                )
              ),
              "name" => "f",
            )
          ),
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 3,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_struct" => tmeta_ThriftStructType::fromShape(
                    shape(
                      "name" => "module.Serious",
                    )
                  ),
                )
              ),
              "name" => "s",
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

  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

  public function checkForException(): ?\TException {
    if ($this->b !== null) {
      return $this->b;
    }
    if ($this->f !== null) {
      return $this->f;
    }
    if ($this->s !== null) {
      return $this->s;
    }
    return null;
  }
}

class Raiser_get200_args implements \IThriftSyncStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
  ];
  const dict<string, int> FIELDMAP = dict[
  ];

  const type TConstructorShape = shape(
  );

  const int STRUCTURAL_ID = 957977401221134810;

  public function __construct()[] {
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
    );
  }

  public function getName()[]: string {
    return 'Raiser_get200_args';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.get200_args",
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

  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

}

class Raiser_get200_result extends \ThriftSyncStructWithResult {
  use \ThriftSerializationTrait;

  const type TResult = string;

  const dict<int, this::TFieldSpec> SPEC = dict[
    0 => shape(
      'var' => 'success',
      'type' => \TType::STRING,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'success' => 0,
  ];

  const type TConstructorShape = shape(
    ?'success' => ?this::TResult,
  );

  const int STRUCTURAL_ID = 1365128170602685579;
  public ?this::TResult $success;

  public function __construct(?this::TResult $success = null)[] {
    $this->success = $success;
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'success'),
    );
  }

  public function getName()[]: string {
    return 'Raiser_get200_result';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.Raiser_get200_result",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 0,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                )
              ),
              "name" => "success",
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

  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

}

class Raiser_get500_args implements \IThriftSyncStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
  ];
  const dict<string, int> FIELDMAP = dict[
  ];

  const type TConstructorShape = shape(
  );

  const int STRUCTURAL_ID = 957977401221134810;

  public function __construct()[] {
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
    );
  }

  public function getName()[]: string {
    return 'Raiser_get500_args';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.get500_args",
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

  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

}

class Raiser_get500_result extends \ThriftSyncStructWithResult {
  use \ThriftSerializationTrait;

  const type TResult = string;

  const dict<int, this::TFieldSpec> SPEC = dict[
    0 => shape(
      'var' => 'success',
      'type' => \TType::STRING,
    ),
    1 => shape(
      'var' => 'f',
      'type' => \TType::STRUCT,
      'class' => Fiery::class,
    ),
    2 => shape(
      'var' => 'b',
      'type' => \TType::STRUCT,
      'class' => Banal::class,
    ),
    3 => shape(
      'var' => 's',
      'type' => \TType::STRUCT,
      'class' => Serious::class,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'success' => 0,
    'f' => 1,
    'b' => 2,
    's' => 3,
  ];

  const type TConstructorShape = shape(
    ?'success' => ?this::TResult,
    ?'f' => ?Fiery,
    ?'b' => ?Banal,
    ?'s' => ?Serious,
  );

  const int STRUCTURAL_ID = 6147773747560615508;
  public ?this::TResult $success;
  public ?Fiery $f;
  public ?Banal $b;
  public ?Serious $s;

  public function __construct(?this::TResult $success = null, ?Fiery $f = null, ?Banal $b = null, ?Serious $s = null)[] {
    $this->success = $success;
    $this->f = $f;
    $this->b = $b;
    $this->s = $s;
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'success'),
      Shapes::idx($shape, 'f'),
      Shapes::idx($shape, 'b'),
      Shapes::idx($shape, 's'),
    );
  }

  public function getName()[]: string {
    return 'Raiser_get500_result';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.Raiser_get500_result",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 0,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                )
              ),
              "name" => "success",
            )
          ),
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_struct" => tmeta_ThriftStructType::fromShape(
                    shape(
                      "name" => "module.Fiery",
                    )
                  ),
                )
              ),
              "name" => "f",
            )
          ),
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 2,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_typedef" => tmeta_ThriftTypedefType::fromShape(
                    shape(
                      "name" => "module.Banal",
                      "underlyingType" => tmeta_ThriftType::fromShape(
                        shape(
                          "t_struct" => tmeta_ThriftStructType::fromShape(
                            shape(
                              "name" => "module.Banal",
                            )
                          ),
                        )
                      ),
                    )
                  ),
                )
              ),
              "name" => "b",
            )
          ),
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 3,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_struct" => tmeta_ThriftStructType::fromShape(
                    shape(
                      "name" => "module.Serious",
                    )
                  ),
                )
              ),
              "name" => "s",
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

  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

  public function checkForException(): ?\TException {
    if ($this->f !== null) {
      return $this->f;
    }
    if ($this->b !== null) {
      return $this->b;
    }
    if ($this->s !== null) {
      return $this->s;
    }
    return null;
  }
}

class RaiserStaticMetadata implements \IThriftServiceStaticMetadata {
  public static function getServiceMetadata()[]: \tmeta_ThriftService {
    return tmeta_ThriftService::fromShape(
      shape(
        "name" => "module.Raiser",
        "functions" => vec[
          tmeta_ThriftFunction::fromShape(
            shape(
              "name" => "doBland",
              "return_type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_VOID_TYPE,
                )
              ),
            )
          ),
          tmeta_ThriftFunction::fromShape(
            shape(
              "name" => "doRaise",
              "return_type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_VOID_TYPE,
                )
              ),
              "exceptions" => vec[
                tmeta_ThriftField::fromShape(
                  shape(
                    "id" => 1,
                    "type" => tmeta_ThriftType::fromShape(
                      shape(
                        "t_typedef" => tmeta_ThriftTypedefType::fromShape(
                          shape(
                            "name" => "module.Banal",
                            "underlyingType" => tmeta_ThriftType::fromShape(
                              shape(
                                "t_struct" => tmeta_ThriftStructType::fromShape(
                                  shape(
                                    "name" => "module.Banal",
                                  )
                                ),
                              )
                            ),
                          )
                        ),
                      )
                    ),
                    "name" => "b",
                  )
                ),
                tmeta_ThriftField::fromShape(
                  shape(
                    "id" => 2,
                    "type" => tmeta_ThriftType::fromShape(
                      shape(
                        "t_struct" => tmeta_ThriftStructType::fromShape(
                          shape(
                            "name" => "module.Fiery",
                          )
                        ),
                      )
                    ),
                    "name" => "f",
                  )
                ),
                tmeta_ThriftField::fromShape(
                  shape(
                    "id" => 3,
                    "type" => tmeta_ThriftType::fromShape(
                      shape(
                        "t_struct" => tmeta_ThriftStructType::fromShape(
                          shape(
                            "name" => "module.Serious",
                          )
                        ),
                      )
                    ),
                    "name" => "s",
                  )
                ),
              ],
            )
          ),
          tmeta_ThriftFunction::fromShape(
            shape(
              "name" => "get200",
              "return_type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                )
              ),
            )
          ),
          tmeta_ThriftFunction::fromShape(
            shape(
              "name" => "get500",
              "return_type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                )
              ),
              "exceptions" => vec[
                tmeta_ThriftField::fromShape(
                  shape(
                    "id" => 1,
                    "type" => tmeta_ThriftType::fromShape(
                      shape(
                        "t_struct" => tmeta_ThriftStructType::fromShape(
                          shape(
                            "name" => "module.Fiery",
                          )
                        ),
                      )
                    ),
                    "name" => "f",
                  )
                ),
                tmeta_ThriftField::fromShape(
                  shape(
                    "id" => 2,
                    "type" => tmeta_ThriftType::fromShape(
                      shape(
                        "t_typedef" => tmeta_ThriftTypedefType::fromShape(
                          shape(
                            "name" => "module.Banal",
                            "underlyingType" => tmeta_ThriftType::fromShape(
                              shape(
                                "t_struct" => tmeta_ThriftStructType::fromShape(
                                  shape(
                                    "name" => "module.Banal",
                                  )
                                ),
                              )
                            ),
                          )
                        ),
                      )
                    ),
                    "name" => "b",
                  )
                ),
                tmeta_ThriftField::fromShape(
                  shape(
                    "id" => 3,
                    "type" => tmeta_ThriftType::fromShape(
                      shape(
                        "t_struct" => tmeta_ThriftStructType::fromShape(
                          shape(
                            "name" => "module.Serious",
                          )
                        ),
                      )
                    ),
                    "name" => "s",
                  )
                ),
              ],
            )
          ),
        ],
      )
    );
  }

  public static function getServiceMetadataResponse()[]: \tmeta_ThriftServiceMetadataResponse {
    return \tmeta_ThriftServiceMetadataResponse::fromShape(
      shape(
        'context' => \tmeta_ThriftServiceContext::fromShape(
          shape(
            'service_info' => self::getServiceMetadata(),
            'module' => \tmeta_ThriftModuleContext::fromShape(
              shape(
                'name' => 'module',
              )
            ),
          )
        ),
        'metadata' => \tmeta_ThriftMetadata::fromShape(
          shape(
            'enums' => dict[
            ],
            'structs' => dict[
            ],
            'exceptions' => dict[
              'module.Banal' => Banal::getExceptionMetadata(),
              'module.Fiery' => Fiery::getExceptionMetadata(),
              'module.Serious' => Serious::getExceptionMetadata(),
              'module.Banal' => Banal::getExceptionMetadata(),
            ],
            'services' => dict[
            ],
          )
        ),
      )
    );
  }

  public static function getAllStructuredAnnotations()[write_props]: \TServiceAnnotations {
    return shape(
      'service' => dict[],
      'functions' => dict[
      ],
    );
  }
}

