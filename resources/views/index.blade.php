<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tribe - restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

		<link rel="shortcut icon" href="images/logo.png">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
					<div id="logo">
				        <a href="/"><img src="images/tribe white.png" alt="" title="tribe-restaurant" /></a>
				      </div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{ url('/shop/menu')}}" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="{{ url('/pages/reservation')}}" class="nav-link">Reservation</a></li>
	          <li class="nav-item"><a href="{{ url('/pages/about')}}" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="{{ url('/pages/contact')}}" class="nav-link">Contact</a></li>
						<li class="nav-item"><a href="{{ url('/shop/cart')}}" class="nav-link"><span class="icon-shopping_cart" style="color:sandybrown;"></span> Cart <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty: ''}}</span></a></li>
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

    
    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">
      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
            	<span class="subheading">Simply Delicious</span>
              <h1 class="mb-4">Afro-Italian Cuisine</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/bg_1.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Tribe's Crunchy</span>
              <h1 class="mb-4">Italian Pizza</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/bg_2.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome To Tribe </span>
              <h1 class="mb-4">We made your favorite Cuisine </h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
						<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>No. 1b, Prince Adelowo Adedeji Street, Lekki Phase I </h3>
	    						<p>Off Farm City by Admiralty Way.</p>
	    					</div>
							</div>
							
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>Phone: (+234) 816-024-90960</h3>
	    						<p>info@triberestaurant.com</p>
	    					</div>
	    				</div>
	  
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Friday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Welcome to <img src="images/tribe white.png"/> Restaurant</h2>
        </div>
        <div>
  				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Healthy Foods</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Fastest Delivery</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Original Recipes</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
		</section>

		<section class="ftco-section">
    	<div class="container">
    	 <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">OUR MENU</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
			</div>
			
			<section class="ftco-menu">
    		<div class="container-fluid">
    		<div class="row d-md-flex">
				
					<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(images/about.jpg);"></div>
				
					<div class="col-lg-8 ftco-animate p-md-5">
		    	<div class="row">

		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Break fast</a>
                      <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Launch</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Dinner</a>
		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Drinks</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Combo</a>

		              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Pasta</a>
		            </div>
							</div>

							<div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">

		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
											</div>
											
		              	</div>
									</div>
									
									<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Lemonade Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pineapple Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Soda Drinks</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Itallian Pizza</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
                              
		              	</div>
									</div>

									
									<div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Lemonade Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pineapple Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Soda Drinks</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>
									
									
									<div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Lemonade Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pineapple Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Soda Drinks</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>


</div>
</div>
</div>
</div>
</div>
</div>
</section>

							
			
    </section>

		<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">EVEN MORE MENU</h2>
            <p>Here is even much more to choose from, we delight in serving you with much more from our favorite collections.</p>
          </div>
        </div>
			</div>

    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/pizza-1.jpg);"></a>
    					<div class="text p-4">
    						<h3>Italian Pizza</h3>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
    						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/pizza-2.jpg);"></a>
    					<div class="text p-4">
    						<h3>Greek Pizza</h3>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/pizza-3.jpg);"></a>
    					<div class="text p-4">
    						<h3>Caucasian Pizza</h3>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(images/pizza-4.jpg);"></a>
    					<div class="text p-4">
    						<h3>American Pizza</h3>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
    						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(images/pizza-5.jpg);"></a>
    					<div class="text p-4">
    						<h3>Tomatoe Pie</h3>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(images/pizza-6.jpg);"></a>
    					<div class="text p-4">
    						<h3>Margherita</h3>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>

    

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>


		<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-pizza-1"></span></div>
		              	<strong class="number" data-number="5000">0</strong>
		              	<span>Dishes Served</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-medal"></span></div>
		              	<strong class="number" data-number="60">0</strong>
		              	<span>Number of Awards</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-laugh"></span></div>
		              	<strong class="number" data-number="10567">0</strong>
		              	<span>Happy Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-chef"></span></div>
		              	<strong class="number" data-number="30">0</strong>
		              	<span>Staff</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    
		
		<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div id="map"></div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Contact Us</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name">
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>
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
               <!-- <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div> -->
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


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>