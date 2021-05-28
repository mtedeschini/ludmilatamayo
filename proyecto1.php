<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MOVEin - LT</title>
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
                    <a href="index.html"><img src="images/Grupo2.png" alt=""></a>
                </div>
            </div>
            <div class="col-4 mt-4 idioma">
                <ul style="text-align: center ">
                    <li class="nav-link " style="display:inline-block"><a href="index.html">SOBRE MI</a></li>
                    <li class="nav-link " style="display:inline-block"><a href="index.html#proyectos">PROYECTOS</a></li>
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
  <div class="container">
      <div class="row">
          <div class="col-12" style="margin-top: 150px;">
              <h3>MOVEin // Case Study - ACÁMICA </h3>
          </div>
          <div class="row">
          <div class="col-12 ">
              <img class="img-fluid" src="images/proyecto_interior_movein.png" alt="">
            </div>
          </div>
      </div>
  </div>

<div  style="position: sticky; bottom: 0px; width: 100%; background-color: white;">
<div style="position: sticky; bottom: 0px; width: 90%;" id="cincopa_a75d25">...</div><script type="text/javascript">
    var cpo = []; cpo["_object"] ="cincopa_a75d25"; cpo["_fid"] = "AMKAwxudynjE";
    var _cpmp = _cpmp || []; _cpmp.push(cpo);
    (function() { var cp = document.createElement("script"); cp.type = "text/javascript";
    cp.async = true; cp.src = "https://rtcdn.cincopa.com/libasync.js";
    var c = document.getElementsByTagName("script")[0];
    c.parentNode.insertBefore(cp, c); })(); </script>

</div>
<!--Scroll Reveal-->

<script>
    ScrollReveal().reveal('.titulo', {delay: 800})
    ScrollReveal().reveal('.fotofondo', { delay: 100 })
    ScrollReveal().reveal('.sobremi', { delay: 200 })
    ScrollReveal().reveal('.proyectos', { delay: 300 })
</script>

</body>

</html>