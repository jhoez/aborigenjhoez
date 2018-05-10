<?php
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
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="stylesheet" type="text/css" href="css/menudesplegable.css">    
</head>
<body>
    <div class="head"><h1>AbORiGeNjHoEz</h1></div>
    <ul class="nav">
        <li><a href="inicioadmin.php" target="_parent">Inicio</a></li>
        <li><a href="pagina1.php" target="_parent">Galeria</a></li>
        <li><a>Historia<span class="flecha">&#9660;</span></a>
            <ul> 
                <li><a href="historiabreaking.php" target="_parent">Historia del Break Dance Venezolano</a></li>
                <li><a href="historiagraffiti.php" target="_parent">Historia del Graffiti Venezolano</a></li>
            </ul>
        </li>
        <li><a href="pagina3.php" target="_parent">Descargas</a></li>
        <li><a href="pagina4.php" target="_parent">Musica</a></li>
        <li><a href="pagina6.php" target="_parent">Contacto</a></li>
        <li><a href="logout.php">Cerrar sesion</a></li>
    </ul>
    <div class="cajapagina62">
        <h1 id="ticont2">Para contrataciones en eventos privados o publicos</h1>
        <br>
        <h2 id="ticontac2">Correo: jhoez@outlook.com</h2>
        <br>
        <h2 id="ticontac2">Numero telefonico: 0424-152-59-64</h2>
    </div>
    <div class="piepagina">
        <p>Contacto: informaticos</p>
    </div>    
</body>
</html>
