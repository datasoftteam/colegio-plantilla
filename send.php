<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> I.E.P. COLEGIO | CONTACTO </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Colegio Particular Sabio Alfred Binet. Formando futuros profesionales" />
    <meta name="keywords" content="Arequipa, Colegio Particular Sabio Alfred Binet, Sabio Alfred Bine, Colegio" />


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Pricing -->
    <link rel="stylesheet" href="css/pricing.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">



    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


    <link rel="stylesheet" href="css/styleNew.css">
    <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
    <!--<link href="assetsPort/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->


</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <!--<div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-right">
                            <p class="site">www.yourdomainname.com</p>
                            <p class="num">Call: +01 123 456 7890</p>
                            <ul class="fh5co-social">
                                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble2"></i></a></li>
                                <li><a href="#"><i class="icon-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2">
                            <!-- <div id="fh5co-logo"><a href="index.html"><i class="icon-study"></i>I.E.P. SABIO ALFRED BINET<span>.</span></a></div> -->
                            <div id="fh5co-logoImg">
                                <a href="index.html"><img src="images/logo-inst-colegio.png" alt="logo-inst-alfred-binet" height="90px"> </a>
                                <!-- class="img-fluid" height="105px" -->
                            </div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li><a href="index.html">Inicio</a></li>
                                <li><a href="about.html">Nosotros</a></li>
                                <li><a href="gallery.html">Galería</a></li>
                                <li class="has-dropdown">
                                    <a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="subMenuUno.html">SubMenuUno</a></li>
                                        <li><a href="subMenuDos.html">SubMenuDos</a></li>
                                        <li><a href="#">Branding</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="contact.html">Contacto</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
        <!-- END nav -->

        <aside id="fh5co-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(images/contacto-inst.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <h1 class="heading-section">Contáctanos</h1>
                                        <!-- <h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <?php
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'Consultas I.E.P. Colegio - Mensajes';
        $to =  'contacto@colegio.edu.pe ';  //$to =  'contacto@alfredbinet.edu.pe '; 
        $subject = 'Consultas Online - ' . $name . ' ' . $lastname;

        function get_client_ip_env()
        {
            $ipaddress = '';
            if (getenv('HTTP_CLIENT_IP'))
                $ipaddress = getenv('HTTP_CLIENT_IP');
            else if (getenv('HTTP_X_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            else if (getenv('HTTP_X_FORWARDED'))
                $ipaddress = getenv('HTTP_X_FORWARDED');
            else if (getenv('HTTP_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
            else if (getenv('HTTP_FORWARDED'))
                $ipaddress = getenv('HTTP_FORWARDED');
            else if (getenv('REMOTE_ADDR'))
                $ipaddress = getenv('REMOTE_ADDR');
            else
                $ipaddress = 'UNKNOWN';

            return $ipaddress;
        }

        function get_client_ip_server()
        {
            $ipaddress = '';
            if ($_SERVER['HTTP_CLIENT_IP'])
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            else if ($_SERVER['HTTP_X_FORWARDED_FOR'])
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            else if ($_SERVER['HTTP_X_FORWARDED'])
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            else if ($_SERVER['HTTP_FORWARDED_FOR'])
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            else if ($_SERVER['HTTP_FORWARDED'])
                $ipaddress = $_SERVER['HTTP_FORWARDED'];
            else if ($_SERVER['REMOTE_ADDR'])
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            else
                $ipaddress = 'UNKNOWN';

            return $ipaddress;
        }

        // Get the client ip address
        $ipaddress = $_SERVER['REMOTE_ADDR'];

        $body = "Nombre: $name   \n
    Apellido: $lastname \n
    Telefono: $phone \n
    E-Mail: $email \n
    Mensaje: \n $message \n 
    ipaddress: $ipaddress";

        if ($_POST['enviar']) {

            if (mail($to, $subject, $body, $from)) {
                echo '
        <br/>

 <center>  <img src="mensajeColegio.gif" width="45%"></center>
 
      <br/> ';
            } else {
                echo '<p>Algo salio mal intentelo de nuevo!</p>';
            }
        }
        ?>

        <?php

        // Function to get the client ip address

        // Function to get the client ip address

        //echo 'Your IP address (using $_SERVER[\'REMOTE_ADDR\']) is ' . $ipaddress . '<br />';
        //echo 'Your IP address (using get_client_ip_env function) is ' . get_client_ip_env() . '<br />';
        //echo 'Your IP address (using get_client_ip_server function) is ' . get_client_ip_server() . '<br />';
        ?>
        <!-- </div>-->
        <div class="clear"></div>
        <!--	<footer id="footer">
		<div id="footer-inside">
			
					</div>
	</footer>
	
	
					


	
    <!-- ======= Footer ======= -->

        <!-- End Footer -->

    </div>





</body>

</html>






<!-- Quantcast Tag -->
<script type="text/javascript">
    var _qevents = _qevents || [];
    (function() {
        var elem = document.createElement('script');
        elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
        elem.async = true;
        elem.type = "text/javascript";
        var scpt = document.getElementsByTagName('script')[0];
        scpt.parentNode.insertBefore(elem, scpt);
    })();
    _qevents.push({
        qacct: "p-dgZ4_09vZKC4w"
    });
</script>
<noscript>
    <div style="display:none;">
        <img src="//pixel.quantserve.com/pixel/p-dgZ4_09vZKC4w.gif" border="0" height="1" width="1" alt="Quantcast" />
    </div>
</noscript>
<!-- End Quantcast tag -->
<script>
    jQuery('#article_link').on('click', function() {
        ga('send', 'event', 'article', 'http://www.virendrachandak.com/techtalk/getting-real-client-ip-address-in-php-2/', 'go-to-article', 1);
        _gaq.push(['_trackEvent', 'article', 'http://www.virendrachandak.com/techtalk/getting-real-client-ip-address-in-php-2/', 'go-to-article', 1, true]);
    });
    jQuery('#source_link').on('click', function() {
        ga('send', 'event', 'download', 'http://www.virendrachandak.com/demos/getting-real-client-ip-address-in-php.zip', 'download-source', 1);
        _gaq.push(['_trackEvent', 'download', 'http://www.virendrachandak.com/demos/getting-real-client-ip-address-in-php.zip', 'download-source', 1, true]);
    });
</script>
<!-- Footer -->







<!-- ------------------------------------------------------------- -->
<!-- ------------------------------------------------------------- -->

<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/footer-slider-inst.jpg);">
    <!-- cta-bg.jpg   -->
    <div class="overlay"></div>
    <div class="container">
        <div class="row margin15">
            <!-- row-pb-md -->

            <div class="col-md-6 col-sm-12 ">
                <div class="row ">
                    <div class="contacto">
                        <div class="titulo ">
                            <h4> Institución Educativa &nbsp;&nbsp; Nombre_Institución<br><span style="font-size:16px ">(Informes)</span></h4>
                        </div>
                        <div class="contenido ">
                            <!--<div class="telefono "><i class="icofont-phone icono "></i> (054)782942 </div>-->
                            <div class="telefono "> <a href="https://wa.me/+51 111 111 111"><i class="icofont-whatsapp icono "></i></a> <a href="https://wa.me/+51 111 111 111"> +51 111 111 111 </a> </div>
                            <div class="email "> <i class="icofont-envelope icono "></i> contacto@gmail.com </div>
                            <div class="direccion "> <i class="icofont-google-map icono "></i> Dirección exacta con numeros - Distrito. Departamento, Perú </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-12 ">
            </div>


            <div class="col-md-4 col-sm-12 ">
                <div class="contact ">
                    <h3> Perfiles Sociales </h3>
                    <div class="social-links ">
                        <a href="#" target="_blank " class="facebook "><i class="icofont-facebook "></i></a>
                        <a href="# " target="_blank " class="linkedin "><i class="icofont-youtube "></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row copyright">
            <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; 2020 - 2021 I.E. Nombre_Institución - Todos los Derechos Reservados </small>
                    <small class="block">Diseñado y Desarrollado por <a href="https://datasoftteam.com" target="_blank"> dataSoftTEAM </a> </small>
                </p>
            </div>
        </div>

    </div>
</footer>


<!-- ------------------------------------------------------------- -->
<!-- ------------------------------------------------------------- -->




</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Count Down -->
<script src="js/simplyCountdown.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

</body>

</html>