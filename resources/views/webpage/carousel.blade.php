
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                
                   <img class="bd-placeholder-img slide-effect bg-slide" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" 
                        src="front/images/slide1.jpg" alt="First slide">

                    <div class="container">
                        <div class="carousel-caption text-start ">
                            <h1>Santa Maria La Loma, Mexico</h1>
                            <p>Pueblo tranquilo en el Estado de Mexico</p>
                            <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
                        </div>
                    </div>

                </div>

                <div class="carousel-item">

                          <img class="bd-placeholder-img bg-slide" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" 
                        src="front/images/slide2.jpg" alt="First slide">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Lugar para descansar y relajarte.</h1>
                            <!-- <p>alejado de la.</p> -->
                            <!-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
                        </div>
                    </div>

                </div>

                <div class="carousel-item">
                          <img class="bd-placeholder-img bg-slide" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" 
                        src="front/images/slide3.jpg" alt="First slide">
                    <div class="container">

                        <div class="carousel-caption text-end">
                            <h1>Unete a la gran lista de donantes</h1>
                            <p>Los beneficios que se recaudan son utilizados para mantenimiento del pueblo</p>
                            <p><a class="btn btn-lg btn-success" href="{{route('register')}}">Dona Ahora!</a></p>
                        </div>

                    </div>

                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            
        </div>