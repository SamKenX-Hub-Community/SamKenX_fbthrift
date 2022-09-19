#
# Autogenerated by Thrift
#
# DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
#  @generated
#


import folly.iobuf as _fbthrift_iobuf

from thrift.py3.reflection cimport (
    NumberType as __NumberType,
    StructType as __StructType,
    Qualifier as __Qualifier,
)

cimport facebook.thrift.annotation.java.types as _facebook_thrift_annotation_java_types
cimport facebook.thrift.annotation.thrift.types as _facebook_thrift_annotation_thrift_types

cimport apache.thrift.type.standard.types as _apache_thrift_type_standard_types

from thrift.py3.types cimport (
    constant_shared_ptr,
    default_inst,
)


cdef __StructSpec get_reflection__UriStruct():
    cdef _apache_thrift_type_standard_types.UriStruct defaults = _apache_thrift_type_standard_types.UriStruct._fbthrift_create(
        constant_shared_ptr[_apache_thrift_type_standard_types.cUriStruct](
            default_inst[_apache_thrift_type_standard_types.cUriStruct]()
        )
    )
    cdef __StructSpec spec = __StructSpec._fbthrift_create(
        name="UriStruct",
        kind=__StructType.STRUCT,
        annotations={
            """thrift.uri""": """facebook.com/thrift/type/Uri""",        },
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=1,
            name="scheme",
            type=str,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=2,
            name="domain",
            type=_apache_thrift_type_standard_types.List__string,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=4,
            name="path",
            type=_apache_thrift_type_standard_types.List__string,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=5,
            name="query",
            type=_apache_thrift_type_standard_types.Map__string_string,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=6,
            name="fragment",
            type=str,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    return spec
cdef __StructSpec get_reflection__TypeUri():
    cdef __StructSpec spec = __StructSpec._fbthrift_create(
        name="TypeUri",
        kind=__StructType.UNION,
        annotations={
        },
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=1,
            name="uri",
            type=str,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=2,
            name="typeHashPrefixSha2_256",
            type=bytes,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    return spec
cdef __StructSpec get_reflection__TypeName():
    cdef __StructSpec spec = __StructSpec._fbthrift_create(
        name="TypeName",
        kind=__StructType.UNION,
        annotations={
        },
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=1,
            name="boolType",
            type=_apache_thrift_type_standard_types.Void,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=2,
            name="byteType",
            type=_apache_thrift_type_standard_types.Void,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=3,
            name="i16Type",
            type=_apache_thrift_type_standard_types.Void,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=4,
            name="i32Type",
            type=_apache_thrift_type_standard_types.Void,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=5,
            name="i64Type",
            type=_apache_thrift_type_standard_types.Void,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=6,
            name="floatType",
            type=_apache_thrift_type_standard_types.Void,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=7,
            name="doubleType",
            type=_apache_thrift_type_standard_types.Void,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=8,
            name="stringType",
            type=_apache_thrift_type_standard_types.Void,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=9,
            name="binaryType",
            type=_apache_thrift_type_standard_types.Void,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=10,
            name="enumType",
            type=_apache_thrift_type_standard_types.TypeUri,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=11,
            name="structType",
            type=_apache_thrift_type_standard_types.TypeUri,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=12,
            name="unionType",
            type=_apache_thrift_type_standard_types.TypeUri,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=13,
            name="exceptionType",
            type=_apache_thrift_type_standard_types.TypeUri,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=14,
            name="listType",
            type=_apache_thrift_type_standard_types.Void,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=15,
            name="setType",
            type=_apache_thrift_type_standard_types.Void,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    spec.add_field(
        __FieldSpec._fbthrift_create(
            id=16,
            name="mapType",
            type=_apache_thrift_type_standard_types.Void,
            kind=__NumberType.NOT_A_NUMBER,
            qualifier=__Qualifier.UNQUALIFIED,
            default=None,
            annotations={
            },
        ),
    )
    return spec
cdef __ListSpec get_reflection__List__string():
    return __ListSpec._fbthrift_create(
        value=str,
        kind=__NumberType.NOT_A_NUMBER,
    )

cdef __MapSpec get_reflection__Map__string_string():
    return __MapSpec._fbthrift_create(
        key=str,
        key_kind=__NumberType.NOT_A_NUMBER,
        value=str,
        value_kind=__NumberType.NOT_A_NUMBER,
    )

