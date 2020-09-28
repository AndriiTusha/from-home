<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
	
	<title>My Laravel Diploma</title>
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="images/favicon-logo/favicon-icon.png" type="image/x-icon">
    {{-- <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/vendor/fontawesome-free-5.9.0-web/css/all.css" type="text/css">
    <!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('/css/app.css')}}">
	<link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('/css/style.css')}}">


	{{-- <style>
		body {
			height: 100vh;
			display: flex;
			flex-direction: column;
		}
		.container-main {
			flex: 1;
		}
	</style> --}}

</head>
<body>
	<header class="head-area main-header">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light w-100">
			<a class="navbar-brand col-7 col-sm-8 col-md-6 col-lg-4" href="/">
				<img class="w-75" src="/images/logo1.png" alt="logo">
			</a>
			<button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/about">About us</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Category
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="/europe">Europe cars</a>
							<div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/usa">US cars</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/japan">Asia and Japan cars</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/contacts">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/contacts">Contacts</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-shopping-cart"></i>
                            </button>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
				{{-- <form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form> --}}
			</div>
		</nav>
			</div>
		</div>
        <hr>
		

	</header>
		
			@yield('index')
			@yield('index-new')
			@yield('contacts')
            @yield('about')
			@yield('content')
            @yield('product')
            @yield('europe')
            @yield('usa')
            @yield('japan')
            @yield('search')
		
	
	{{-- <footer class="bg-dark text-white text-center py-1">
		This is a footer
	</footer> --}}

	<!-- Footer-area starts -->
    <footer class="footer-area">
        <div class="footer-widget ">
            <div class="container  d-flex flex-lg-row justify-content-lg-between flex-column py-4">
                <div class=" col-12 col-lg-3 mb-3 mb-lg-0">
                    <h2 class="mb-4">Top Products</h2>
                    <p class="my-0">Managed Website</p>
                    <p class="my-0">Managed Reputation</p>
                    <p class="my-0">Power Tools</p>
                    <p class="my-0">Marketing Service</p>
                </div>
                <div class=" col-12 col-lg-6 mb-3 mb-lg-0">
                    <h2 class="mb-4">News Letter</h2>
                    <p>You can trust us, we only send promo offers, not a single</p>
                    <div class=" container px-0">
                        <form action="#" class=" px-0 col-12 d-flex flex-column align-items-center flex-md-row justify-content-md-between">
                            <div class="col-12 col-md-6 col-lg-6 px-0 pb-3 pb-md-0">
                                <input class="form-control" type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                            </div>
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 px-0">
                                <button type="submit" class="form-control template-btn bg-warning text-uppercase">subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=" col-12 col-lg-3 mb-3 mb-lg-0">
                    <h2 class="mb-4">Instagram feeds</h2>
                    <div class="feed">
                        <img src="images/feed1.jpg" alt="" class="img-feeds">
                        <img src="images/feed2.jpg" alt="" class="img-feeds">
                        <img src="images/feed3.jpg" alt="" class="img-feeds">
                        <img src="images/feed4.jpg" alt="" class="img-feeds">
                        <img src="images/feed5.jpg" alt="" class="img-feeds">
                        <img src="images/feed6.jpg" alt="" class="img-feeds">
                        <img src="images/feed7.jpg" alt="" class="img-feeds">
                        <img src="images/feed8.jpg" alt="" class="img-feeds">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container d-flex flex-column flex-md-row">
                <!-- <div class="row col-12"> -->
                    <div class="footer-copyright-text col-lg-8 col-md-6">
                        <p>Copyright ©<span>
                        	<script>  // --- выводим текущий год
                        		let date = new Date(); 
                        		let year = date.getFullYear();
                        		document.write(year);
                        	</script>
                        </span> All rights reserved | This template is made with by Colorlib</p>
                    </div>
                    <div class="footer-copyright-social col-lg-4 col-md-6">
                        <div class="social-icons">
	                        <ul class="list-group list-group-horizontal justify-content-start justify-content-md-end">
	                            <li class="list-group-item"><i class="fab fa-facebook-f"></i></li>
	                            <li class="list-group-item ml-2"><i class="fab fa-twitter"></i></li>
	                            <li class="list-group-item ml-2"><i class="fab fa-linkedin-in"></i></li>
	                            <li class="list-group-item ml-2"><i class="fab fa-vk"></i></li>
	                        </ul>
                   		</div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </footer>

	

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	{{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}

	 <!-- Modal window-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	@include('shop._cart')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        <a href="/checkout" class="btn btn-primary">Save changes</a>
        <button type="button" class="btn btn-danger clear-cart">Clear cart</button>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>
