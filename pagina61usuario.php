../usuario/<?php
    session_start();//session is a way to store information (in variables) to be used across multiple pages.
    require 'coneccion.php';

    if(isset($_SESSION['usuario'])){
        unset($_SESSION['usuario']);
        session_destroy();  
        header("Location: index.html");//use for the redirection to some page
    }
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/usuario.css">
<link rel="stylesheet" type="text/css" href="css/menudesplegable.css">    
</head>
<body>
    <div class="head"><h1>AbORiGeNjHoEz</h1></div>
    <ul class="nav">
        <li><a href="indeusuario.php" target="_parent">Inicio</a></li>
        <li><a href="pagin1usuario.php" target="_parent">Galeria</a></li>
        <li><a href="pagin2usuario.php" target="_parent">Historia</a><span class="flecha">&#9660;</span>
            <ul> 
                <li><a href="histobreak.php" target="_parent">Historia del Break Dance Venezolano</a></li>
                <li><a href="histograffi.php" target="_parent">Historia del Graffiti Venezolano</a></li>
            </ul>
        </li>
        <li><a href="pagin3usuario.php" target="_parent">Descargas</a></li>
        <li><a href="pagin4usuario.php" target="_parent">musica</a></li>
        <li><a href="pagina6usuario.php" target="_parent">Contacto</a></li>
        <li><a href="logout.php" target="_parent">Cerrar Sesion</a></li>
    </ul>
    <div class="cajapagu61">
        <h1 id="ticont1">Para contrataciones en eventos privados o publicos</h1>
        <br>
        <h2 id="ticontac1">Correo: jhoez@outlook.com</h2>
        <br>
        <h2 id="ticontac1">Numero telefonico: 0424-152-59-64</h2>
    </div>
    <div class="piepagina">
        <p>Contacto: informaticos</p>
    </div>
</body>
</html>
