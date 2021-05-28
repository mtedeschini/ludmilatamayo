<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ludmila</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Dorsa&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4"></script>
	<script>
		ScrollReveal({ duration: 1000 })
	</script>

    <script>
        $(document).ready(function () {
            // Add smooth scrolling to all links
            $("a").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>

</head>

<!--Barra Navegación Fijo-->
<header class="header barraNav fixed-top">
    <div class="container">
        <div class="row ">
            <div class="col-4 mt-3 idioma">
                <div class="logo">
                    <a href="#home"><img src="images/Grupo2.png" alt=""></a>
                </div>
            </div>
            <div class="col-4 mt-4 idioma">
                <ul style="text-align: center ">
                    <li class="nav-link " style="display:inline-block"><a href="#sobremi">SOBRE MI</a></li>
                    <li class="nav-link " style="display:inline-block"><a href="#proyectos">PROYECTOS</a></li>
                    <li class="nav-link " style="display:inline-block"><a href="#contacto">CONTACTO</a></li>
                </ul>
            </div>
            <div class="col-4 mt-4 idioma">
                <ul style="text-align: right ">
                    <a href="indexen.html"><li class="nav-link" style="display:inline-block">EN </li></a> |
                    <a href="index.html"><li class="nav-link active " style="display:inline-block; font-weight: bold;">ES</li></a>
            </div>
        </div>

    </div>
</header>

 <!--Cuerpo Principal-->
<body class="mt-sm-5">
    <section class="home" id="home">
        <img style="width: 100%; margin-top: 100px;" src="images/LUDMILATAMAYO.png" class="fotofondo"alt="">
        <h2 class="titulo">Mi portfolio</h2>
    </section>

 <!--Sobre mí-->
    <section class="sobremi pb-sm-5 pb-2" id="sobremi">
        <div class="container contsobremi" style="padding-top: 150px;">
            <div>
                <img src="images/Trazado1.png" class="mancha" style="position: absolute; left: -250px; top: 950px; width: 45%; "
                    alt="">
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 contenedorfoto">
                    <img src="images/foto.jpg" class="fotoPerfil rounded-circle"
                        style="max-height: 400px; position: absolute;" alt="Ludmila">
                </div>
                <div class="col-12 col-lg-8 textosobremi">
                    <h3>Hola! <br> Soy Ludmila Tamayo</h3>
                    <h3>Diseñadora Gráfica UX/UI</h3>
                    <br>
                    <p>Me recibí como Diseñadora Gráfica en la Universidad de Buenos Aires en 2013, cuento con 8 años de
                        experiencia en el campo del diseño, realizando tanto branding, logos, diseño editorial como
                        diseño digital. <br> <br>Realizo sistemas visuales para marcas e interfaces.</p>
                    <br>
                    <div class="col-12 d-flex justify-content-center mt-sm-5 ">
                        <h4 style="font-family: jost; text-align: center;" class="pt-3">¿QUÉ HAGO?</h4>
                    </div>
                    <div class="row mt-5">
                        <div class="col-4 col-sm-4  icono" style="text-align: center">
                            <img src="images/icon3.png" alt="" class="imgIcono">
                            <p style="font-family: Jost; text-align: center; margin-top: 10px;">UX / UI</p>
                        </div>
                        <div class="col-4 col-sm-4  icono" style="text-align: center">
                            <img src="images/icon1.png" alt="" class="imgIcono">
                            <p style="font-family: Jost; text-align: center; margin-top: 10px;">LOGO & BRANDING</p>
                        </div>
                        <div class="col-4 col-sm-4  icono" style="text-align: center">
                            <img src="images/icon2.png" alt="" class="imgIcono">
                            <p style="font-family: Jost; text-align: center; margin-top: 10px;">DISEÑO GRÁFICO</p>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>

 <!--Proyectos-->

    <section class="proyectos" id="proyectos">
        <div lass class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Proyectos</h2>
                </div>
            </div>

            <div class="row">
                
                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="proyecto1.html">
                        <img class="img-fluid" src="images/proyecto1.png" alt="">
                         <p >MOVEin // Case Study - ACÁMICA</p>
                    </a>
                </div>
                
                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="tarjeta2">
                        <img class="img-fluid" src="images/proyecto2.png" alt="">
                         <p> Branding // Rincón Verde  </p>
                    </a>
                </div>


            </div>
            <div class="row">
                
                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="tarjeta1">
                        <img class="img-fluid" src="images/proyecto3.png" alt="">
                         <p >Branding // Porter Candles </p>
                    </a>
                </div>
                
                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="tarjeta2">
                        <img class="img-fluid" src="images/proyecto4.png" alt="">
                         <p >Trend // Revista iPad </p>
                    </a>
                </div>


            </div>
            <div class="row">
                
                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="tarjeta1">
                        <img class="img-fluid" src="images/proyecto5.png" alt="">
                         <p > Branding // Consultorio Oftalmológico </p>
                    </a>
                </div>
                
                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="tarjeta2">
                        <img class="img-fluid" src="images/proyecto6.png" alt="">
                         <p > Diseño editorial </p>
                    </a>
                </div>


            </div>
            <div class="row">
                
                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="tarjeta1">
                        <img class="img-fluid" src="images/proyecto7.png" alt="">
                         <p > Infografía // Factsheets </p>
                    </a>
                </div>
                
                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="tarjeta2">
                        <img class="img-fluid" src="images/proyecto8.png" alt="">
                         <p >Rediseño web CEPRODIDE // FADU </p>
                    </a>
                </div>
            <div class="row">

                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="tarjeta1">
                        <img class="img-fluid" src="images/proyecto9.png" alt="">
                         <p >Piezas para eventos </p>
                    </a>
                </div>
                
                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="tarjeta2">
                        <img class="img-fluid" src="images/proyecto10.png" alt="">
                         <p >Proyecto final // Diseño Gráfico 3  </p>
                    </a>
                </div>
            
            </div>
            <div class="row">


                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="tarjeta1">
                        <img class="img-fluid" src="images/proyecto11.png" alt="">
                         <p >Caligrafía </p>
                    </a>
                </div>
                
                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="tarjeta2">
                        <img class="img-fluid" src="images/proyecto12.png" alt="">
                         <p >Publicación tipográfica // FADU </p>
                    </a>
                </div>

            </div>
            <div class="row">


                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="tarjeta1">
                        <img class="img-fluid" src="images/proyecto13.png" alt="">
                         <p >Logotipo </p>
                    </a>
                </div>
                
                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="tarjeta2">
                        <img class="img-fluid" src="images/proyecto14.png" alt="">
                         <p >Esquema gráfico // FADU </p>
                    </a>
                </div>

            </div>
            <div class="row">
                
                <div class="col-sm-6 col-12  pb-sm-4">
                    <a class="tarjetas" href="tarjeta1">
                        <img class="img-fluid" src="images/proyecto15.png" alt="">
                         <p >Sistema Gráfico // FADU </p>
                    </a>
                </div>
                



            </div>


        </div>
        </div>


    </section>

<!--Scroll Reveal-->

<script>
    ScrollReveal().reveal('.titulo', {delay: 800})
    ScrollReveal().reveal('.fotofondo', { delay: 100 })
    ScrollReveal().reveal('.sobremi', { delay: 200 })
    ScrollReveal().reveal('.proyectos', { delay: 300 })
</script>

</body>

</html>