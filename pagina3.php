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
    <div class="cajapagina3">
        <div class="descargadmin">
            <h1 id="tides">Algunos de mis temas</h1>
            <h2 id="tdes">aborigenjhoez - mi niña bella<a id="des" href=""> (aqui)</a></h2>
            <br>
            <h2 id="tdes">aborigenjhoez - para ti madre<a id="des" href=""> (aqui)</a></h2>
        </div>
    </div>
    <div class="piepagina">
        <p>Contacto: informaticos</p>
    </div>
</body>
</html>
