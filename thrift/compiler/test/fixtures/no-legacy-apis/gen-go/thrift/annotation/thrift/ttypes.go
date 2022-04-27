// Autogenerated by Thrift Compiler (facebook)
// DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
// @generated

package thrift

import (
	"bytes"
	"context"
	"sync"
	"fmt"
	thrift "github.com/facebook/fbthrift/thrift/lib/go/thrift"
	scope0 "thrift/annotation/scope"

)

// (needed to ensure safety because of naive import list construction.)
var _ = thrift.ZERO
var _ = fmt.Printf
var _ = sync.Mutex{}
var _ = bytes.Equal
var _ = context.Background

var _ = scope0.GoUnusedProtection__
var GoUnusedProtection__ int;

// Attributes:
//  - FieldName
type RequiresBackwardCompatibility struct {
  FieldName bool `thrift:"field_name,1" db:"field_name" json:"field_name"`
}

func NewRequiresBackwardCompatibility() *RequiresBackwardCompatibility {
  return &RequiresBackwardCompatibility{}
}


func (p *RequiresBackwardCompatibility) GetFieldName() bool {
  return p.FieldName
}
type RequiresBackwardCompatibilityBuilder struct {
  obj *RequiresBackwardCompatibility
}

func NewRequiresBackwardCompatibilityBuilder() *RequiresBackwardCompatibilityBuilder{
  return &RequiresBackwardCompatibilityBuilder{
    obj: NewRequiresBackwardCompatibility(),
  }
}

func (p RequiresBackwardCompatibilityBuilder) Emit() *RequiresBackwardCompatibility{
  return &RequiresBackwardCompatibility{
    FieldName: p.obj.FieldName,
  }
}

func (r *RequiresBackwardCompatibilityBuilder) FieldName(fieldName bool) *RequiresBackwardCompatibilityBuilder {
  r.obj.FieldName = fieldName
  return r
}

func (r *RequiresBackwardCompatibility) SetFieldName(fieldName bool) *RequiresBackwardCompatibility {
  r.FieldName = fieldName
  return r
}

func (p *RequiresBackwardCompatibility) Read(iprot thrift.Protocol) error {
  if _, err := iprot.ReadStructBegin(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read error: ", p), err)
  }


  for {
    _, fieldTypeId, fieldId, err := iprot.ReadFieldBegin()
    if err != nil {
      return thrift.PrependError(fmt.Sprintf("%T field %d read error: ", p, fieldId), err)
    }
    if fieldTypeId == thrift.STOP { break; }
    switch fieldId {
    case 1:
      if err := p.ReadField1(iprot); err != nil {
        return err
      }
    default:
      if err := iprot.Skip(fieldTypeId); err != nil {
        return err
      }
    }
    if err := iprot.ReadFieldEnd(); err != nil {
      return err
    }
  }
  if err := iprot.ReadStructEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read struct end error: ", p), err)
  }
  return nil
}

func (p *RequiresBackwardCompatibility)  ReadField1(iprot thrift.Protocol) error {
  if v, err := iprot.ReadBool(); err != nil {
    return thrift.PrependError("error reading field 1: ", err)
  } else {
    p.FieldName = v
  }
  return nil
}

func (p *RequiresBackwardCompatibility) Write(oprot thrift.Protocol) error {
  if err := oprot.WriteStructBegin("RequiresBackwardCompatibility"); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write struct begin error: ", p), err) }
  if err := p.writeField1(oprot); err != nil { return err }
  if err := oprot.WriteFieldStop(); err != nil {
    return thrift.PrependError("write field stop error: ", err) }
  if err := oprot.WriteStructEnd(); err != nil {
    return thrift.PrependError("write struct stop error: ", err) }
  return nil
}

func (p *RequiresBackwardCompatibility) writeField1(oprot thrift.Protocol) (err error) {
  if err := oprot.WriteFieldBegin("field_name", thrift.BOOL, 1); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write field begin error 1:field_name: ", p), err) }
  if err := oprot.WriteBool(bool(p.FieldName)); err != nil {
  return thrift.PrependError(fmt.Sprintf("%T.field_name (1) field write error: ", p), err) }
  if err := oprot.WriteFieldEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write field end error 1:field_name: ", p), err) }
  return err
}

func (p *RequiresBackwardCompatibility) String() string {
  if p == nil {
    return "<nil>"
  }

  fieldNameVal := fmt.Sprintf("%v", p.FieldName)
  return fmt.Sprintf("RequiresBackwardCompatibility({FieldName:%s})", fieldNameVal)
}

type Experimental struct {
}

func NewExperimental() *Experimental {
  return &Experimental{}
}

type ExperimentalBuilder struct {
  obj *Experimental
}

func NewExperimentalBuilder() *ExperimentalBuilder{
  return &ExperimentalBuilder{
    obj: NewExperimental(),
  }
}

func (p ExperimentalBuilder) Emit() *Experimental{
  return &Experimental{
  }
}

