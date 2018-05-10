<?php  
    require 'coneccion.php';
    mysql_select_db('bd1',$enlace); 

    if(isset($_POST['ingresar'])){

        $nombre=$_POST['user'];
        $userpass=$_POST['pass'];

        if($nombre==''){  
            echo"<script>alert('Por favor ingrese Nombre de usuario')</script>";  
            exit();  
        }
        if($userpass==''){  
            echo"<script>alert('Por favor ingrese su contraseña')</script>";  
            exit();
        }

        $nombre = mysql_real_escape_string($nombre);
        $userpass = mysql_real_escape_string($userpass);

        $run=mysql_query("SELECT usuario,contrasena FROM fr WHERE  usuario='".$nombre."' AND contrasena='".$userpass."' ");  

        if(empty($nombre) && empty($userpass)){
            echo "<script>alert('Usuario y contrseña no han sido ingresados')</script>";
        }else{
            if($result = mysql_fetch_array($run)){
                if($result[0] == 'jhoez'){
                    $_SESSION['usuario'] = $result['usuario'];
                    echo "<script>window.open('inicioadmin.php','_self')</script>";  
                }else if($result[0] != 'jhoez'){
                    $_SESSION['usuario'] = $result['usuario'];
                    echo "<script>window.open('indeusuario.php','_self')</script>";
                }else{
                    echo "<script>alert('Usuario o password es incorrecta o no es usuario registrado!')</script>";
                    exit();
                }
            }//end if
        }//empty
    }//end if  
?>  
