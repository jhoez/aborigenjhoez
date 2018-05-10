<?php
    session_start();//session is a way to store information (in variables) to be used across multiple pages.
    require 'coneccion.php';

    if(isset($_SESSION['usuario'])){
        unset($_SESSION['usuario']);
        session_destroy();  
        header("Location: index.html");//use for the redirection to some page
    }
?>
<!DOCTYPE html>
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
    <div class="cajapagina4">
        <h1 id="admtpag">Mis canciones</h1>
        <div id="admdescripmusica">
            Todas mis canciones las he compuesto, hasta el sol de hoy llevo compuestas
            10 canciones:
            <br><br>
            EP Amor la verdadera escencia.
            <br><br>
            1. Mi niña bella.
            <br><br>
            2. Mil rosas para ti.
            <br><br>
            3. Amor no imposible.
            <br><br>
            4. Mi corazon te habla.
            <br><br>
            5. Para ti madre.
            <br><br>
            6. Tu mi fragil melodia.
            <br><br>
            EP Conciencia y luz.
            <br><br>
            Este ep esta en proceso de creacion.
        </div>
    </div>
    <div class="piepagina">
        <p>Contacto: informaticos</p>
    </div>
</body>
</html>