func (p *Experimental) Read(iprot thrift.Protocol) error {
  if _, err := iprot.ReadStructBegin(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read error: ", p), err)
  }


  for {
    _, fieldTypeId, fieldId, err := iprot.ReadFieldBegin()
    if err != nil {
      return thrift.PrependError(fmt.Sprintf("%T field %d read error: ", p, fieldId), err)
    }
    if fieldTypeId == thrift.STOP { break; }
    if err := iprot.Skip(fieldTypeId); err != nil {
      return err
    }
    if err := iprot.ReadFieldEnd(); err != nil {
      return err
    }
  }
  if err := iprot.ReadStructEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read struct end error: ", p), err)
  }
  return nil
}

func (p *Experimental) Write(oprot thrift.Protocol) error {
  if err := oprot.WriteStructBegin("Experimental"); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write struct begin error: ", p), err) }
  if err := oprot.WriteFieldStop(); err != nil {
    return thrift.PrependError("write field stop error: ", err) }
  if err := oprot.WriteStructEnd(); err != nil {
    return thrift.PrependError("write struct stop error: ", err) }
  return nil
}

func (p *Experimental) String() string {
  if p == nil {
    return "<nil>"
  }

  return fmt.Sprintf("Experimental({})")
}

type Deprecated struct {
}

func NewDeprecated() *Deprecated {
  return &Deprecated{}
}

type DeprecatedBuilder struct {
  obj *Deprecated
}

func NewDeprecatedBuilder() *DeprecatedBuilder{
  return &DeprecatedBuilder{
    obj: NewDeprecated(),
  }
}

func (p DeprecatedBuilder) Emit() *Deprecated{
  return &Deprecated{
  }
}

func (p *Deprecated) Read(iprot thrift.Protocol) error {
  if _, err := iprot.ReadStructBegin(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read error: ", p), err)
  }


  for {
    _, fieldTypeId, fieldId, err := iprot.ReadFieldBegin()
    if err != nil {
      return thrift.PrependError(fmt.Sprintf("%T field %d read error: ", p, fieldId), err)
    }
    if fieldTypeId == thrift.STOP { break; }
    if err := iprot.Skip(fieldTypeId); err != nil {
      return err
    }
    if err := iprot.ReadFieldEnd(); err != nil {
      return err
    }
  }
  if err := iprot.ReadStructEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read struct end error: ", p), err)
  }
  return nil
}

func (p *Deprecated) Write(oprot thrift.Protocol) error {
  if err := oprot.WriteStructBegin("Deprecated"); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write struct begin error: ", p), err) }
  if err := oprot.WriteFieldStop(); err != nil {
    return thrift.PrependError("write field stop error: ", err) }
  if err := oprot.WriteStructEnd(); err != nil {
    return thrift.PrependError("write struct stop error: ", err) }
  return nil
}

func (p *Deprecated) String() string {
  if p == nil {
    return "<nil>"
  }

  return fmt.Sprintf("Deprecated({})")
}

type TerseWrite struct {
}

func NewTerseWrite() *TerseWrite {
  return &TerseWrite{}
}

type TerseWriteBuilder struct {
  obj *TerseWrite
}

func NewTerseWriteBuilder() *TerseWriteBuilder{
  return &TerseWriteBuilder{
    obj: NewTerseWrite(),
  }
}

func (p TerseWriteBuilder) Emit() *TerseWrite{
  return &TerseWrite{
  }
}

func (p *TerseWrite) Read(iprot thrift.Protocol) error {
  if _, err := iprot.ReadStructBegin(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read error: ", p), err)
  }


  for {
    _, fieldTypeId, fieldId, err := iprot.ReadFieldBegin()
    if err != nil {
      return thrift.PrependError(fmt.Sprintf("%T field %d read error: ", p, fieldId), err)
    }
    if fieldTypeId == thrift.STOP { break; }
    if err := iprot.Skip(fieldTypeId); err != nil {
      return err
    }
    if err := iprot.ReadFieldEnd(); err != nil {
      return err
    }
  }
  if err := iprot.ReadStructEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read struct end error: ", p), err)
  }
  return nil
}

func (p *TerseWrite) Write(oprot thrift.Protocol) error {
  if err := oprot.WriteStructBegin("TerseWrite"); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write struct begin error: ", p), err) }
  if err := oprot.WriteFieldStop(); err != nil {
    return thrift.PrependError("write field stop error: ", err) }
  if err := oprot.WriteStructEnd(); err != nil {
    return thrift.PrependError("write struct stop error: ", err) }
  return nil
}

func (p *TerseWrite) String() string {
  if p == nil {
    return "<nil>"
  }

  return fmt.Sprintf("TerseWrite({})")
}

type Box struct {
}

func NewBox() *Box {
  return &Box{}
}

type BoxBuilder struct {
  obj *Box
}

func NewBoxBuilder() *BoxBuilder{
  return &BoxBuilder{
    obj: NewBox(),
  }
}

