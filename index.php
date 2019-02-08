<!DOCTYPE html>
<html lang="es">
<head>
	<title>Cuentos de Mi Tierra</title>
 	<meta charset="utf-8"/>
 	<meta name="author" content="Robert Vasquez, Mendoza Felianny, Cheremo Joseph, Miguel Rojas"/>
 	<meta name="description" content="Cuentos y Fabulas Infantiles Venezolanos, Cuentos Infantiles de Venezuela, Tio tigre y Tio Conejo..."/>
 	<meta name="viewport" content="width=device-width, initial-scale-1.0"/>
 	<link rel="stylesheet" type="text/css" href="style.css"/>
 	<link rel="stylesheet" type="text/css" href="form.css"/>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
 	<link rel="icon" type="image/png" href="Imagenes/ic.png"/>
 	<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">

</head>
<body style="background-image: url(titulo2.jpg); background-size: 100% 100%; background-attachment: fixed;">


     <!-- Nav-->
<nav class="navbar navbar-expand-lg navbar-dark bg-success flex-column-sm flex-row-sm sticky-top nav-fill">
<a class="navbar-brand " href="#">Cuentos De Mi Tierra </a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
 
<a class=" nav-item nav-link " href="index.php"><button class="btn btn-lg  btn-success active">Inicio</button></a>
 
  <a class=" nav-item nav-link " href="Biblioteca.php"><button class="btn btn-lg  btn-success ">biblioteca</button></a>
   
<a class=" nav-item nav-link " href="acercade.php"><button class="btn btn-lg btn-success ">acerca de</button></a>
 
<a class=" nav-item nav-link " href="formulario.php"><button class="btn btn-lg  btn-success ">suscribirse</button></a>

<a class=" nav-item nav-link " href="acceso.php"><button class="btn btn-lg  btn-success ">Admin</button></a>
  
   </div>
  </nav>


    <!-- Contenido -->
    <div class="container " >


     
      <h1 class="my-4 chewy">Bienvenidos a Cuentos de Mi Tierra</h1>

      
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="Imagenes/1.jpg" alt="" style="width: 750px; height: 500px; ">
        </div>

        <div class="col-md-4 ">
          <h3 class="my-3 chewy">Cuento Venezolano Tio Tigre y Tio Conejo</h3>
          <p class="chewy" style="background: rgba(255, 255,255, 0.7); padding: 10px;">El pobre tío Tigre estaba echado debajo de una mata de mangos relamiéndose sus pobres patas ya que un Puerco Espín le había lanzado todas sus espinas por todo su pobre cuerpo. Ese Tío Conejo si es mañoso y astuto. Se dio cuenta a tiempo de que lo había engañado ofreciéndole una mano de cambur para comérmelo, y ni corto ni perezoso llamo al tío cachicamo que a su vez era muy amigo del Puerco Espin, y no me dio tiempo ni siquiera de ponerle una garra encima gimiendo todavía por el dolor que le habían producido las heridas de las espinas.</p>
          <br><br>
        <a href="Cuentos/cuento1.php"> <button type="button" class="btn btn-success btn-lg btn-block chewy " >Leer</button></a>
        </div>

      </div>
     

     
      <h3 class="my-4 chewy"> Próximas Publicaciones </h3>

      <div class="row">

        <div class="col-md-6 col-sm-6 mb-6">
         
            <button type="button" class="" data-toggle="popover" data-placement="right"  title="Tío Tigre, Tío Conejo y la mata de mangos" data-trigger="focus"  data-content="Una vez Tío Tigre y Tío Conejo estaban de amigos, y decidieron salir a recorrer el mundo. Ya tenían muchos días caminando y se encontraron muy hambrientos, cuando vieron un palo de mangos que estaba bien cargado."><img class="img-fluid" src="Imagenes/5.jpg" alt="Tio Tigre Tio Conejo y la Mata de Mangos">
            </button>
          
        </div>

        <div class="col-md-6 col-sm-6 mb-6">
         <button type="button" class="" data-toggle="popover" data-placement="right" title="La Familia De Los Matea" data-trigger="focus"  data-content="La familia de los Matea es uno de los bellos cuentos infantiles sobre el mate escrito por Teresita Vago, sugerido para niños de todas las edades." ><img class="img-fluid" src="Imagenes/13.jpg" alt="Los Matea">
            </button>
          
        </div>

      </div>
      <br> <br>
     

    </div>
   

    <!-- Footer -->
    <footer class="py-2 bg-success ">
      <div class="container">
        <p class="m-0 text-center text-white">Derechos reservados</p>
      </div>
    
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


<!--popover-->
    <script>
			$(function () {
  $('[data-toggle="popover"]').popover()
})
		</script>

</body>
</html>	