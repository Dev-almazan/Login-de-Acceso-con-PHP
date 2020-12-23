
<?php


// SE ENVIA LA PETICION DEL FORM AL MISMO FICHERO SI LAS VARIABLES  ESTAN VACIAS  OCULTAR LA ALERTA SI HAY INFO ENTONCES EJECUTAR PETICIONES PARA HACER COINCIDIR USER Y CONTRA Y PASAR AL SIGUIENTE FICHERO
if (empty($_POST))
    
{
    $validar="";
    $color="oculto";
}

else
{
    
require 'conexion.php';
//INICIAR LA SESION
session_start();    

$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
    
//CONVERTIR LAS VARIABLES EN CODIFICACIONES DE 32 BITS PARA EVITAR INYECCIONES SQL
    
$user = md5($usuario);
$pass = md5($contra);

// CONSULTA A BASE DE DATOS SI COINCIDE LOS DOS VALORES PASAR AL SIGUIENTE FICHERO    
$consults ="SELECT usuario, ENCRIPT from usuarios where UENCRYPT='$user' and ENCRIPT = '$pass' LIMIT 1 ";
$consulta= mysqli_query($conexion,$consults);
$resultado = mysqli_fetch_array($consulta);


// EJECUTAR SI ES VERDADERA LA CONSULTA
    
if ($resultado){
    //DIRECCIONAR LA SESION AL SIGUIENTE FICHERO
    $_SESSION['username']= $usuario;
    header("location:template.php");
    
    }
    else{
        
        
    $validar = "Ups el Usuario y la Contraseña son incorrectas - favor de volver a intentarlo";
    $color = "primary";
        
    }
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
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login de Acceso</h1>
                  </div>
                  <form class="user" method="post" action="" novalidate>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="correo" aria-describedby="emailHelp" placeholder="Ingresa email por favor..." name="usuario">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="Contraseña" placeholder="Contraseña" name="contra">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" >
                        <label class="custom-control-label" for="customCheck">Recuerdame </label>
                      </div>
                    </div>
                      <input  type="submit" value="Ingresar" class="btn btn-primary btn-user btn-block" / > 
                    
                    <hr>
               
                  </form>
                    <!-- EN CASO DE UNA CONSULTA FALSA IMPRIMIR EL CONTENIDO DE LAS VARIABLES -->
        <div class="card-footer text-center">
    <div class="alert alert-<?php  echo $color ; ?> alert-dismissible fade show" role="alert">
  <strong><?php  echo $validar ; ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> 
</div>
                  <div class="text-center">
                    <a class="small" href="#">Olvide mi contraseña?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="#">Crear una nueva cuenta!</a>
                  </div>
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
