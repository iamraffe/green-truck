<!DOCTYPE html>
<html>
    <head>
        <title>Green Truck | Expertos en transporte ecológico</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="{{ elixir('css/libs.css') }}">
        <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    </head>
    <body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h1 style="display: none;">Green Truck</h1><img src="/img/green-truck-logo-low.png" alt="Green Truck Logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">¿Quiénes somos?</a>
                    </li>
                    <li>
                        <a href="#">Servicios</a>
                    </li>
                    <li>
                        <a href="#">Experiencia</a>
                    </li>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">

{{--         <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol> --}}

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">

                <!-- /.container -->
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/green-city.svg');">
                    <div class="overlay"></div>
                     <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <img src="/img/green-truck-logo-low.png" alt="Green Truck Logo">
                            </div>
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container -->
                </div >
                <div class="carousel-caption">
                    <h2>Somos el resultado de la aplicación de tecnología de vanguardia a la gestión de residuos</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/green-road.svg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
{{--                                 <h1>Green Truck</h1>
                                <h2>Nos centramos en el proceso de recogida, selección y trituración de todo tipo de residuos y restos de madera, para que posteriormente puedan ser reutilizados.</h2> --}}
                            </div>
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container -->
                </div>
                <div class="carousel-caption">
                    <h2>Más de 25 años de experiencia en el sector nos avalan</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
{{--                                 <h1>Green Truck</h1> --}}
                                <h2>Nos centramos en el proceso de recogida, selección y trituración de todo tipo de residuos y restos de madera, para que posteriormente puedan ser reutilizados.</h2>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container -->
                </div>
{{--                 <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div> --}}
            </div>
        </div>

{{--         <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a> --}}
    </header>

    <!-- Organizacion Section -->
    <section id="organizacion" class="bg-light-gray">
{{--         <img src="img/witch.svg" class="img-responsive img-centered witch" alt="Bruja"> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">¿Quiénes somos?</h2>
                    <h3 class="section-subheading text-muted">Somos el resultado de la aplicación de tecnología de vanguardia a la gestión de residuos, principalmente de la actividad terciaria.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                  <p>Green Truck nace en el año 1986. Estamos comprometidos con el respeto al medio ambiente y  hemos creado un riguroso proceso de retirada y transporte de residuos con equipos humanos expertos.</p>
                  <p>Nuestra actividad se centra en el proceso de recogida, selección y trituración de todo tipo de residuos y restos de madera, para que posteriormente puedan ser reutilizados.</p>
                  <p>En Greentruck contamos con la maquinaria necesaria para la recogida de tipo de restos y materiales sobrantes de las empresas. Más de 25 años de experiencia en el sector nos avalan.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="js/libs.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            pause: false,
            interval: 10000 //changes the speed
        })
    </script>
    </body>
</html>
