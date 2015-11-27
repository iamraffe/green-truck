@extends('app')

@section('content')
    <header class="fullscreen-bg">
        <h2 class="wow fadeIn">Somos el resultado de la aplicación de tecnología de vanguardia a la gestión de residuos</h2>
        <div class="overlay"></div>
        <video loop muted autoplay class="fullscreen-bg__video">
            <source src="/img/54105124.mp4" type="video/mp4">
        </video>
    </header>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#"><h1 style="display: none;">Green Truck</h1><img src="/img/green-truck-logo-with-text.png" alt="Green Truck Logo" style="height: 45px;"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="#quienes-somos">¿Quiénes somos?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#servicios">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#experiencia">Experiencia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Quienes Somos Section -->
    <section id="quienes-somos" class="bg-border-green">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading wow fadeInDown">¿Quiénes somos?</h2>
                    <h3 class="section-subheading text-muted">Somos el resultado de la aplicación de tecnología de vanguardia a la gestión de residuos, principalmente de la actividad terciaria.</h3>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-12 text-center">
                  <div class="col-sm-3 wow fadeInUp" data-wow-delay="0.5s">
                    <span class="fa-stack fa-4x fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
                    </span>
                    <p>Desde nuestro origen, en Green Truck estamos comprometidos con el respeto al medio ambiente y  hemos creado un riguroso proceso de retirada y transporte de residuos con equipos humanos expertos.</p>
                  </div>
                  <div class="col-sm-3 wow fadeInUp" data-wow-delay="0.6s">
                    <span class="fa-stack fa-4x fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                    </span>
                    <p>Nuestra actividad se centra en el proceso de recogida, selección y trituración de todo tipo de residuos y restos de madera, para que posteriormente puedan ser reutilizados.</p>
                  </div>
                  <div class="col-sm-3 wow fadeInUp" data-wow-delay="0.7s">
                    <span class="fa-stack fa-4x fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-trash fa-stack-1x fa-inverse"></i>
                    </span>
                    <p>En Greentruck contamos con la maquinaria necesaria para la recogida de tipo de restos y materiales sobrantes de las empresas. Nuestra dilatada experiencia en el sector nos avalan.</p>
                  </div>
                    <div class="col-sm-3 wow fadeInUp" data-wow-delay="0.8s">
                    <span class="fa-stack fa-4x fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-truck fa-stack-1x fa-inverse"></i>
                    </span>
                    <p>Traslado eficiente de oficinas y naves industriales. Nos ocupamos de la mudanza del mobiliario, el traslado de archivos y el movimiento de equipos informáticos.</p>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <aside id="quienes-somos-aside">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 col-md-offset-2">
                    <h2><span class="light wow slideInRight">Nuestra actividad se centra en el </span><br><span class="wow slideInUp">proceso de recogida, selección, traslado y mudanza o trituración de todo tipo de residuos y restos de madera</span><span class="light text-right wow slideInLeft"><br>para que posteriormente puedan ser reutilizados</span></h2>
                </div>
            </div>
        </div>
    </aside>
    <!-- Servicios Section -->
    <section id="servicios" class="bg-light-gray bg-border-green">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading wow fadeInDown">Servicios</h2>
                    <h3 class="section-subheading text-muted">Con el correcto tratamiento y reciclaje de residuos conseguimos minimizar la deforestación de los bosques, ahorrar agua y evitar la contaminación.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="well well-lg">
                        <p>Desmontaje de muebles de oficinas, locales comerciales o naves industriales. Retiramos todo tipo de mobiliario, estanterías, mamparas o estructuras metálicas y nos comprometemos a guardar absoluta confidencialidad.  </p>
                        <span class="fa fa-leaf"></span>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="well well-lg">
                        <p>Transporte y gestión de los residuos obtenidos en el vaciado de oficinas, locales comerciales o naves industriales. Trasladamos todos los residuos hasta los diferentes puntos de reciclaje. </p>
                        <span class="fa fa-truck"></span>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="well well-lg">
                        <p>Reciclaje de materiales. Clasificamos los residuos y nos responsabilizamos de su correcto tratamiento y reciclaje. Ofrecemos las máximas garantías de calidad para favorecer la sostenibilidad del medio ambiente.</p>
                        <span class="fa fa-recycle"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <aside id="servicios-aside">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 col-md-offset-2">
                    <h2><span class="light wow slideInRight">Estamos comprometidos con el medio ambiente </span><br><span class="wow slideInUp">hemos creado un riguroso proceso de retirada y transporte de residuos</span><span class="light text-right wow slideInLeft"><br>con equipos humanos expertos</span></h2>
                </div>
            </div>
        </div>
    </aside>
    <!-- Experiencia Section -->
    <section id="experiencia" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading wow fadeInDown">Experiencia</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div id="owl-demo">
                  <div class="item"><img src="http://greentruck.es/images/client1.png" alt="Owl Image"></div>
                  <div class="item"><img src="http://greentruck.es/images/client4.png" alt="Owl Image"></div>
                  <div class="item"><img src="http://greentruck.es/images/client2.png" alt="Owl Image"></div>
                  <div class="item"><img src="http://greentruck.es/images/client3.png" alt="Owl Image"></div>
                </div>               
            </div>
        </div>
    </section>
    <!-- Contacto Section -->
    <section id="contacto" class="bg-border-green">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading wow fadeInDown">Contacto</h2>
                    <h3 class="section-subheading text-muted"><span class="fa fa-phone"> 660208857</span><br><span class="fa fa-envelope"> perezcamacho@greentruck.es</span></h3>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.25s">
                <div class="col-lg-12 wow bounce" data-wow-delay="1s">
                    <form name="sentMessage" class="contact" id="contactForm" novalidate>
                        <input type="hidden" id="url">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre completo *" id="name" required data-validation-required-message="Por favor, introduzca su nombre completo.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo electrónico *" id="email" required data-validation-required-message="Por favor, introduzca un correo electrónico.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Teléfono *" id="phone" required data-validation-required-message="Por favor, introduzca un número telefónico.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Comentarios *" id="message" required data-validation-required-message="Por favor, introduzca sus comentarios."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary btn-xl">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> 
    <aside id="map-canvas">
        <iframe style="" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJuUDnsr-KQQ0RsmKMmvgK3-k&key=AIzaSyAlnKDtzJoIfHbA99KRyXgrxZc134M53wk"></iframe>
    </aside>
@endsection

@section('scripts')
@endsection