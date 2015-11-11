<!DOCTYPE html>
<html>
    <head>
        <title>GREEN TRUCK | Expertos en transporte ecológico</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Estamos comprometidos con el respeto al medio ambiente y hemos creado un riguroso proceso de retirada y transporte de residuos con equipos humanos expertos. Más de 25 años de experiencia en el sector nos avalan.">
        <meta name="author" content="">
        <link rel="stylesheet" href="{{ elixir('css/libs.css') }}">
        <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    @yield('content')
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6">
                    <span class="copyright">&copy; GREEN TRUCK, 2015</span>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline quicklinks">
                        <li><a href="{{ url('/terms-and-conditions') }}">Condiciones de uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/libs.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
        /* affix the navbar after scroll below header */
        $('nav.navbar').affix({
              offset: {
                top: $('header').height()-$('nav.navbar').height()
              }
        }); 

        /* highlight the top nav as scrolling occurs */
        $('body').scrollspy({ target: 'nav.navbar' });

        wow = new WOW(
              {
              boxClass:     'wow',      // default
              animateClass: 'animated', // default
              offset:       0,          // default
              mobile:       true,       // default
              live:         true        // default
            }
        )
        wow.init();

    </script>
    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
    <script type="text/javascript">
        window.cookieconsent_options = {"message":"Utilizamos cookies propias para ofrecerte una mejor experiencia y servicio. Si continúas navegando, consideramos que aceptas su uso. Puedes obtener más información en nuestra","dismiss":"Acepto","learnMore":"Politica de Cookies","link":"http://www.greentruck.es/terms-and-conditions/","theme":"light-bottom"};
    </script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-69959050-1', 'auto');
      ga('send', 'pageview');

    </script>
    </body>
</html>
