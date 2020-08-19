@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h1>Categories</h1>
    <a href="/admin/category/create" class="btn btn-primary btn-sm">Add category</a>
@stop

@section('content')
	@include('admin._messages')
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

   		@foreach($categories as $item)
   		<tr>
   			<td>{{ $loop->iteration }}</td>
   			<td><img src="{{ $item->img }}" alt="{{$item->name}}" style="width: 100px"></td>
   			<td>{{ $item->name }}</td>
   			<td>{{ $item->slug }}</td>
   			<td class="d-flex flex-row justify-content-around">
               <a href="/admin/category/{{$item->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
               <form action="/admin/category/{{$item->id}}" method="POST">
                  @csrf
                  {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                  @method('DELETE')
                  <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
               </form>      
            </td>
   		</tr>
   		@endforeach
   	</tbody>
   </table>
@stop
