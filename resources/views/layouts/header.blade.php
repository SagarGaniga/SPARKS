<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>KJHacks</title>
      <!-- Meta Tags -->
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<meta name="keywords" content="Preparation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- // Meta Tags -->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.css" rel="stylesheet">
      <!-- //font-awesome icons -->
	  <link href="css/owl.carousel.css" rel="stylesheet">
      <!--stylesheets-->
		<link href="css/style1.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
     <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
   </head>
   <body>

<!--/banner-->
<!-- banner -->
<header>
	<section class="main_section_agile">
		<div class="agileits_w3layouts_banner_nav">
		
			<div class="header-bar">
				<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
               <div class="hedder-up">
               <h1><a class="navbar-brand" href="#">KJHacks</a></h1>
			   </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                   <ul class="navbar-nav">
							 <li class="nav-item active">
								<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
							 </li>
							 <li class="nav-item">
								<a href="#intro" class="nav-link">About</a>
							 </li>
							 <li class="nav-item">
								<a href="#organizers" class="nav-link ">Organizers</a>
							 </li>
	
							  <li class="nav-item">
								<a href="#participant" class="nav-link">Participant</a>
							 </li>
							 @guest
							 
							 @else
							 <li class="nav-item">
								<a class="nav-link" href="/home">Contact Us <span class="sr-only">(current)</span></a>
							 </li>
							 @endguest
							 
							{{--  @guest
							 <li class="nav-item">
								<a href="/login" class="nav-link">Login</a>
							 </li>
							@else
							 <li class="nav-item">
								<a href="#" class="nav-link">{{ Auth::user()->name }} </a>
							 </li>
						  	@endguest
							 @guest
							 
							 @else
							 <li class="nav-item">
							 	<a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    LOGOUT
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form> 

							 </li>
							 @endguest --}}
							 
							
						  </ul>
               </div>
            </nav>				
		</div>
   </div>
         <!-- //Navigation -->

	</div>
	</section>
	</header>




