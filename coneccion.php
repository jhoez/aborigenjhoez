<?php
//Se almacena la conexion en la variable $enlace, 
$enlace = mysql_connect('localhost','root','indio765');
mysql_select_db('bd1', $enlace);
//La condiciona que permite verificar que se logro conectar y envia el respective mensaje en cualquiera de los casos
if(!$enlace){
    die('Error de Conexión (' . mysql_connect_error() . ') '
            . mysql_connect_error());
}

?>
