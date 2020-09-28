@extends('mainlayouts.main')

@section('contacts')
	<h1 class="text-center my-4">This is contact page: </h1>
	<h4 class="text-center">{{$title}}</h4>
		<div class="container d-md-flex justify-content-center">
			<div class="w-100 row my-lg-3 d-lg-flex flex-lg-row justify-content-center flex-lg-nowrap mx-auto">
				<div class="card card-photo mx-md-4 mt-2 mx-sm-4 col-12 col-sm-4 col-md-3">
				 	<div class="card-body d-flex flex-column align-items-center">
				 		<img src="images/employee2.jpg" alt="photo1" class="w-100 rounded-circle">
				 		
				 		<h5 class="my-2 text-uppercase">Jhon Travolta</h5>
					    
					    <p class="card-text">Chief sales manager</p>
					    <p class="card-text">name@domain.com</p>
					    <a href="callto:12345678" class="btn btn-primary text-uppercase">call now</a>
				    </div>
				</div>
				<div class="card card-photo mx-md-4 mt-2 col-12 col-sm-4 col-md-3">
				 	<div class="card-body d-flex flex-column align-items-center">
				 		<img src="images/employee1.jpg" alt="photo1" class="w-100 rounded-circle">
				 		
				 		<h5 class="my-2 text-uppercase">Jhon Travolta</h5>
					    
					    <p class="card-text">Chief sales manager</p>
					    <p class="card-text">name@domain.com</p>
					    <a href="callto:12345678" class="btn btn-primary text-uppercase">call now</a>
				    </div>
				</div>
				<div class="card card-photo mx-md-4 mx-sm-4 mt-2 col-12 col-sm-4 col-md-3 mb-2">
				 	<div class="card-body d-flex flex-column align-items-center">
				 		<img src="images/employee2.jpg" alt="photo1" class="w-100 rounded-circle">
				 		
				 		<h5 class="my-2 text-uppercase">Jhon Travolta</h5>
					    
					    <p class="card-text">Chief sales manager</p>
					    <p class="card-text">name@domain.com</p>
					    <a href="callto:12345678" class="btn btn-primary text-uppercase">call now</a>
				    </div>
				</div>
				<div class="card card-photo mx-md-4 mt-2 col-12 col-sm-4 col-md-3 mb-2">
				 	<div class="card-body d-flex flex-column align-items-center">
				 		<img src="images/employee1.jpg" alt="photo1" class="w-100 rounded-circle">
				 		
				 		<h5 class="my-2 text-uppercase">Jhon Travolta</h5>
					    
					    <p class="card-text">Chief sales manager</p>
					    <p class="card-text">name@domain.com</p>
					    <a href="callto:12345678" class="btn btn-primary text-uppercase">call now</a>
				    </div>
				</div>
			</div>
		</div>

		<div class="container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d42847.82772259121!2d35.158147199999995!3d47.839801949999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1599571689640!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="w-100"></iframe>
		</div>
	
		<div class="container d-flex flex-column flex-md-row justify-content-between my-4">
			<div class="row col-12 col-md-4 d-flex flex-column mb-3 mb-md-0">
				<h4 class="mb-3">Our Address</h5>
				<p>60900 Ukraine, Kiev</p>
				<p>69, Zolotie vorota str.</p>
				<p><b>Tel.:</b>(095)000-01-02</p>
				<p><b>Open:</b>09:00 - 18:00</p>
			</div>
			<div class="row col-12 col-md-8 d-flex flex-column">
				<h4 class="mb-3">Be in touch with us</h4>
				<h6>Please fill the form and we will contact you</h6>
				<form action="/contacts" class="" method="POST">
					@csrf
				<div class="container-fluid d-flex flex-row">
					
					<div class="col-6">
						<div class="form-group">
							<input type="text" name="yourName" class="form-control" value="" placeholder="Your name">
						</div>
						<div class="form-group">
							<input type="text" name="companyName" class="form-control" value="" placeholder="Company name">
						</div>
						<div class="form-group">
							<input type="text" name="phoneNumber" class="form-control" value="" placeholder="Phone number">
						</div>
					</div>

					<div class="col-6 d-flex">
						<div class="form-group request align-self-stretch w-100">
							<input type="text" name="yourRequest" class="form-control col-12 h-100" value="" placeholder="Describe your request">
						</div>
					</div>
				</div>
				<p>Pressing key "Send" you agreen with our rules according our Terms and Condition</p>
				<button class="btn btn-primary col-12 col-md-4">Send</button>
				</form>

			</div>
		</div>
@endsection