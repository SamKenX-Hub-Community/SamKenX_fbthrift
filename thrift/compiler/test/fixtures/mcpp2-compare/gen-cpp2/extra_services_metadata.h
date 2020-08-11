/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
#pragma once

#include <thrift/lib/cpp2/gen/module_metadata_h.h>
#include "thrift/compiler/test/fixtures/mcpp2-compare/gen-cpp2/extra_services_types.h"
#include "thrift/compiler/test/fixtures/mcpp2-compare/gen-cpp2/module_metadata.h"

namespace extra {
namespace svc {
class ExtraServiceSvIf;
}} // namespace extra::svc

namespace apache {
namespace thrift {
namespace detail {
namespace md {

template <>
class StructMetadata<::extra::svc::containerStruct2> {
 public:
  static void gen(ThriftMetadata& metadata);
};
template <>
class ServiceMetadata<::extra::svc::ExtraServiceSvIf> {
 public:
  static void gen(ThriftMetadata& metadata, ThriftServiceContext& context);
 private:
  static void gen_simple_function(ThriftMetadata& metadata, ThriftService& context);
  static void gen_throws_function(ThriftMetadata& metadata, ThriftService& context);
  static void gen_throws_function2(ThriftMetadata& metadata, ThriftService& context);
  static void gen_throws_function3(ThriftMetadata& metadata, ThriftService& context);
  static void gen_oneway_void_ret(ThriftMetadata& metadata, ThriftService& context);
  static void gen_oneway_void_ret_i32_i32_i32_i32_i32_param(ThriftMetadata& metadata, ThriftService& context);
  static void gen_oneway_void_ret_map_setlist_param(ThriftMetadata& metadata, ThriftService& context);
  static void gen_oneway_void_ret_struct_param(ThriftMetadata& metadata, ThriftService& context);
  static void gen_oneway_void_ret_listunion_param(ThriftMetadata& metadata, ThriftService& context);
};
} // namespace md
} // namespace detail
} // namespace thrift
} // namespace apache
