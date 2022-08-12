<?hh
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

/**
 * Original thrift service:-
 * MyService
 */
interface MyServiceAsyncIf extends \IThriftAsyncIf {
  /**
   * Original thrift definition:-
   * bool
   *   second(1: i64 count);
   */
  public function second(int $count): Awaitable<bool>;
}

/**
 * Original thrift service:-
 * MyService
 */
interface MyServiceIf extends \IThriftSyncIf {
  /**
   * Original thrift definition:-
   * bool
   *   second(1: i64 count);
   */
  public function second(int $count): bool;
}

/**
 * Original thrift service:-
 * MyService
 */
interface MyServiceAsyncClientIf extends MyServiceAsyncIf {
}

/**
 * Original thrift service:-
 * MyService
 */
interface MyServiceClientIf extends \IThriftSyncIf {
  /**
   * Original thrift definition:-
   * bool
   *   second(1: i64 count);
   */
  public function second(int $count): Awaitable<bool>;
}

/**
 * Original thrift service:-
 * MyService
 */
trait MyServiceClientBase {
  require extends \ThriftClientBase;

}

class MyServiceAsyncClient extends \ThriftClientBase implements MyServiceAsyncClientIf {
  use MyServiceClientBase;

  /**
   * Original thrift definition:-
   * bool
   *   second(1: i64 count);
   */
  public async function second(int $count): Awaitable<bool> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = MyService_second_args::fromShape(shape(
      'count' => $count,
    ));
    await $this->asyncHandler_->genBefore("MyService", "second", $args);
    $currentseqid = $this->sendImplHelper($args, "second", false);
    return await $this->genAwaitResponse(MyService_second_result::class, "second", false, $currentseqid, $rpc_options);
  }

}

class MyServiceClient extends \ThriftClientBase implements MyServiceClientIf {
  use MyServiceClientBase;

  /**
   * Original thrift definition:-
   * bool
   *   second(1: i64 count);
   */
  public async function second(int $count): Awaitable<bool> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = MyService_second_args::fromShape(shape(
      'count' => $count,
    ));
    await $this->asyncHandler_->genBefore("MyService", "second", $args);
    $currentseqid = $this->sendImplHelper($args, "second", false);
    return await $this->genAwaitResponse(MyService_second_result::class, "second", false, $currentseqid, $rpc_options);
  }

  /* send and recv functions */
  public function send_second(int $count): int {
    $args = MyService_second_args::fromShape(shape(
      'count' => $count,
    ));
    return $this->sendImplHelper($args, "second", false);
  }
  public function recv_second(?int $expectedsequenceid = null): bool {
    return $this->recvImplHelper(MyService_second_result::class, "second", false, $expectedsequenceid);
  }
}

abstract class MyServiceAsyncProcessorBase extends \ThriftAsyncProcessor {
  abstract const type TThriftIf as MyServiceAsyncIf;
  const classname<\IThriftServiceStaticMetadata> SERVICE_METADATA_CLASS = MyServiceStaticMetadata::class;

