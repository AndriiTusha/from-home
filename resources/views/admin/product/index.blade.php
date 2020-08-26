@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Products</h1>
    <a href="/admin/product/create" class="btn btn-primary btn-sm">Add product</a>
@stop

@section('content')
   @include('admin._messages') 
   {{-- добавили файл для обработки ошибок при заполнении формы --}}
   <table class="table">
   	<thead>
   		<tr>
   			<th>#</th>
   			<th>Image</th>
   			<th>Name</th>
   			<th>Slug</th>
   			<th>Button Here</th>
   		</tr>
   	</thead>
   	<tbody>
   		@foreach($products as $item)
   		<tr>
   			<td>{{ $loop->iteration }}</td>
   			<td><img src="{{ $item->img }}" alt="{{$item->name}}" style="width: 100px"></td>
   			<td>{{ $item->name }}</td>
   			<td>{{ $item->slug }}</td>
   			<td class="d-flex flex-row justify-content-around">
               <a href="/admin/product/{{$item->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
               <form action="/admin/product/{{$item->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
               </form>      
            </td>
   		</tr>
   		@endforeach
   	</tbody>
   </table>
@stop
