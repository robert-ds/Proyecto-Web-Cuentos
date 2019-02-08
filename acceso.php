<?php 

require 'conex.php';


session_start();
   
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Cuentos de Mi Tierra</title>
 	<meta charset="utf-8"/>
 	<meta name="author" content="Robert Vasquez, Mendoza Felianny, Cheremo Joseph, Miguel Rojas"/>
 	<meta name="description" content="Cuentos y Fabulas Infantiles Venezolanos, Cuentos Infantiles de Venezuela, Tio tigre y Tio Conejo..."/>
 	<meta name="viewport" content="width=device-width, initial-scale-1.0"/>
    <link rel="stylesheet" type="text/css" href="form.css"/>
 	<link rel="stylesheet" type="text/css" href="style.css"/>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="icon" type="image/png" href="Imagenes/ic.png"/>
 	<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
 	
</head>
<body style="background-image: url(titulo2.jpg); background-size: 100% 100%; background-attachment: fixed;">


     <!-- Nav-->
<nav class="navbar navbar-expand-lg navbar-dark bg-success flex-column-sm flex-row-sm sticky-top nav-fill">
<a class="navbar-brand " href="index.php">Cuentos De Mi Tierra </a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
 
<a class=" nav-item nav-link " href="index.php"><button class="btn btn-lg  btn-success ">Inicio</button></a>
 
  <a class=" nav-item nav-link " href="biblioteca.php"><button class="btn btn-lg  btn-success ">biblioteca</button></a>
   
<a class=" nav-item nav-link " href="acercade.php"><button class="btn btn-lg btn-success ">acerca de</button></a>
 
<a class=" nav-item nav-link " href="formulario.php"><button class="btn btn-lg  btn-success ">suscribirse</button></a>

<a class=" nav-item nav-link " href="acceso.php"><button class="btn btn-lg  btn-success active">Admin</button></a>
  
   </div>
  </nav>

    <!-- Contenido -->
   <div class="row my-5">



                <div class="col-sm-5 offset-sm-4 text-center bg-success" ">
                    <h3 class="chewy display-3">Administrador/a</h3>
                    <h3 class="chewy ">Escribe Tus Credenciales </h3>
                    <br>

                    <div class="info-form">
                        <form action="validar.php" method="POST" class="form-control-success justify-content-center" >
                            
                            <div class="form-group mx-5 chewy col-auto">
                                <input name="nombre" type="text" class="form-control" placeholder="Nombre de Usuario" required>
                            </div>

                            <div class="form-group mx-5 chewy col-auto">
                                <input name="contraseña" type="password" class="form-control" placeholder="Contraseña" required>
                            </div>
                               
                            <button  type="submit" class="btn btn-success btn-lg chewy"><a style="text-decoration: none; color: white;" >Acceder</a></button>
                        </form>
                    </div>
                    <br>

                    
                </div>
            </div>
    <!-- Footer -->
    <footer class="py-2 bg-success  ">
      
        <p class="m-0 text-center text-white">Derechos reservados</p>
      
     
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>	