  protected async function process_second(int $seqid, \TProtocol $input, \TProtocol $output): Awaitable<void> {
    $handler_ctx = $this->eventHandler_->getHandlerContext('second');
    $reply_type = \TMessageType::REPLY;

    $this->eventHandler_->preRead($handler_ctx, 'second', dict[]);

    if ($input is \TBinaryProtocolAccelerated) {
      $args = \thrift_protocol_read_binary_struct($input, 'MyService_second_args');
    } else if ($input is \TCompactProtocolAccelerated) {
      $args = \thrift_protocol_read_compact_struct($input, 'MyService_second_args');
    } else {
      $args = MyService_second_args::withDefaultValues();
      $args->read($input);
    }
    $input->readMessageEnd();
    $this->eventHandler_->postRead($handler_ctx, 'second', $args);
    $result = MyService_second_result::withDefaultValues();
    try {
      $this->eventHandler_->preExec($handler_ctx, 'MyService', 'second', $args);
      $result->success = await $this->handler->second($args->count);
      $this->eventHandler_->postExec($handler_ctx, 'second', $result);
    } catch (\Exception $ex) {
      $reply_type = \TMessageType::EXCEPTION;
      $this->eventHandler_->handlerError($handler_ctx, 'second', $ex);
      $result = new \TApplicationException($ex->getMessage()."\n".$ex->getTraceAsString());
    }
    $this->eventHandler_->preWrite($handler_ctx, 'second', $result);
    if ($output is \TBinaryProtocolAccelerated)
    {
      \thrift_protocol_write_binary($output, 'second', $reply_type, $result, $seqid, $output->isStrictWrite());
    }
    else if ($output is \TCompactProtocolAccelerated)
    {
      \thrift_protocol_write_compact($output, 'second', $reply_type, $result, $seqid);
    }
    else
    {
      $output->writeMessageBegin("second", $reply_type, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
    $this->eventHandler_->postWrite($handler_ctx, 'second', $result);
  }
  protected async function process_getThriftServiceMetadata(int $seqid, \TProtocol $input, \TProtocol $output): Awaitable<void> {
    $reply_type = \TMessageType::REPLY;

    if ($input is \TBinaryProtocolAccelerated) {
      $args = \thrift_protocol_read_binary_struct($input, '\tmeta_ThriftMetadataService_getThriftServiceMetadata_args');
    } else if ($input is \TCompactProtocolAccelerated) {
      $args = \thrift_protocol_read_compact_struct($input, '\tmeta_ThriftMetadataService_getThriftServiceMetadata_args');
    } else {
      $args = \tmeta_ThriftMetadataService_getThriftServiceMetadata_args::withDefaultValues();
      $args->read($input);
    }
    $input->readMessageEnd();
    $result = \tmeta_ThriftMetadataService_getThriftServiceMetadata_result::withDefaultValues();
    try {
      $result->success = MyServiceStaticMetadata::getServiceMetadataResponse();
    } catch (\Exception $ex) {
      $reply_type = \TMessageType::EXCEPTION;
      $result = new \TApplicationException($ex->getMessage()."\n".$ex->getTraceAsString());
    }
    if ($output is \TBinaryProtocolAccelerated)
    {
      \thrift_protocol_write_binary($output, 'getThriftServiceMetadata', $reply_type, $result, $seqid, $output->isStrictWrite());
    }
    else if ($output is \TCompactProtocolAccelerated)
    {
      \thrift_protocol_write_compact($output, 'getThriftServiceMetadata', $reply_type, $result, $seqid);
    }
    else
    {
      $output->writeMessageBegin("getThriftServiceMetadata", $reply_type, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
}
class MyServiceAsyncProcessor extends MyServiceAsyncProcessorBase {
  const type TThriftIf = MyServiceAsyncIf;
}

abstract class MyServiceSyncProcessorBase extends \ThriftSyncProcessor {
  abstract const type TThriftIf as MyServiceIf;
  const classname<\IThriftServiceStaticMetadata> SERVICE_METADATA_CLASS = MyServiceStaticMetadata::class;

  protected function process_second(int $seqid, \TProtocol $input, \TProtocol $output): void {
    $handler_ctx = $this->eventHandler_->getHandlerContext('second');
    $reply_type = \TMessageType::REPLY;

    $this->eventHandler_->preRead($handler_ctx, 'second', dict[]);

    if ($input is \TBinaryProtocolAccelerated) {
      $args = \thrift_protocol_read_binary_struct($input, 'MyService_second_args');
    } else if ($input is \TCompactProtocolAccelerated) {
      $args = \thrift_protocol_read_compact_struct($input, 'MyService_second_args');
    } else {
      $args = MyService_second_args::withDefaultValues();
      $args->read($input);
    }
    $input->readMessageEnd();
    $this->eventHandler_->postRead($handler_ctx, 'second', $args);
    $result = MyService_second_result::withDefaultValues();
    try {
      $this->eventHandler_->preExec($handler_ctx, 'MyService', 'second', $args);
      $result->success = $this->handler->second($args->count);
      $this->eventHandler_->postExec($handler_ctx, 'second', $result);
    } catch (\Exception $ex) {
      $reply_type = \TMessageType::EXCEPTION;
      $this->eventHandler_->handlerError($handler_ctx, 'second', $ex);
      $result = new \TApplicationException($ex->getMessage()."\n".$ex->getTraceAsString());
    }
    $this->eventHandler_->preWrite($handler_ctx, 'second', $result);
    if ($output is \TBinaryProtocolAccelerated)
    {
      \thrift_protocol_write_binary($output, 'second', $reply_type, $result, $seqid, $output->isStrictWrite());
    }
    else if ($output is \TCompactProtocolAccelerated)
    {
      \thrift_protocol_write_compact($output, 'second', $reply_type, $result, $seqid);
    }
    else
    {
      $output->writeMessageBegin("second", $reply_type, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
    $this->eventHandler_->postWrite($handler_ctx, 'second', $result);
  }
  protected function process_getThriftServiceMetadata(int $seqid, \TProtocol $input, \TProtocol $output): void {
    $reply_type = \TMessageType::REPLY;

    if ($input is \TBinaryProtocolAccelerated) {
      $args = \thrift_protocol_read_binary_struct($input, '\tmeta_ThriftMetadataService_getThriftServiceMetadata_args');
    } else if ($input is \TCompactProtocolAccelerated) {
      $args = \thrift_protocol_read_compact_struct($input, '\tmeta_ThriftMetadataService_getThriftServiceMetadata_args');
    } else {
      $args = \tmeta_ThriftMetadataService_getThriftServiceMetadata_args::withDefaultValues();
      $args->read($input);
    }
    $input->readMessageEnd();
    $result = \tmeta_ThriftMetadataService_getThriftServiceMetadata_result::withDefaultValues();
    try {
      $result->success = MyServiceStaticMetadata::getServiceMetadataResponse();
    } catch (\Exception $ex) {
      $reply_type = \TMessageType::EXCEPTION;
      $result = new \TApplicationException($ex->getMessage()."\n".$ex->getTraceAsString());
    }
    if ($output is \TBinaryProtocolAccelerated)
    {
      \thrift_protocol_write_binary($output, 'getThriftServiceMetadata', $reply_type, $result, $seqid, $output->isStrictWrite());
    }
    else if ($output is \TCompactProtocolAccelerated)
    {
      \thrift_protocol_write_compact($output, 'getThriftServiceMetadata', $reply_type, $result, $seqid);
    }
    else
    {
      $output->writeMessageBegin("getThriftServiceMetadata", $reply_type, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
}
class MyServiceSyncProcessor extends MyServiceSyncProcessorBase {
  const type TThriftIf = MyServiceIf;
}
// For backwards compatibility
class MyServiceProcessor extends MyServiceSyncProcessor {}

// HELPER FUNCTIONS AND STRUCTURES

class MyService_second_args implements \IThriftSyncStruct, \IThriftShapishSyncStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'count',
      'type' => \TType::I64,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'count' => 1,
  ];

  const type TConstructorShape = shape(
    ?'count' => ?int,
  );

  const type TShape = shape(
    'count' => int,
  );
  const int STRUCTURAL_ID = 6887469671700782815;
  public int $count;

  public function __construct(?int $count = null)[] {
    $this->count = $count ?? 0;
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'count'),
    );
  }

  public static function fromMap_DEPRECATED(@KeyedContainer<string, mixed> $map)[]: this {
    return new static(
      HH\FIXME\UNSAFE_CAST<mixed, int>(idx($map, 'count'), 'map value is mixed'),
    );
  }

  public function getName()[]: string {
    return 'MyService_second_args';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "annotations.second_args",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I64_TYPE,
                )
              ),
              "name" => "count",
            )
          ),
        ],
        "is_union" => false,
      )
    );
  }

  public static function getAllStructuredAnnotations()[write_props]: \TStructAnnotations {
    $structured_annotation_recursive0 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive0->name = "abc_service_method";

    $structured_annotation_recursive1 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive1->name = "cba_service_method";

    $structured_annotation_recursive0->get_recurse()->setValue_DO_NOT_USE_THRIFT_INTERNAL($structured_annotation_recursive1);

    $structured_annotation_recursive0->default = structured_annotation_with_default::fromShape(
      shape(
        "count" => 3,
      )
    );

    $structured_annotation_recursive2 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive2->name = "key_service_method1";

    $structured_annotation_recursive3 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive3->name = "def_service_method";

    $structured_annotation_recursive2->get_recurse()->setValue_DO_NOT_USE_THRIFT_INTERNAL($structured_annotation_recursive3);

    $structured_annotation_recursive4 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive4->name = "key_service_method2";

    $structured_annotation_recursive5 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive5->name = "fed_service_method";

    $structured_annotation_recursive4->get_recurse()->setValue_DO_NOT_USE_THRIFT_INTERNAL($structured_annotation_recursive5);

    $structured_annotation_recursive0->recurse_map = dict[
      "key_service_method1" => $structured_annotation_recursive2,
      "key_servic_methode2" => $structured_annotation_recursive4,
    ];

    return shape(
      'struct' => dict[],
      'fields' => dict[
        'count' => shape(
          'field' => dict[
            'structured_annotation_recursive' => $structured_annotation_recursive0,
          ],
          'type' => dict[],
        ),
      ],
    );
  }

  public static function __stringifyMapKeys<T>(dict<arraykey, T> $m)[]: dict<string, T> {
    return Dict\map_keys($m, $key ==> (string)$key);
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
      $shape['count'],
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
      'count' => $this->count,
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

    if (idx($parsed, 'count') !== null) {
      $this->count = HH\FIXME\UNSAFE_CAST<mixed, int>($parsed['count']);
    }
  }

}

