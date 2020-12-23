<?php

session_start();

session_destroy();


header("location:index.php");
exit();


// DIRECCIONAR PARA DESTRUIR LA SESION
?>

