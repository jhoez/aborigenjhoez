<?php
    session_start();//session is a way to store information (in variables) to be used across multiple pages.
    require 'coneccion.php';

    if(isset($_SESSION['usuario'])){
        unset($_SESSION['usuario']);
        session_destroy();  
        header("Location: index.html");//use for the redirection to some page
    }
?>
<html>
<head>
</head>
<FRAMESET rows=*96%,4%*> 
<frame name="sx" src="pagina61usuario.php">
<frame name="central" src="pagina62usuario.php">
</FRAMESET>
</html>
