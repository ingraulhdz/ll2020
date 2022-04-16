
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Acerca de</a></li>
          <li><a class="nav-link scrollto" href="#services">La Loma</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Galeria</a></li>
          <li><a class="nav-link scrollto" href="#proyectos">Proyectos</a></li>
          <li><a class="nav-link scrollto" href="#mensualidades">Mensualidades</a></li>
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
                                  
                                    <li><a class="nav-link scrollto " href="{{ route('login') }}">Iniciar Sesion</a></li>


                        @endauth
                        @endif







          <li><a class="nav-link scrollto " href="#">




          <form action="https://www.paypal.com/donate" method="post" target="_top">
      <input type="hidden" name="hosted_button_id" value="ZK6LQ6HWURELW" />
      <button class="btn btn-primary btn-md" type="submit"><i class="bi bi-heart-fill"></i> Donar </button>
    </form>


          </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      