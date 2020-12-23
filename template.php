
<?php
  
// SESION INICIADA 
include 'conexion.php';
session_start();

$usuario= $_SESSION['username'];


if(!isset($usuario)){
    
    header("location:index.php");
    
}

?>




<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="ERNESTO ALMAZAN RESENDIZ">

  <title>Login</title>

  <link href="css/estilo.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body class="bg-gradient-dark">

  <div class="container">

   
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
      
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-left">
                    <h1 class="h4 text-gray-900 mb-4">BIENVENIDO</h1>
                      <h1 class="h4 text-primary-900 mb-4"><?php echo $usuario; ?></h1>
                  </div>
               <!-- DIRECCIONAR AL FICHERO SALIR PARA DESTRUIR LA SESION -->
                    <a href="salir.php"  class="btn btn-primary text-center"  placeholder="">X Cerrar Sesión </a>
              
                </div>
                  
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

</body>

</html>
