
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" >
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Carousel</a> -->
                <!--logo-->
                <div class="loga navbar-brand">
                    <a href="index.html">
                        <h1>L<span>a Loma</span></h1>
                    </a>
                    <p>Mexico</p>
                </div>
                <!--//logo-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" data-hover="Acerca" href="#about" class="scroll">Acerca</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" data-hover="Actividades" href="#activities"
                                class="scroll">Actividades</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-hover="Proyectos" href="#projects" class="scroll">Proyectos</a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link" data-hover="Galeria" href="#gallery" class="scroll">Galeria</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-hover="Contacto" href="#contact" class="scroll">Contacto</a>
                        </li>



                    </ul>
                    <div class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">


                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link" data-hover="Proyectos" href="{{ url('/home') }}">Dashboard</a>
                                    </li>

                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" data-hover="Entrar" href="{{ route('login') }}">Entrar</a>
                                    </li>


                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" data-hover="Registrar"
                                                href="{{ route('register') }}">Registrar</a>
                                        </li>
                            </ul>
                            @endif
                        @endauth
                        @endif


                    </div>
                </div>
            </div>
        </nav>
    </header>