<?php
    session_start();//session is a way to store information (in variables) to be used across multiple pages.
    require 'coneccion.php';

    if(isset($_SESSION['usuario'])){
      echo "no hay usuario";
    }else{
      session_unset();
      session_destroy();  
      header("Location: index.html");//use for the redirection to some page
    }
?>  
