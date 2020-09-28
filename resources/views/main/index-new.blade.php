@extends('mainlayouts.main')

@section('index-new')
	    <!-- Banner Area Start -->
	<section class="banner-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 px-0">
					<div class="banner-bg">
						<img class="w-100" src="images/banner-bg.jpg" alt="banner">
					</div>
				</div>
				<div class="col-lg-6 align-self-center">
					<div class="banner-text py-4 col-md-8">
						<h1 class="font-weight-bold text-uppercase pt-md-3 col-md-10">Find your dream <span class="text-warning">car</span> with comfort</h1>
						<p class="mt-3 mb-1 text-secondary col-md-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione rem harum tenetur repellat pariatur laboriosam, officia amet quo consequatur nemo voluptatem dolor iure nesciunt, dolorum. A sapiente error sed possimus.</p>
						<a href="/about" class="btn btn-secondary bg-transparent text-uppercase text-dark border-0">explore now <span><i class="fas fa-arrow-right"></i></span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner Area End -->
	<!-- Search area starts -->
	<section class="search-area">
		<div class="container">
			<div class="bg-warning">
				<div class="row">
					<div class="col-lg-12">
						<form method="GET" action="/search" class="d-flex flex-md-row justify-content-md-around py-4 flex-column align-items-center form-select">

							<select name="mark" id="mark" class="custom-select mark-select">
									<option selected disabled>Choose mark</option>
								@foreach($categories as $category)
									<option value="{{$category->slug}}" class="mark-name">{{$category->name}}</option>
								@endforeach
							</select>
							<select name="model" id="model" class="custom-select model-select">
								{{--здесь будет вывод моделей после выбора марки --}}
							</select>
							<select name="fromYear" id="fromYear" class="custom-select from-year">
									<option selected disabled>from year</option>
								@foreach($years as $year)
									<option value="{{$year}}" class="from-year-count">{{$year}}</option>
								@endforeach
							</select>
							<select name="toYear" id="toYear" class="custom-select to-year">
									<option selected disabled>to year</option>
							    @foreach($years as $year)
									<option value="{{$year}}" class="from-year-count">{{$year}}</option>
								@endforeach
							</select>
							<button class="text-capitalize btn btn-primary">Find your car</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Search area End -->
	<!-- Feature Area Starts -->
	<section class="feature-area">
		<div class="container d-md-flex justify-content-center">
			<div class="w-100 row my-lg-5 d-lg-flex flex-lg-row justify-content-lg-between flex-lg-nowrap d-flex flex-column mx-sm-auto">
				<div class="card card-top-category mt-3">
				 	<div class="card-body">
					    <h5 class="card-title">Europe cars</h5>
					    <p class="card-text py-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="/europe" class="btn btn-secondary bg-transparent text-uppercase text-dark border-white pb-md-3 border-0">explore now <span><i class="fas fa-arrow-right"></i></span></a>
				    </div>
				</div>
				<div class="card card-top-category mx-lg-5 mt-3">
				 	<div class="card-body">
					    <h5 class="card-title">USA cars</h5>
					    <p class="card-text py-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="/usa" class="btn btn-secondary bg-transparent text-uppercase text-dark border-white pb-md-3 border-0">explore now <span><i class="fas fa-arrow-right"></i></span></a>
				    </div>
				</div>
				<div class="card card-top-category mt-3">
				 	<div class="card-body">
					    <h5 class="card-title">Asia and Japan cars</h5>
					    <p class="card-text py-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="/japan" class="btn btn-secondary bg-transparent text-uppercase text-dark border-white pb-md-3 border-0">explore now <span><i class="fas fa-arrow-right"></i></span></a>
				    </div>
				</div>
			</div>
		</div>
	</section>
	<!-- Feature Area Ends -->

	<!-- Category Area Starts -->
	<section class="caregory-area">
		<div class="container">
			<div class="row">
			 	<div class="col-lg-12 my-4">
			 		<div class="section-top text-center">
			 			<h2>Find car by category</h2>
			 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			 		</div>
			 	</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="single-category bg-light text-center py-4">
						<img src="images/cat1.png" alt="category">
						<h5 class="mt-3">Cars under 3000$</h5>
						<p>Choose cheap veichles</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="single-category bg-light text-center py-4">
						<img src="images/cat2.png" alt="category">
						<h5 class="mt-3">Cars under 3000$</h5>
						<p>Choose cheap veichles</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="single-category bg-light text-center py-4">
						<img src="images/cat3.png" alt="category">
						<h5 class="mt-3">Cars under 3000$</h5>
						<p>Choose cheap veichles</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="single-category bg-light text-center py-4">
						<img src="images/cat4.png" alt="category">
						<h5 class="mt-3">Cars under 3000$</h5>
						<p>Choose cheap veichles</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="single-category bg-light text-center py-4">
						<img src="images/cat5.png" alt="category">
						<h5 class="mt-3">Cars under 3000$</h5>
						<p>Choose cheap veichles</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="single-category bg-light text-center py-4">
						<img src="images/cat1.png" alt="category">
						<h5 class="mt-3">Cars under 3000$</h5>
						<p>Choose cheap veichles</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="single-category bg-light text-center py-4">
						<img src="images/cat6.png" alt="category">
						<h5 class="mt-3">Cars under 3000$</h5>
						<p>Choose cheap veichles</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="single-category bg-light text-center py-4">
						<img src="images/cat7.png" alt="category">
						<h5 class="mt-3">Cars under 3000$</h5>
						<p>Choose cheap veichles</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category Area Ends -->
	<!-- Recent cars added Area Starts -->
	<section class="recent-added-area">
		<div class="container">
			<div class="row">
				<div class="text-caption my-4 col-12 text-center">
					<h3 class="">Recently added cars</h3>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row mb-md-4">
  				@foreach($latests as $latest) 
 				{{-- <div id="latestAdded"> --}}

 									<div class="card border mb-4 mb-md-0 col-md-4 col-12">
				 	<div class="card-body bg-light d-flex flex-row d-md-flex flex-column">
				 		<div class="card-img">
				 			<img src="{{$latest->img}}" class="card-img-top" alt="cars" style="height: 15vw">
				 		</div>
				 		<div class="card-content">
				 			<h5 class="card-title mt-1">{{$latest->category['name']}}, {{$latest->name}}, {{($latest->price)}} $, {{$latest->year}}</h5>
				 			<div class="card-content-features py-3">
				 				<p class="card-text my-0"><i class="fas fa-tachometer-alt mr-2"></i>Odometr: {{$latest->odometr}} km</p>
				 				<p class="card-text my-0"><i class="fas fa-gas-pump mr-2"></i>Engine type: {{$latest->engine}}</p>
				 				<p class="card-text my-0"><i class="fas fa-truck-monster mr-2"></i>Transmission type: {{$latest->transmission}}</p>
				 			</div>
					    </div>
					    <a href="product/{{$latest->slug}}" class="btn btn-secondary bg-transparent text-uppercase text-dark border-white pb-md-3 border-0">explore now <span><i class="fas fa-arrow-right"></i></span></a>
				    </div>
				</div>

 				{{-- </div> --}}
					


			 @endforeach  


				{{-- <div class="card border-0 mb-4 mb-md-0 col-md-4 col-12">
				 	<div class="card-body bg-light d-flex flex-row d-md-flex flex-md-column">
				 		<div class="card-img">
				 			<img src="images/car1.jpg" class="card-img-top" alt="cars">
				 		</div>
				 		<div class="card-content">
				 			<h5 class="card-title mt-1">Mark, Model and Price</h5>
				 			<div class="card-content-features py-3">
				 				<p class="card-text my-0"><i class="fas fa-tachometer-alt mr-2"></i>Odometr: 70 000 km</p>
				 				<p class="card-text my-0"><i class="fas fa-tachometer-alt mr-2"></i>Engine type</p>
				 				<p class="card-text my-0"><i class="fas fa-tachometer-alt mr-2"></i>Transmission type</p>
				 			</div>
					    </div>
					    <a href="#" class="btn btn-secondary bg-transparent text-uppercase text-dark border-white pb-md-3 border-0">explore now <span><i class="fas fa-arrow-right"></i></span></a>
				    </div>
				</div>
				<div class="card border-0 mb-4 mb-md-0 col-md-4 col-12">
				 	<div class="card-body bg-light d-flex flex-row d-md-flex flex-md-column">
				 		<div class="card-img">
				 			<img src="images/car1.jpg" class="card-img-top" alt="cars">
				 		</div>
				 		<div class="card-content">
				 			<h5 class="card-title mt-1">Mark, Model and Price</h5>
				 			<div class="card-content-features py-3">
				 				<p class="card-text my-0"><i class="fas fa-tachometer-alt mr-2"></i>Odometr: 70 000 km</p>
				 				<p class="card-text my-0"><i class="fas fa-tachometer-alt mr-2"></i>Engine type</p>
				 				<p class="card-text my-0"><i class="fas fa-tachometer-alt mr-2"></i>Transmission type</p>
				 			</div>
					    </div>
					    <a href="#" class="btn btn-secondary bg-transparent text-uppercase text-dark border-white pb-md-3 border-0">explore now <span><i class="fas fa-arrow-right"></i></span></a>
				    </div>
				</div> --}}
			</div>
	
			<div class="more-car-btn my-5 text-center d-none d-md-block">
                <p class="btn btn-warning text-uppercase show-more-cars">show more cars</p>
            </div>
		</div>
	</section>
	<!-- Recent cars added Area ends -->
	<!-- Newsletter Area starts -->
	<section class="newsletter-area">
		<div class="container-fluid car-banner d-flex flex-column justify-content-center">
			<div class="row">
			 	<div class="col-lg-12">
			 		<div class="section-top-text text-center text-dark font-weight-bold">
			 			<h2>Get info about our new car daily!</h2>
			 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			 		</div>
			 	</div>
			</div>
			<div class="row mt-4">
				<div class="col-12 d-flex justify-content-center">
					<form action="#" class=" col-12 d-flex flex-column justify-content-center align-items-center flex-md-row justify-content-md-center">
						<div class="col-10 col-sm-7 col-md-6 col-lg-5 ">
	                        <input class="form-control" type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
	                    </div>
	                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 ">
	                        <button type="submit" class="form-control template-btn bg-warning text-uppercase">subscribe</button>
	                    </div>
               		</form>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Newsletter Area ends -->
	<!-- Happy buyers Area starts -->
	<section class="happy-buyers-area mb-4">
		<div class="container">
			<div class="row">
			 	<div class="col-lg-12 my-4">
			 		<div class="section-top text-center">
			 			<h2>Happy buyers feedbacks</h2>
			 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			 		</div>
			 	</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="buyer-slider owl-carousel slider-one w-100">
				<!----- slide #1 ------>
						<div class="single-slide col-12 d-sm-flex flex-sm-row">
							<div class="slide-img col-12 col-sm-6 col-md-4 col-lg-5 p-0">
								<div class="hover-state">
									<div class="hover-text text-center">
										<h3>Buyer #1</h3>
	                                    <h5>Somewhere #1</h5>
									</div>
								</div>
							</div>
							<div class="slide-text align-self-center col-12 col-sm-6 col-md-8 col-lg-7">
								<i class="fa fa-quote-left"></i>
	                            <p>Appear, called day. Sixth two after eve moved called winged very heaven two lights let all third gathered.
	                            </p>
							</div>
						</div>
				<!----- slide #2 ------>
						<div class="single-slide col-12 d-sm-flex flex-sm-row">
							<div class="slide-img img-2 col-12 col-sm-6 col-md-4 col-lg-5 p-0">
								<div class="hover-state">
									<div class="hover-text text-center">
										<h3>Buyer #2</h3>
	                                    <h5>Somewhere #2</h5>
									</div>
								</div>
							</div>
							<div class="slide-text align-self-center col-12 col-sm-6 col-md-8 col-lg-7">
								<i class="fa fa-quote-left"></i>
	                            <p>Appear, called day. Sixth two after eve moved called winged very heaven two lights let all third gathered.
	                            </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Happy buyers Area ends -->
	<!-- Company latest news Starts -->
	<section class="company-latest-news">
		<div class="container">
			<div class="row">
				<div class="text-caption my-4 col-12 text-center">
					<h3 class="">Company latest news</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="card border-0 mb-md-0 col-12 col-sm-6 col-lg-4">
				 	<div class="card-body d-flex flex-column">
				 		<div class="card-img">
				 			<img src="images/car1.jpg" class="card-img-top" alt="cars">
				 		</div>
				 		<div class="card-content mt-2">
				 			<div class="card-content-features d-flex flex-row">
				 				<p class="card-text"><i class="far fa-calendar-alt mr-2"></i>Data 20th Sep, 2018</p>
				 				<p class="card-text mx-1 mx-sm-1 mx-lg-2">|</p>
				 				<p class="card-text"><i class="far fa-folder-open mr-2"></i>Company</p>
				 			</div>
				 			<h5 class="card-title my-4">Lime Recall Electric Cars Over Battery Fire</h5>
					    </div>
				    </div>
				</div>
				<div class="card border-0 mb-md-0 col-12 col-sm-6 col-lg-4">
				 	<div class="card-body d-flex flex-column">
				 		<div class="card-img">
				 			<img src="images/car1.jpg" class="card-img-top" alt="cars">
				 		</div>
				 		<div class="card-content mt-2">
				 			<div class="card-content-features d-flex flex-row">
				 				<p class="card-text"><i class="far fa-calendar-alt mr-2"></i>Data 20th Sep, 2018</p>
				 				<p class="card-text mx-1 mx-sm-1 mx-lg-2 ">|</p>
				 				<p class="card-text"><i class="far fa-folder-open mr-2"></i>Company</p>
				 			</div>
				 			<h5 class="card-title my-4">Lime Recall Electric Cars Over Battery Fire</h5>
					    </div>
				    </div>
				</div>
				<div class="card border-0 mb-md-0 col-12 col-sm-6 col-lg-4">
				 	<div class="card-body d-flex flex-column">
				 		<div class="card-img">
				 			<img src="images/car1.jpg" class="card-img-top" alt="cars">
				 		</div>
				 		<div class="card-content mt-2">
				 			<div class="card-content-features d-flex flex-row">
				 				<p class="card-text"><i class="far fa-calendar-alt mr-2"></i>Data 20th Sep, 2018</p>
				 				<p class="card-text mx-1 mx-sm-1 mx-lg-2">|</p>
				 				<p class="card-text"><i class="far fa-folder-open mr-2"></i>Company</p>
				 			</div>
				 			<h5 class="card-title my-4">Lime Recall Electric Cars Over Battery Fire</h5>
					    </div>
				    </div>
				</div>
			</div>
			<div class="more-car-btn my-5 text-center d-none d-md-block">
                <a href="#" class="btn btn-warning text-uppercase">show more news</a>
            </div>
		</div>
	</section>
	<!-- Company latest news ends -->
@endsection