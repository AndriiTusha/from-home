@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h1>Edit Category: {{$category->name}}</h1>
    
@stop

@section('content')
{{-- проверка на ошибки --}}

@include('admin._messages')

  <form action="/admin/category/{{$category->id}}" method="POST" enctype="multipart/form-data">
  	@method('PUT')
     @include('admin.category._form')
  </form>
@stop