class MyService_second_result extends \ThriftSyncStructWithResult {
  use \ThriftSerializationTrait;

  const type TResult = bool;

  const dict<int, this::TFieldSpec> SPEC = dict[
    0 => shape(
      'var' => 'success',
      'type' => \TType::BOOL,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'success' => 0,
  ];

  const type TConstructorShape = shape(
    ?'success' => ?this::TResult,
  );

  const int STRUCTURAL_ID = 8594383818423018844;
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

  public static function fromMap_DEPRECATED(@KeyedContainer<string, mixed> $map)[]: this {
    return new static(
      HH\FIXME\UNSAFE_CAST<mixed, bool>(idx($map, 'success'), 'map value is mixed'),
    );
  }

  public function getName()[]: string {
    return 'MyService_second_result';
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "annotations.MyService_second_result",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 0,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_BOOL_TYPE,
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

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'success') !== null) {
      $this->success = HH\FIXME\UNSAFE_CAST<mixed, bool>($parsed['success']);
    }
  }

}

class MyServiceStaticMetadata implements \IThriftServiceStaticMetadata {
  public static function getServiceMetadata()[]: \tmeta_ThriftService {
    return tmeta_ThriftService::fromShape(
      shape(
        "name" => "annotations.MyService",
        "functions" => vec[
          tmeta_ThriftFunction::fromShape(
            shape(
              "name" => "second",
              "return_type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_BOOL_TYPE,
                )
              ),
              "arguments" => vec[
                tmeta_ThriftField::fromShape(
                  shape(
                    "id" => 1,
                    "type" => tmeta_ThriftType::fromShape(
                      shape(
                        "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I64_TYPE,
                      )
                    ),
                    "name" => "count",
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
                'name' => 'annotations',
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
            ],
            'services' => dict[
            ],
          )
        ),
      )
    );
  }

  public static function getAllStructuredAnnotations()[write_props]: \TServiceAnnotations {
    $structured_annotation_recursive0 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive0->name = "abc_service";

    $structured_annotation_recursive1 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive1->name = "cba_service";

    $structured_annotation_recursive0->get_recurse()->setValue_DO_NOT_USE_THRIFT_INTERNAL($structured_annotation_recursive1);

    $structured_annotation_recursive0->default = structured_annotation_with_default::fromShape(
      shape(
        "count" => 3,
      )
    );

    $structured_annotation_recursive2 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive2->name = "key_service1";

    $structured_annotation_recursive3 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive3->name = "def_service";

    $structured_annotation_recursive2->get_recurse()->setValue_DO_NOT_USE_THRIFT_INTERNAL($structured_annotation_recursive3);

    $structured_annotation_recursive4 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive4->name = "key_service2";

    $structured_annotation_recursive5 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive5->name = "fed_service";

    $structured_annotation_recursive4->get_recurse()->setValue_DO_NOT_USE_THRIFT_INTERNAL($structured_annotation_recursive5);

    $structured_annotation_recursive0->recurse_map = dict[
      "key_service1" => $structured_annotation_recursive2,
      "key_service2" => $structured_annotation_recursive4,
    ];

    $structured_annotation_recursive6 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive6->name = "abc_service_method";

    $structured_annotation_recursive7 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive7->name = "cba_service_method";

    $structured_annotation_recursive6->get_recurse()->setValue_DO_NOT_USE_THRIFT_INTERNAL($structured_annotation_recursive7);

    $structured_annotation_recursive6->default = structured_annotation_with_default::fromShape(
      shape(
        "count" => 3,
      )
    );

    $structured_annotation_recursive8 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive8->name = "key_service_method1";

    $structured_annotation_recursive9 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive9->name = "def_service_method";

    $structured_annotation_recursive8->get_recurse()->setValue_DO_NOT_USE_THRIFT_INTERNAL($structured_annotation_recursive9);

    $structured_annotation_recursive10 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive10->name = "key_service_method2";

    $structured_annotation_recursive11 = structured_annotation_recursive::withDefaultValues();
    $structured_annotation_recursive11->name = "fed_service_method";

    $structured_annotation_recursive10->get_recurse()->setValue_DO_NOT_USE_THRIFT_INTERNAL($structured_annotation_recursive11);

    $structured_annotation_recursive6->recurse_map = dict[
      "key_service_method1" => $structured_annotation_recursive8,
      "key_servic_methode2" => $structured_annotation_recursive10,
    ];

    return shape(
      'service' => dict[
        'structured_annotation_recursive' => $structured_annotation_recursive0,
      ],
      'functions' => dict[
        'second' => dict[
          'structured_annotation_recursive' => $structured_annotation_recursive6,
        ],
      ],
    );
  }
}

