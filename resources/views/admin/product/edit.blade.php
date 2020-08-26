@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Edit Product: <i class="alert-warning">{{$product->name}}</i></h1>
    
@stop

@section('content')
{{-- проверка на ошибки --}}

@include('admin._messages')

  <form action="/admin/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
  	@method('PUT')
     @include('admin.product._form')
  </form>
@stop
