@extends('mainlayouts.main')

@section('product')
	<section class="container col-10">
		
	
	<h1 class="my-3 product-name ml-2">{{ $products->category->name}}, {{$products->name}}, {{$products->year}}</h1>

	<div class="card mb-3">
		<div class="row">
			{{-- image block --}}
			<div class="col-12 col-md-7">
				<img src="{{$products->img}}" class="card-img" alt="{{$products->name}}">
			</div>

			{{-- description block --}}
			<div class="col-12 col-md-5">
				<div class="card-body">
					<h2>Model: <span class="font-weight-bold">{{$products->category->name}}</span></h2>
					<h3>Mark: <span class="font-weight-bold">{{$products->name}}</span></h3>
					
					<div class="card-content-features">
				 		<p class="card-text my-0"><i class="fas fa-tachometer-alt mr-2"></i>Odometr: {{$products->odometr}} km</p>
				 		<p class="card-text my-0"><i class="fas fa-gas-pump mr-2"></i>Engine type: {{$products->engine}}</p>
				 		<p class="card-text my-0"><i class="fas fa-truck-monster mr-2"></i>Transmission type: {{$products->transmission}}</p>
				 	</div>
				 	
					<p>Product ID: {{$products->id}}</p>
					<h2>Price: <span class="text-capitalize text-success font-weight-bold">{{$products->price}} $</span></h2>
					<form action="/" class="add-to-cart">
						@csrf
						<input type="number" name="qty" value="1">
						<input type="hidden" name="product_id" value="{{$products->id}}">
						<button class="btn btn-primary my-2">Add to cart</button>
					</form>
					{{-- {{$reviews}} --}}
					{{-- <a href="#" class="btn btn-primary">Add to cart</a> --}}


					{{-- <div><strong>Comments: </strong>{{$reviews["review"]}}</div> --}}
				</div>
			</div>

		</div>

		<div class="col-12">
					<h2 class="mt-2">Product name: <span class="text-success">{{$products->name}}</span> </h2>
					<h4>Name of category: <span class="text-success">{{ $products->category ? $products->category->name : 'No category!'}}</span></h4>
					<p><strong>Product description:</strong> {{$products->description}}</p>
					<p>Product ID: {{$products->id}}</p>

					<div>
						<div>
						<h4 class="my-3">Hello, {{Auth::user()["name"] ?? 'Stranger'}}</h4>
							<div class="col-12 col-lg-8 mx-auto">
								@guest
									<h3 class="alert-danger text-center">For comments please <a href="/login">Login</a> or <a href="/register">Register</a></h3>
								@else
								<h5 class="my-2">Add your comment here</h5>
									<form action="/product/{{$products->slug}}" method="POST">
										@csrf
										<div class="form-group">
											<textarea name="comment" cols="30" rows="5" class="form-control"></textarea>
										</div>
										<input type="hidden" name="product" value="{{$products->id}}">
										<input type="hidden" name="user" value="{{Auth::user()->id}}">
										<button class="btn btn-primary">Post comment</button>
									</form> 
								@endguest
							</div>

						<h6 class="mb-2"><strong>Comments for this product: ( total - {{$reviews->count()}} ) </strong></h6>
						<ul>
						@foreach($reviews->sortBy('created_at')->reverse() as $review)
							<li class="mb-2">
								<p class="my-0"><strong>Date of creation: </strong>{{$review["created_at"]}}</p>
								<p><strong>Comment: </strong>{{$review["review"]}}</p>

							</li>
						@endforeach
						</ul>
						{{-- @foreach($reviews->sortBy('created_at')->reverse() as $review)
							<p><strong>Date of creation: </strong> {{$review["created_at"]}}</p>
							<p><strong>Comment: </strong> {{$review["review"]}} </p>
						@endforeach --}}
						</div>
					</div>
		</div>
	</div>
	</section>
@endsection