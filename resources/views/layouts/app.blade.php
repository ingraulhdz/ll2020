
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>
<link href="/css/sbadmin/sb-admin-2.css" rel="stylesheet">
    <link href="/css/toastr.min.css" rel="stylesheet">
    <link href="/css/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="la loma, Mexico, rancho, renovacion, pueblo, acambay, estado de mexico, toluca, atlacomulco, temascalsingo, juando, agostadero, amealco aculco, san juan del rio" />
<script type="applisalonion/x-javascript">
	 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
	 function hideURLbar(){ window.scrollTo(0,1); }
	 </script>


		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	
<link href="/front/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/front/css/iconeffects.css" rel='stylesheet' type='text/css' />
<link href="/front/css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="/front/css/swipebox.css">
<link href="/css/toastr.min.css" rel="stylesheet">

<script src="/js/vendor/jquery/jquery.min.js"></script>

<script type="text/javascript" src="/front/js/move-top.js"></script>




<script src="/js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/js/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->

<script src="/js/sbadmin/sb-admin-2.min.js"></script>




<!--/web-font-->



<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!-- swipe box js -->
	<script src="/front/js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
<!-- //swipe box js -->
<!--animate-->
<link href="/front/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="/front/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>

</head>
<body>
<!--start-home-->
		<div class="banner" id="home">
		<div class="header-bottom wow slideInDown"  data-wow-duration="1s" data-wow-delay=".3s">
		     <div class="container">
			  <div class="fixed-header">
			      <!--logo-->
			       <div class="logo">
                      <a href="index.html"><h1><span>La Loma </span></h1></a>
					  <p>Donde La vida se Vive</p>
				   </div>
					<!--//logo-->
					<div class="top-menu">
							<span class="menu"> </span>
							<nav class="link-effect-4" id="link-effect-4">
                              <ul>
								 <li class="active"><a data-hover="Home" href="{{url('/')}}">Home</a></li>
							

                                 
                                      @if (Route::has('login'))
                    @auth
                        <li><a data-hover="Dashboard" href="{{url('/home')}}" class="">Dashboard</a></li>

                    @else
                                            <li><a data-hover="Entrar" href="{{route('login')}}" class="">Entrar</a></li>


                        @if (Route::has('register'))
                        <li><a data-hover="Registrar" href="{{route('register')}}" class="">Registrar</a></li>
                        @endif
                    @endauth
            @endif



								</ul>
							</nav>
							</div>
							<!-- script-for-menu -->
								<script>
									$("span.menu").click(function(){
										$(".top-menu ul").slideToggle("slow" , function(){
										});
									});
								</script>
								<!-- script-for-menu -->

				 <div class="clearfix"></div>
					<script>
				$(document).ready(function() {
					 var navoffeset=$(".header-bottom").offset().top;
					 $(window).scroll(function(){
						var scrollpos=$(window).scrollTop(); 
						if(scrollpos >=navoffeset){
							$(".header-bottom").addClass("fixed");
						}else{
							$(".header-bottom").removeClass("fixed");
						}
					 });
					 
				});
				</script>
			 </div>
		</div>
	</div>



@yield('content')








<!-- //service-type-grid -->


<!--footer-->
		<div class="footer text-center">
						<div class="container">
							 <!--logo-->
			       <div class="logo navbar-brand">
                      <a href="index.html"><h1><span>La Loma</span></h1></a>
					  <p>Donde La vida se Vive</p>
				   </div>
					<!--//logo-->
								<a href="single.html" class="flag_tag2">Siguenos</a>
									<ul class="social wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
										<li><a href="https://www.facebook.com/LaLomaMexico" class="btn btn-primary btn-xl"> Facebook</a></li>
										<li><a href="https://www.facebook.com/LaLomaMexico" class="btn btn-danger btn-xl"> instagram</a></li>
										 <div class="clearfix"></div>
									</ul>
									<p class="copy-right wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">&copy; 2020 LaLoma, Mexico All rights reserved 
										</p>

					 </div>
	     </div>
		<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
								<!--end-smooth-scrolling-->
		<a href="#home" id="toTop" class="scroll" style="display: block;"> 
			<span id="toTopHover" style="opacity: 1;"> </span></a>
@include('front.alert')

        <script >
          toastr["error"](message+"</small> ", "check the follows errors")
/*Swal.fire({
  type: 'error',
  title: 'Oops... Please check the errors',
  html: message
})

*/
    </script>
</body>
</html>