@extends('mainlayouts.main')

@section('search')
	<h1 class="text-center">This is the search page</h1>
	<hr>

	<div class="container">
	 	@foreach($choosenCars as $choosenCar )

			<div class="row d-flex flex-row">
				<div class="img col-4">
					<img src="{{$choosenCar->img}}" class="w-100">
				</div>
				<div class="description d-flex flex-column col-8">
					<a href="/product/{{$choosenCar->slug}}">
						<h3 class="text-success">{{$nameOfModel}} {{$choosenCar->name}}</h3>
					</a>
					<h3 class="text-success">{{$choosenCar->year}}</h3>
					<h2>{{$choosenCar->price}} $</h2>
					<div class="feature-description d-flex flex-row">
						<div class="col-3">
							<p class="mb-1">	<i class="fas fa-tachometer-alt mr-1"></i> {{$choosenCar->odometr}} km</p>
							<p class="mb-2"><i class="fas fa-gas-pump mr-1"></i> {{$choosenCar->engine}}</p>
						</div>
						<div class="col-3">
							<p><i class="fas fa-truck-monster mr-1"></i> {{$choosenCar->transmission}}</p>
						</div>
					</div>
					<p>{{$choosenCar->description}}</p>
					<p><i class="far fa-clock mr-1"></i>{{$choosenCar->created_at}}</p>
				</div>
			</div>
			<hr>
		@endforeach 
	</div>
@endsection