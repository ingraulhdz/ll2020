<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html"><img src="assets/img/logo-2.svg" width="120px"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">La Loma</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#proyectos">Projects</a></li>
          <li><a class="nav-link scrollto" href="#mensualidades">Plans</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

          @if (Route::has('login'))
                                @auth
                                

                                    <li><a class="nav-link scrollto " href="{{ url('/home') }}">Dashboard</a></li>


                                @else
                                  
                                <li><a class="nav-link scrollto " href="{{ route('login') }}">Log in</a></li>
                                


                        @endauth
                        @endif







          <li><a class="nav-link scrollto " href="#">




          <form action="https://www.paypal.com/donate" method="post" target="_top">
      <input type="hidden" name="hosted_button_id" value="ZK6LQ6HWURELW" />
      <button class="btn btn-primary btn-md" type="submit"><i class="bi bi-heart-fill"></i> Donate now </button>
    </form>


          </a></li>

          <li><a class="nav-link scrollto " href="/en"><img src="assets/img/usa.jpg" width="16px" height="16px"> EN</a></li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->




    </div>
  </header>