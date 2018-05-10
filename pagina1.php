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
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="stylesheet" type="text/css" href="css/menudesplegable.css">   
</head>
<body>
    <div class="head"><h1>AbORiGeNjHoEz</h1></div>
    <ul class="nav">
        <li><a href="inicioadmin.php">Inicio</a></li>
        <li><a href="pagina1.php">Galeria</a></li>
        <li><a>Historia<span class="flecha">&#9660;</span></a>
            <ul> 
                <li><a href="historiabreaking.php">Historia del Break Dance Venezolano</a></li>
                <li><a href="historiagraffiti.php">Historia del Graffiti Venezolano</a></li>
            </ul>
        </li>
        <li><a href="pagina3.php">Descargas</a></li>
        <li><a href="pagina4.php">Musica</a></li>
        <li><a href="pagina6.php">Contacto</a></li>
        <li><a href="logout.php">Cerrar sesion</a></li>
    </ul>
    <div class="cajapagina1">
        <h1 class="pagt1">Presentaciones en tarima</h1>
        <div id="textgal1">
            <h3 id="UNI">Universidad Bolivariana de Venezuela</h3>
            <div id="aka">Jhon Ramirez aka(aborigenjhoez)</div>
            <img id="galpag1" src="img/4.jpg">
            <img id="galpag1" src="img/3.jpg">
            <img id="galpag1" src="img/7.jpg">
        </div>
        <div id="textgal2">
            <div id="aka">Robert Abrahan aka(ancer)</div>
            <img id="galpag2" src="img/23.jpg">
            <img id="galpag2" src="img/24.jpg">
            <img id="galpag2" src="img/17.jpg">
        </div>
        <div id="textgal3">
            <h3 id="UEN">U.E.N. Antonio Arraiz</h3>
            <div id="aka">aka(aborigenjhoez, ancer)</div>
            <img id="galpag3" src="img/IMG8.jpg">
            <img id="galpag3" src="img/IMG10.jpg">
            <img id="galpag3" src="img/IMG11.jpg">
        </div>
        <div id="textgal4">
            <div id="aka">aka(Funkidor, Nasa, Knela, indio)</div>
            <img id="galpag4" src="img/IMG4.jpg">
            <img id="galpag4" src="img/IMG5.jpg">
            <img id="galpag4" src="img/IMG6.jpg">
            <img id="galpag4" src="img/IMG14.jpg">
            <img id="galpag4" src="img/IMG15.jpg">
            <img id="galpag4" src="img/IMG18.jpg">
        </div>
    </div>
    <div class="piepagina">
        <p>Contacto: informaticos</p>
    </div>
</body>
</html>
