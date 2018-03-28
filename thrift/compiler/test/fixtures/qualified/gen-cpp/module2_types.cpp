/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
#include "thrift/compiler/test/fixtures/qualified/gen-cpp/module2_types.h"
#include "thrift/compiler/test/fixtures/qualified/gen-cpp/module2_data.h"

#include "thrift/compiler/test/fixtures/qualified/gen-cpp/module2_reflection.h"

#include <algorithm>
#include <string.h>

#include <folly/Indestructible.h>

namespace MODULE2 {

const uint64_t Struct::_reflection_id;
void Struct::_reflection_register(::apache::thrift::reflection::Schema& schema) {
   ::MODULE2::module2_reflection_::reflectionInitializer_6048788120110564236(schema);
}

bool Struct::operator == (const Struct & rhs) const {
  if (!(this->first == rhs.first))
    return false;
  if (!(this->second == rhs.second))
    return false;
  return true;
}

void Struct::translateFieldName(
    FOLLY_MAYBE_UNUSED folly::StringPiece _fname,
    FOLLY_MAYBE_UNUSED int16_t& fid,
    FOLLY_MAYBE_UNUSED apache::thrift::protocol::TType& _ftype) {
  if (false) {}
  else if (_fname == "first") {
    fid = 1;
    _ftype = apache::thrift::protocol::T_STRUCT;
  }
  else if (_fname == "second") {
    fid = 2;
    _ftype = apache::thrift::protocol::T_STRUCT;
  }
}

uint32_t Struct::read(apache::thrift::protocol::TProtocol* iprot) {

  uint32_t xfer = 0;
  std::string _fname;
  apache::thrift::protocol::TType _ftype;
  int16_t fid;

  ::apache::thrift::reflection::Schema * schema = iprot->getSchema();
  if (schema != nullptr) {
     ::MODULE2::module2_reflection_::reflectionInitializer_6048788120110564236(*schema);
    iprot->setNextStructType(Struct::_reflection_id);
  }
  xfer += iprot->readStructBegin(_fname);

  using apache::thrift::protocol::TProtocolException;



  while (true)
  {
    xfer += iprot->readFieldBegin(_fname, _ftype, fid);
    if (_ftype == apache::thrift::protocol::T_STOP) {
      break;
    }
    switch (fid)
    {
      case 1:
        if (_ftype == apache::thrift::protocol::T_STRUCT) {
          xfer += this->first.read(iprot);
          this->__isset.first = true;
        } else {
          xfer += iprot->skip(_ftype);
        }
        break;
      case 2:
        if (_ftype == apache::thrift::protocol::T_STRUCT) {
          xfer += this->second.read(iprot);
          this->__isset.second = true;
        } else {
          xfer += iprot->skip(_ftype);
        }
        break;
      default:
        xfer += iprot->skip(_ftype);
        break;
    }
    xfer += iprot->readFieldEnd();
  }

  xfer += iprot->readStructEnd();

  return xfer;
}

void Struct::__clear() {
  first.__clear();
  second.__clear();
  __isset.__clear();
}
uint32_t Struct::write(apache::thrift::protocol::TProtocol* oprot) const {
  uint32_t xfer = 0;
  xfer += oprot->writeStructBegin("Struct");
  xfer += oprot->writeFieldBegin("first", apache::thrift::protocol::T_STRUCT, 1);
  xfer += this->first.write(oprot);
  xfer += oprot->writeFieldEnd();
  xfer += oprot->writeFieldBegin("second", apache::thrift::protocol::T_STRUCT, 2);
  xfer += this->second.write(oprot);
  xfer += oprot->writeFieldEnd();
  xfer += oprot->writeFieldStop();
  xfer += oprot->writeStructEnd();
  return xfer;
}

void swap(Struct &a, Struct &b) {
  using ::std::swap;
  (void)a;
  (void)b;
  swap(a.first, b.first);
  swap(a.second, b.second);
  swap(a.__isset, b.__isset);
}

void merge(const Struct& from, Struct& to) {
  using apache::thrift::merge;
  merge(from.first, to.first);
  to.__isset.first = to.__isset.first || from.__isset.first;
  merge(from.second, to.second);
  to.__isset.second = to.__isset.second || from.__isset.second;
}

void merge(Struct&& from, Struct& to) {
  using apache::thrift::merge;
  merge(std::move(from.first), to.first);
  to.__isset.first = to.__isset.first || from.__isset.first;
  merge(std::move(from.second), to.second);
  to.__isset.second = to.__isset.second || from.__isset.second;
}

const uint64_t BigStruct::_reflection_id;
void BigStruct::_reflection_register(::apache::thrift::reflection::Schema& schema) {
   ::MODULE2::module2_reflection_::reflectionInitializer_18288836959267843340(schema);
}

bool BigStruct::operator == (const BigStruct & rhs) const {
  if (!(this->s == rhs.s))
    return false;
  if (!(this->id == rhs.id))
    return false;
  return true;
}

void BigStruct::translateFieldName(
    FOLLY_MAYBE_UNUSED folly::StringPiece _fname,
    FOLLY_MAYBE_UNUSED int16_t& fid,
    FOLLY_MAYBE_UNUSED apache::thrift::protocol::TType& _ftype) {
  if (false) {}
  else if (_fname == "s") {
    fid = 1;
    _ftype = apache::thrift::protocol::T_STRUCT;
  }
  else if (_fname == "id") {
    fid = 2;
    _ftype = apache::thrift::protocol::T_I32;
  }
}

uint32_t BigStruct::read(apache::thrift::protocol::TProtocol* iprot) {

  uint32_t xfer = 0;
  std::string _fname;
  apache::thrift::protocol::TType _ftype;
  int16_t fid;

  ::apache::thrift::reflection::Schema * schema = iprot->getSchema();
  if (schema != nullptr) {
     ::MODULE2::module2_reflection_::reflectionInitializer_18288836959267843340(*schema);
    iprot->setNextStructType(BigStruct::_reflection_id);
  }
  xfer += iprot->readStructBegin(_fname);

  using apache::thrift::protocol::TProtocolException;



  while (true)
  {
    xfer += iprot->readFieldBegin(_fname, _ftype, fid);
    if (_ftype == apache::thrift::protocol::T_STOP) {
      break;
    }
    switch (fid)
    {
      case 1:
        if (_ftype == apache::thrift::protocol::T_STRUCT) {
          xfer += this->s.read(iprot);
          this->__isset.s = true;
        } else {
          xfer += iprot->skip(_ftype);
        }
        break;
      case 2:
        if (_ftype == apache::thrift::protocol::T_I32) {
          xfer += iprot->readI32(this->id);
          this->__isset.id = true;
        } else {
          xfer += iprot->skip(_ftype);
        }
        break;
      default:
        xfer += iprot->skip(_ftype);
        break;
    }
    xfer += iprot->readFieldEnd();
  }

  xfer += iprot->readStructEnd();

  return xfer;
}

void BigStruct::__clear() {
  s.__clear();
  id = 0;
  __isset.__clear();
}
uint32_t BigStruct::write(apache::thrift::protocol::TProtocol* oprot) const {
  uint32_t xfer = 0;
  xfer += oprot->writeStructBegin("BigStruct");
  xfer += oprot->writeFieldBegin("s", apache::thrift::protocol::T_STRUCT, 1);
  xfer += this->s.write(oprot);
  xfer += oprot->writeFieldEnd();
  xfer += oprot->writeFieldBegin("id", apache::thrift::protocol::T_I32, 2);
  xfer += oprot->writeI32(this->id);
  xfer += oprot->writeFieldEnd();
  xfer += oprot->writeFieldStop();
  xfer += oprot->writeStructEnd();
  return xfer;
}

void swap(BigStruct &a, BigStruct &b) {
  using ::std::swap;
  (void)a;
  (void)b;
  swap(a.s, b.s);
  swap(a.id, b.id);
  swap(a.__isset, b.__isset);
}

void merge(const BigStruct& from, BigStruct& to) {
  using apache::thrift::merge;
  merge(from.s, to.s);
  to.__isset.s = to.__isset.s || from.__isset.s;
  merge(from.id, to.id);
  to.__isset.id = to.__isset.id || from.__isset.id;
}

void merge(BigStruct&& from, BigStruct& to) {
  using apache::thrift::merge;
  merge(std::move(from.s), to.s);
  to.__isset.s = to.__isset.s || from.__isset.s;
  merge(std::move(from.id), to.id);
  to.__isset.id = to.__isset.id || from.__isset.id;
}

} // namespace
