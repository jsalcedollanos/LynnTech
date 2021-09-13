<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Registrate | Lynda Polo</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
 <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


   <!-- Start header section -->
   <header id="aa-header">
    <div class="aa-header-oferta">
    <li><a href="">Por compras superiores a $250.000 envios gratis, aplica solo para Colombia</a></li>
    </div>
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="img/flag/english.jpg" alt="english flag">Cambiar Idioma
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="img/flag/french.jpg" alt=""></a></li>
                      <li><a href="#"><img src="img/flag/english.jpg" alt="">ENGLISH</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-usd"></i>Convertir Moneda
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-euro"></i>COP (Pesos Colombianos)</a></li>
                      <li><a href="#"><i class="fa fa-jpy"></i>USD (Dolares)</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>+57 3013163026</p>
                </div>
                <!-- / cellphone -->
              </div>

              <!-- / header con validacion de session + funciones addicionales -->
          @if (auth()->check()) 
              @if(Auth::user()->role =="user")
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
               
                  <li><a>Hola, {{Auth::user()->name}} un gusto saludarte.</a></li>            
                  <li class="hidden-xs"><a href="#">Lista de deseo</a></li>
                  <li class="hidden-xs"><a href="{{ route('carrito.index') }}">Mi Carrito</a></li>
                  <li><a href="" data-toggle="modal" data-target="#sesion-modal">Salir</a></li>
                </ul>
              </div>
              @endif
              @if(Auth::user()->role =="admin")
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a>Hola, {{Auth::user()->name}} un gusto saludarte.</a></li>
                  <li class="hidden-xs"><a href="{{route('admin.index')}}">Administrar mi Pagina</a></li>            
                  <li class="hidden-xs"><a href="#">Lista de deseo</a></li>
                  <li class="hidden-xs"><a href="{{ route('carrito.index') }}">Mi Carrito</a></li>
                  <li><a href="" data-toggle="modal" data-target="#sesion-modal">Salir</a></li>
                </ul>
              </div>
              @endif 
              @else
            <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="{{ route('register') }}">Aun no te has registrado? Que esperas!</a></li>
                <li><a href="{{ route('register') }}">Registrarme</a></li>
                  <!-- <li><a class="hidden-xs"><a href="{{ route('login') }}">Login</a></li> -->
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                  <li class="hidden-xs"><a href="#">Lista de deseo</a></li>
                  <li class="hidden-xs"><a href="{{ route('login') }}">Mi Carrito</a></li>
                </ul>
              </div>
            </div>
          @endif
          </div>
        </div>
      </div>
    </div>
    <!-- / header final de este bloque  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.html">
                  
            <!--img based logo -->
               <a href="index.html"><img class="logo" src="img/logolynda.png" alt="logo img"></a> 
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">Carrito de Compra</span>
                  <span class="aa-cart-notify">0</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                </div>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Ejemplo 'Vestido de lujo' ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="{{ route('tienda.index') }}">Todo los productos</a></li>
              <li><a>Vestidos <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="{{ route('tienda.index') }}?busqueda=Vestidos de lujo">Vestido de lujo</a></li>
                  <li><a href="{{ route('tienda.index') }}?busqueda=Vestido Sencillo">Vestido Sencillo</a></li>
                  </li>
                </ul>
              </li>
              <li><a>Batolas <span class="caret"></span></a>
              <ul class="dropdown-menu">                
                  <li><a href="{{ route('tienda.index') }}?busqueda=Batola lisa">Batola lisa</a></li>
                  <li><a href="{{ route('tienda.index') }}?busqueda=Batola Campana">Batola Campana</a></li>
                  </li>
                </ul>
              </li>
              <li><a href="{{ route('tienda.index') }}?busqueda=Conjunto">Conjuntos</a></li>
              <li><a href="{{ route('tienda.index') }}?busqueda=Mi muñeca y Yo">Mi muñeca y Yo</a></li>
              <li><a href="{{ route('tienda.index') }}?busqueda=Tutu">Tutus</a></li>
              <li><a href="{{ route('tienda.index') }}?busqueda=Accesorios">Accesorios</a></li>
              <li><a href="{{ route('tienda.index') }}?busqueda=Lenceria Infantil">Lenceria Infantil</a></li>
              <li><a href="{{ route('tienda.index') }}?busqueda=Calzado">Calzado</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Account Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Account</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Login</h4>

				<!-- FORMULARIO DE LOGIN -->
          <form class="aa-login-form" method="POST" action="{{ route('login')}}">
          @csrf
               <!--  <x-jet-validation-errors class="mb-4" /> -->
                
                <label for="">Correo<span>*</span></label>
                <input type="email" class="form-control" name="email" placeholder="Ingrese su correo">
                <label for="">Contraseña<span>*</span></label>
                <input type="password" name="password"  class="form-control" placeholder="Contraseña">
                <button type="submit" class="aa-browse-btn">Login</button>
                <label class="rememberme" for="remembersme"><input type="checkbox" id="rememberme"> Recuerdame <span>!</span> </label>
                <p class="aa-lost-password"><a href="#">He olvidado mi contraseña?</a></p>
          </form>
                </div>
              </div>
				<!-- FIN DE FORMULARIO DE LOGIN -->

			  <!-- FORMULARIO DE REGISTRO -->
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Registrate</h4>
                 <form action="{{ route('register') }}" method="POST" class="aa-login-form">
				        	@csrf
                    <label for="">Usuario<span>*</span></label>
                    <input type="text" class="form-control" name="name" placeholder="Ejemplo 'Juan'" required>
                    <label for="">Correo<span>*</span></label>
                    <input type="email"  class="form-control" name="email" placeholder="Ingresa tu correo" required>
                    <label for="">Contraseña<span>*</span></label>
                    <input type="password" id="pass1" name="password" class="form-control" placeholder="Ingresa contraseña" required>
                    <input type="password" id="pass2" name ="password_confirmation" class="form-control" placeholder="Repite contraseña" required>
                    <button type="submit" onClick="errorR()" id="btn-registrar"  class="aa-browse-btn">Registrate</button>  
                     
                    
					<!-- Validacion  -->
			@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
			<!-- Fin de la validacion -->
                  </form>
				  <!-- FIN DE FORMULARIO DE REGISTRO -->
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->


  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3> Subscribete Ya! </h3>
            <p>Te enviaremos novedades de mis productos para que no te pierdas de maravillasas ofertas</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Ingresa tu Correo">
              <input type="submit" value="Subscribete">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Menu Principal</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Organiza tu pedido</a></li>
                    <li><a href="#">Todos los productos</a></li>
                    <li><a href="#">Soporte de pago</a></li>
                    <li><a href="#">Contactanos</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Productos</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Descuentos</a></li>
                      <li><a href="#">Cotizacion</a></li>
                      <li><a href="#">Servicios</a></li>
                      <li><a href="#">Temporadas</a></li>
                      <li><a href="#">Ofertas Especiales</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Desarrolla tu tienda virtual</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Createch</a></li>
                      <li><a href="#">createch@outlook.es</a></li>
                      <li><a href="#">Contactame</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contactame</h3>
                    <address>
                      <p> Linea de venta</p>
                      <p><span class="fa fa-phone"></span>+57 3013163026</p>
                      <p><span class="fa fa-envelope"></span>lyndapolo.co@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Desarrollado por: <a href="http://www.markups.io/">Createch</a></p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  @include('error.modalErrorRegistro')

  <!-- Login Modal -->  
  @include('login.index')
  <!-- Fin de Modal de login -->
  


   <!-- Validacion REGISTRO  -->
   <script src="js/validacionRegistro.js"></script>
    
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 
  

  </body>
</html>