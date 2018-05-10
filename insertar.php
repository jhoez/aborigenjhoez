<?php
  require ("coneccion.php"); 

  $usuario=$_POST['usuario'];
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $cedula=$_POST['cedula'];
  $contraseña=$_POST['pass'];
  $confirmar_contraseña=$_POST['npass'];
  $nacionalidad=$_POST['nacionalidad'];
  $sexo=$_POST['sexo'];
  $profesion=$_POST['profesion'];
  $correo_electronico=$_POST['correo'];

  mysql_select_db('bd1',$enlace);

// se inserta los registro a la tabla registro
    $query ="INSERT INTO fr VALUES ('".$usuario."', '".$nombre."','".$apellido."','".$cedula."','".$contraseña."','".$confirmar_contraseña."','".$nacionalidad."','".$sexo."','".$profesion."','".$correo_electronico."')";
    $result = mysql_query ($query);
    if($result){
      echo mysql_affected_rows();
      header('Location: index.html');
    }   
?>
