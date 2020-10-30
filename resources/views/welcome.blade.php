<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com -->
    <title>IDE VS EDITORES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }

        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }

        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }

        .jumbotron {
            background-position: center;
            background-size: cover;
            background-image: url("https://blog.mailup.es/wp-content/uploads/2017/12/codice-05-cover.jpg");
            padding: 250px;
            margin-bottom: 0px;
            color: white;
        }

        .container-fluid {
            padding: 60px 50px;
        }

        .bg-grey {
            background-color: #f6f6f6;
        }

        .logo-small {
            color: #f4511e;
            font-size: 50px;
        }

        .logo {
            color: #f4511e;
            font-size: 200px;
        }

        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }

        .carousel-control.right,
        .carousel-control.left {
            background-image: none;
            color: #f4511e;
        }

        .carousel-indicators li {
            border-color: #f4511e;
        }

        .carousel-indicators li.active {
            background-color: #f4511e;
        }

        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }

        .item span {
            font-style: normal;
        }

        .panel {
            border: 1px solid blak;
            border-radius: 0 !important;
            transition: box-shadow 0.5s;
        }

        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
        }

        .panel-footer .btn:hover {
            border: 1px solid #f4511e;
            background-color: #fff !important;
            color: #f4511e;
        }

        .panel-heading {
            color: #fff !important;
            background-color: #303030 !important;
            padding: 0px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .panel-footer {
            background-color: white !important;
        }

        .panel-footer h3 {
            font-size: 32px;
        }

        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }

        .panel-footer .btn {
            margin: 15px 0;
            background-color: #f4511e;
            color: #fff;
        }

        .navbar {
            margin-bottom: 0;
            background-color: black;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }

        .navbar li a,
        .navbar .navbar-brand {
            color: #fff !important;
        }

        .navbar-nav li a:hover,
        .navbar-nav li.active a {
            color: #f4511e !important;
            background-color: #fff !important;
        }

        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }

        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #f4511e;
        }

        .slideanim {
            visibility: hidden;
        }

        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }

        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }

            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }

        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }

            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }

            .jumbotron {
                padding: 130px;
            }
        }

        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }

            .jumbotron {
                padding: 70px;
            }
        }
    </style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage">HOME</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">IDE de desarrollo</a></li>
                    <li><a href="#services">Editor de texto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1>¿Qué son los IDEs y los editores de texto?</h1>
        <p>__________________________________________________</p>

    </div>

    <!-- Container (Que es ide Section) -->
    <div id="about" class="container-fluid bg-grey">
        <div class="row">
            <div class="col-sm-8">
                <h2>Qué es un IDE</h2>

                <h4>
                    Un IDE es un entorno de desarrollo integrado que te permite maximizar tu productividad como programador.
                    En pocas palabras, un IDE es un editor de texto con potentes funciones de gestión de proyectos que incluyen herramientas como: automatización de la compilación, un depurador y un intérprete.
                    <br> Algunos IDEs también incluyen navegadores de clases, objetos y diagramas de jerarquía de clases para cuando haces programación orientada a objetos..
                </h4>

                <p>
                    Algunas de las características típicas de los IDE incluyen herramientas de depuración, llenado automático de ciertos elementos de código y la capacidad de detectar errores a medida que codeas.
                    Para proyectos que abarcan varios archivos, el IDE examina los archivos y ayuda a mantener la coherencia en todo el proyecto. Los IDE pueden facilitar las pruebas de código e identificar partes de tu código para que puedas refactorizar (“pimpear” tu código para que sea elegante y sencillo de leer).
                </p>
                Ojo el IDE no hace magia, es fundamental que tu mantengas un orden e integres un sistema de control de versiones. Esto es fundamental para poder tener éxito como programador..
            </div>
            <div class="col-sm-4">
                <br><br><br><br><br> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSvTKaxdStpx1LuCK_A3X05sq3UNSJ4nHDYrg&usqp=CAU" width="100%">
            </div>
        </div>
    </div>

    <!-- Container (Pricing Section) -->
    <div id="pricing" class="container-fluid">
        <div class="text-center">
            <h2>Los principales IDEs de desarrollo son:</h2>
        </div>
        <div class="row slideanim">
            <div class="col-xs-12">
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Basic</h1>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <img src="https://blog.mailup.es/wp-content/uploads/2017/12/codice-05-cover.jpg" style="width: 100%;">
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreolore magna aliqua. Ut enim ad minim veniam

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Basic</h1>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <img src="https://blog.mailup.es/wp-content/uploads/2017/12/codice-05-cover.jpg" style="width: 100%;">
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreolore magna aliqua. Ut enim ad minim veniam
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Basic</h1>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <img src="https://blog.mailup.es/wp-content/uploads/2017/12/codice-05-cover.jpg" style="width: 100%;">
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreolore magna aliqua. Ut enim ad minim veniam
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Basic</h1>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <img src="https://blog.mailup.es/wp-content/uploads/2017/12/codice-05-cover.jpg" style="width: 100%;">
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreolore magna aliqua. Ut enim ad minim veniam
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Basic</h1>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <img src="https://blog.mailup.es/wp-content/uploads/2017/12/codice-05-cover.jpg" style="width: 100%;">
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreolore magna aliqua. Ut enim ad minim veniam
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>

    <!-- Container (Que es editor de texto Section) -->
    <div id="services" class="container-fluid bg-grey">
        <div class="row">
            <div class="col-sm-4">
                <br><br> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSvTKaxdStpx1LuCK_A3X05sq3UNSJ4nHDYrg&usqp=CAU" width="100%">
            </div>
            <div class="col-sm-8">
                <h2>Qué es un editor de texto</h2>

                <h4>
                    <p>
                        Un editor de texto es un programa diseñado para escribir y editar código y la gran mayoría de los editores de texto tienen funciones que facilitan la escritura y edición de este.
                    </p>
                    <p>
                        De hecho, una de las cosas más simples que hacen es el resaltar diferentes partes de tu código con colores para que puedas reconocer y diferenciar strings, métodos o clases.
                    </p>
                </h4>
            </div>
        </div>
    </div>

    <!-- Container (Pricing Section) -->
    <div id="pricing" class="container-fluid">
        <div class="text-center">
            <h2>Los principales editores de texto son:</h2>
        </div>
        <div class="row slideanim">
            <div class="col-xs-12">
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Basic</h1>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <img src="https://blog.mailup.es/wp-content/uploads/2017/12/codice-05-cover.jpg" style="width: 100%;">
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreolore magna aliqua. Ut enim ad minim veniam
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Basic</h1>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <img src="https://blog.mailup.es/wp-content/uploads/2017/12/codice-05-cover.jpg" style="width: 100%;">
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreolore magna aliqua. Ut enim ad minim veniam
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Basic</h1>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <img src="https://blog.mailup.es/wp-content/uploads/2017/12/codice-05-cover.jpg" style="width: 100%;">
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreolore magna aliqua. Ut enim ad minim veniam
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Basic</h1>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <img src="https://blog.mailup.es/wp-content/uploads/2017/12/codice-05-cover.jpg" style="width: 100%;">
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreolore magna aliqua. Ut enim ad minim veniam
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Basic</h1>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <img src="https://blog.mailup.es/wp-content/uploads/2017/12/codice-05-cover.jpg" style="width: 100%;">
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreolore magna aliqua. Ut enim ad minim veniam
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>


        </div>
    </div>


    <footer class="container-fluid text-center bg-grey">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>By <a href="" title="Visit w3schools">Fily</a></p>
    </footer>

    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function() {
                $(".slideanim").each(function() {
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        })
    </script>

</body>

</html>