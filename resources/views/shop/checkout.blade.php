@extends('mainlayouts.main');

@section('content')
	<h1>Checkout</h1>
	<div class="container">
		@include('shop._cart')
		@guest
		     <p><a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a></p>
		@else 
              <a href="/end-checkout" class="btn btn-primary">End checkout</a>
		@endguest
	</div>
@endsection