func (p BoxBuilder) Emit() *Box{
  return &Box{
  }
}

func (p *Box) Read(iprot thrift.Protocol) error {
  if _, err := iprot.ReadStructBegin(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read error: ", p), err)
  }


  for {
    _, fieldTypeId, fieldId, err := iprot.ReadFieldBegin()
    if err != nil {
      return thrift.PrependError(fmt.Sprintf("%T field %d read error: ", p, fieldId), err)
    }
    if fieldTypeId == thrift.STOP { break; }
    if err := iprot.Skip(fieldTypeId); err != nil {
      return err
    }
    if err := iprot.ReadFieldEnd(); err != nil {
      return err
    }
  }
  if err := iprot.ReadStructEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read struct end error: ", p), err)
  }
  return nil
}

func (p *Box) Write(oprot thrift.Protocol) error {
  if err := oprot.WriteStructBegin("Box"); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write struct begin error: ", p), err) }
  if err := oprot.WriteFieldStop(); err != nil {
    return thrift.PrependError("write field stop error: ", err) }
  if err := oprot.WriteStructEnd(); err != nil {
    return thrift.PrependError("write struct stop error: ", err) }
  return nil
}

func (p *Box) String() string {
  if p == nil {
    return "<nil>"
  }

  return fmt.Sprintf("Box({})")
}

type SerializeInFieldIdOrder struct {
}

func NewSerializeInFieldIdOrder() *SerializeInFieldIdOrder {
  return &SerializeInFieldIdOrder{}
}

type SerializeInFieldIdOrderBuilder struct {
  obj *SerializeInFieldIdOrder
}

func NewSerializeInFieldIdOrderBuilder() *SerializeInFieldIdOrderBuilder{
  return &SerializeInFieldIdOrderBuilder{
    obj: NewSerializeInFieldIdOrder(),
  }
}

func (p SerializeInFieldIdOrderBuilder) Emit() *SerializeInFieldIdOrder{
  return &SerializeInFieldIdOrder{
  }
}

func (p *SerializeInFieldIdOrder) Read(iprot thrift.Protocol) error {
  if _, err := iprot.ReadStructBegin(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read error: ", p), err)
  }


  for {
    _, fieldTypeId, fieldId, err := iprot.ReadFieldBegin()
    if err != nil {
      return thrift.PrependError(fmt.Sprintf("%T field %d read error: ", p, fieldId), err)
    }
    if fieldTypeId == thrift.STOP { break; }
    if err := iprot.Skip(fieldTypeId); err != nil {
      return err
    }
    if err := iprot.ReadFieldEnd(); err != nil {
      return err
    }
  }
  if err := iprot.ReadStructEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read struct end error: ", p), err)
  }
  return nil
}

func (p *SerializeInFieldIdOrder) Write(oprot thrift.Protocol) error {
  if err := oprot.WriteStructBegin("SerializeInFieldIdOrder"); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write struct begin error: ", p), err) }
  if err := oprot.WriteFieldStop(); err != nil {
    return thrift.PrependError("write field stop error: ", err) }
  if err := oprot.WriteStructEnd(); err != nil {
    return thrift.PrependError("write struct stop error: ", err) }
  return nil
}

func (p *SerializeInFieldIdOrder) String() string {
  if p == nil {
    return "<nil>"
  }

  return fmt.Sprintf("SerializeInFieldIdOrder({})")
}

type V1 struct {
}

func NewV1() *V1 {
  return &V1{}
}

type V1Builder struct {
  obj *V1
}

func NewV1Builder() *V1Builder{
  return &V1Builder{
    obj: NewV1(),
  }
}

func (p V1Builder) Emit() *V1{
  return &V1{
  }
}

func (p *V1) Read(iprot thrift.Protocol) error {
  if _, err := iprot.ReadStructBegin(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read error: ", p), err)
  }


  for {
    _, fieldTypeId, fieldId, err := iprot.ReadFieldBegin()
    if err != nil {
      return thrift.PrependError(fmt.Sprintf("%T field %d read error: ", p, fieldId), err)
    }
    if fieldTypeId == thrift.STOP { break; }
    if err := iprot.Skip(fieldTypeId); err != nil {
      return err
    }
    if err := iprot.ReadFieldEnd(); err != nil {
      return err
    }
  }
  if err := iprot.ReadStructEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read struct end error: ", p), err)
  }
  return nil
}

func (p *V1) Write(oprot thrift.Protocol) error {
  if err := oprot.WriteStructBegin("v1"); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write struct begin error: ", p), err) }
  if err := oprot.WriteFieldStop(); err != nil {
    return thrift.PrependError("write field stop error: ", err) }
  if err := oprot.WriteStructEnd(); err != nil {
    return thrift.PrependError("write struct stop error: ", err) }
  return nil
}

func (p *V1) String() string {
  if p == nil {
    return "<nil>"
  }

  return fmt.Sprintf("V1({})")
}
