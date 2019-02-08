<?php 

require 'conex.php';

session_start();
error_reporting(0);

$vs = $_SESSION['nombre'];

?>

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


     <!-- Nav -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success flex-column-sm flex-row-sm sticky-top nav-fill">
<a class="navbar-brand " href="index.php">Cuentos De Mi Tierra </a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
 
<a class=" nav-item nav-link " href="index.php"><button class="btn btn-lg  btn-success ">Inicio</button></a>
 
  <a class=" nav-item nav-link " href="biblioteca.php"><button class="btn btn-lg  btn-success active">biblioteca</button></a>
   
<a class=" nav-item nav-link " href="acercade.php"><button class="btn btn-lg btn-success ">acerca de</button></a>
 
<a class=" nav-item nav-link " href="formulario.php"><button class="btn btn-lg  btn-success ">suscribirse</button></a>

<a class=" nav-item nav-link " href="acceso.php"><button class="btn btn-lg  btn-success ">Admin</button></a>
   </div>



   </div>
  </nav>

     <!-- Contenindo -->
    <div class="container">

<?php 
    /* Comprueba Credenciales o Acceso, Si no Sosee Alguno no Puede Visualizar el Contenido */  

      if( $vs == null || $vs = '' ){
  echo '<h1 style="margin-top:120px; font-size:60px; font-family: chewy, cursive; color: red;">¡Tu Acceso a este Modulo Esta Restringido!</h1>';
  die();
}
?>

                                          <!--Imprime el Nombre del Usuario Logueado-->
      <h1 class="my-4 chewy">En Construcción. Bienvenido/a <?php echo $_SESSION['nombre']; ?> 

      <a class=" nav-item nav-link " href="cerrar_session.php"><button class="btn btn-lg  btn-success  ">Salir</button></a>
    </h1>



      <div class="row ">
        <div class="col-lg-6 portfolio-item my-4">
          <div class="card h-100">
            <a href="Cuentos/cuento7.php"><img class="card-img-top" src="Imagenes/5.jpg" alt="Tío Tigre, Tío Conejo y la mata de mangos"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="Cuentos/cuento7.php">Tío Tigre, Tío Conejo y la mata de mangos</a>
              </h4>
              <p class="card-text chewy">Una vez Tío Tigre y Tío Conejo estaban de amigos, y decidieron salir a recorrer el mundo. Ya tenían muchos días caminando y se encontraron muy hambrientos, cuando vieron un palo de mangos que estaba bien cargado.</p>
            </div>
          </div>
        </div>
        <br>
        <div class="col-lg-6 portfolio-item my-4">
          <div class="card h-100">
            <a href="Cuentos/cuento8.php"><img class="card-img-top" src="Imagenes/13.jpg" alt="La Familia De Los Matea"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="Cuentos/cuento8.php">La Familia De Los Matea</a>
              </h4>
              <p class="card-text">La familia de los Matea es uno de los bellos cuentos infantiles sobre el mate escrito por Teresita Vago, sugerido para niños de todas las edades.</p>
            </div>
          </div>
        </div>
        
        
        
          </div>
        </div>
      </div>
   
      <br>



      <!-- Paginas -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="Biblioteca.php" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
   



    <!-- Footer -->
    <footer class="py-2 bg-success">
      <div class="container">
        <p class="m-0 text-center text-white">Derechos reservados</p>
      </div>
      
    </footer>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


</body>
</html>	