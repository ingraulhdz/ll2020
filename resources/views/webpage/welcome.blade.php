<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>La Loma Mexico</title>
    <!-- <script type="applisalonion/x-javascript">
 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
 function hideURLbar(){ window.scrollTo(0,1); }
 </script> -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="front/css/iconeffects.css" rel='stylesheet' type='text/css' />
    <link href="front/css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="front/css/swipebox.css">

    <script src="front/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="front/js/move-top.js"></script>
    <script type="text/javascript" src="front/js/easing.js"></script>



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
</head>

<body>
    @include('webpage.header')

    <main>
        @include('webpage.carousel')

        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            @include('webpage.bienvenido')

            <hr class="featurette-divider">

            @include('webpage.acerca')

            <hr class="featurette-divider">

            @include('webpage.actividades')


            <hr class="featurette-divider">

            @include('webpage.proyectos')

            <hr class="featurette-divider">

            @include('webpage.testimonios')

            <hr class="featurette-divider">

            @include('webpage.galeria')

            <hr class="featurette-divider">

            @include('webpage.row')

            <hr class="featurette-divider">

            @include('webpage.contacto')

            <hr class="featurette-divider">

             @include('webpage.map')
            
            <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->
        </div>

    </main>

    @include('webpage.footer')

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });

    </script>
    <!-- swipe box js -->
    <script src="front/js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $(".swipebox").swipebox();
        });

    </script>
    <!-- //swipe box js -->
    <!--animate-->
    <link href="front/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="front/js/wow.min.js"></script>
    <script>
        new WOW().init();

    </script>

</body>

</html>
