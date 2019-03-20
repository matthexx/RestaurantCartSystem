<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tribe - restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="shortcut icon" href="/images/logo.png">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
      <div id="logo">
				        <a href="/"><img src="/images/tribe white.png" alt="" title="tribe-restaurant" /></a>
				      </div>	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{ url('/shop/menu')}}" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="{{ url('/pages/reservation')}}" class="nav-link">Reservation</a></li>
	          <li class="nav-item"><a href="{{ url('/pages/about')}}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{ url('/pages/contact')}}" class="nav-link">Contact</a></li>
            <li class="nav-item active"><a href="{{ url('/shop/cart')}}" class="nav-link"><span class="icon-shopping_cart" style="color:sandybrown;"></span> Cart <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty: ''}}</span></a></li>
						<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="icon-user" style="color:sandybrown;"></span> User Account
									</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
											@if(Auth::check())
											<a class="dropdown-item" href="/home"><span class="icon-user" style="color:sandybrown;"></span> {{ Auth::user()->name }}</a>
											<div class="dropdown-divider"></div>											
											
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="icon-key" style="color:sandybrown;"></span>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                      	@else
											<a class="dropdown-item" href="/login"><span class="icon-person" style="color:sandybrown;"></span> Login</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="/register"><span class="icon-key" style="color:sandybrown;"></span> Signup</a>
											
											@endif
										</div>
      		 </li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <div class="jumbotron jumbotron-fluid bigBanner">

        <div class="container">
          <h1 class="display-4">TRIBE</h1>
          <p class="lead text-white">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div>

   
      <!--Shopping badge-->
    <div class="container-fluid mt-5" style="margin-left:55px;">
        <div class="row block-5">
          <div class="col-md-7">
            <div class="col-md-5 contact-info ftco-animate">

                <div class="row">
                <div class="col-md-12 col-sm-12 mb-4" style=";">
                    <h2 class="btnShopTag">Shopping Cart</h2>
                </div>
                </div>
            </div>
          </div>
        </div>
    </div>


    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-9 col-sm-12">
            @if(session::has('cart'))
      
            <div class="container">
              
              <div class="row">
                
              <div class="col-lg-12">
      
                
              <div class="col-lg-9 col-sm-12">
                    <table class="table table-bordered table-dark">
                        <thead>
                          <tr>
                            {{-- <th scope="col">#</th> --}}
                            {{-- <th scope="col">Product</th> --}}
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Edit</th>
                          </tr>
                        </thead>
                  
                      <tbody>
                        @foreach($products as $product)
                        <tr>
                          {{-- <th scope="row">1</th> --}}
                          {{-- <td><img class="menu-img img mb-4" src="{{$product->imagePath}}"></td> --}}
                          <td width=50%>{{$product['item'] ['title']}}</td>
                          <td>{{$product['qty']}}</td>
                          <td>₦{{$product['price']}}</td>
                          <td>
                              <div class="btn-group center">
                                  <button type="button" data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">
                                    Action <span class="caret"></span>
                                  </button>
                                  
                                  <ul class="dropdown-menu">
                                  <li><a href="{{route('product.reduceByOne', ['id'=> $product['item']['id']])}}" style="color:black; padding:10px;">reduce by 1</a></li>
                                    <li><a href="{{route('product.remove', ['id'=> $product['item']['id']])}}" style="color:black; padding-left:10px;">reduce all</a></li>
                                  </ul>
                              </div>
                            </td>
                          
                        </tr>
      
                        @endforeach
                      </tbody>
                    </table>
                      
                
                <hr>
                <div class="col-md-4 col-md-offset-3 col-sm-12">
                  <h3><strong style="color:#fff; font-weight:bolder;">Total: ₦{{$totalPrice}}</strong></h3>
                  <button style="border-radius:5px; width:100px; height:40px; font:bolder; text-align:center; font-size:17px;" type="button" class="btn btn-success btn-lg">Checkout</button>
                </div>

                <br>
      
      
          
            @else
                <div class="row">
                  <div class="col-md-12 col-md-offset-3">
                  <h2 class="text-center">No Item in Cart!</h2>
                </div>
            </div>
          @endif
        </div>        
        </div>
        </div>
        </div>
        </div>
          <br>
          <br>
        <div class="col-lg-3 col-sm-12 mt-20">
            <div class="card" style="width: 18rem;" style="">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="card-img-top d-block w-100" src="/images/pizza-2.jpg" alt="Card image cap">                    
                      </div>
                      <div class="carousel-item">
                          <img class="card-img-top d-block w-100" src="/images/pizza-4.jpg" alt="Card image cap">
                        </div>
                      <div class="carousel-item">
                          <img class="card-img-top d-block w-100" src="/images/pizza-5.jpg" alt="Card image cap">
                        </div>
                    </div>
                  </div>

                
                <div class="card-body">
                  <h5 class="card-title" style="color:#000;">Featured Menu</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
              </div>   
           </div>
   
      </div>
    </div>

    <br>

    
    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
               <h2 class="ftco-heading-2">We are Social</h2>
              <div class="block-21 mb-4 d-flex">
								<ul class="ftco-footer-social list-unstyled ">
									<li class=""><a href="#"><span class="icon-twitter"></span></a></li>
									<li class=""><a href="#"><span class="icon-facebook"></span></a></li>
									<li class=""><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
            
            </div>
					</div>
					<div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">No. 1b, Prince Adelowo Adedeji Street, Lekki Phase I Off Farm City by Admiralty Way.</span></li>
	                <li><span class="icon icon-phone"></span><span class="text">(+234) 816-024-9096</span></li>
	                <li><span class="icon icon-envelope"></span><span class="text">info@triberestaurant.com</span></li>
	              </ul>
	            </div>
            </div>
					</div>
					
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Menu</a></li>
                <li><a href="#" class="py-2 d-block">Order</a></li>
                <li><a href="#" class="py-2 d-block">Events/services</a></li>
                <li><a href="#" class="py-2 d-block">Reservation</a></li>
              </ul>
            </div>
          </div>
         
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tribe Restaurant. All rights reserved |  made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://imagine.com.ng" target="_blank">Imagine</a>  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/jquery.animateNumber.min.js"></script>
  <script src="/js/bootstrap-datepicker.js"></script>
  <script src="/js/jquery.timepicker.min.js"></script>
  <script src="/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/js/google-map.js"></script>
  <script src="/js/main.js"></script>
    
  </body>
</html>