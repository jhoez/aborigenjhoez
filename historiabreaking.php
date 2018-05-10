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
<link href="css/admin.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/menudesplegable.css">   
</head>
<body id="fondbreak">
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
    <div class="cajapag2">
        <h1 id="tibreak">Breve historia del break dance en Venezuela</h1>
        <div id="pbreakdance">
        <img class="imgbreak" src="img/b2.jpg">
        El movimiento Breaking en Venezuela tiene una trayectoria de múltiples 
        presencias en competencias de alto nivel internacional como BCONE, 
        Battle of the Year, Redanza, Eurobattle, Cultura Urbana, Hip Hop Oppsesion, 
        Cyon, Lg Bboy Championship(Actuales campeones 2009), Trickonometry, Battle Sonic, 
        Fort Apache, Legiteam Day, Amazing Day, VNR, Chelles Battle Pro, IBE, entre otras..
        En Venezuela el movimiento B Boy existe en casi todos los rincones de Venezuela, 
        B Boys y B Girl. Los crew´s pioneros en Venezuela son Speedy Angels y 
        Flying Legs Crew, luego fueron poco a poco apareciendo crews como: 
        Tsunami Breakers(Llamados luego Tsunami Show), Wonders unit crew, Breaking bone, 
        Black & White Crew, Alianza Brother Crew, N2 Break, New School of Breaking, 
        BCV Boys, Shinning Shadow, For One Beat, UTK, Flyover Crew, Big Power Crew, 
        Revolution Crew, Joker Crew, high level crew, UMC entre otros
        Las competencias en Venezuela suceden muy a menudo, 
        mayormente organizadas por los mismos crews. 
        Existen grandes competencias realizadas por patrocinios de empresas privada 
        dando un gran apoyo a la cultura. Breaktown.org ha impulsado 
        la cultura traspasando fronteras a nivel web donde en su foro 
         ver las próximas competencias y videos.
        La información que tenemos es de la última ola de Breaking 
        que se inicia en el "98 '99. La vieja escuela se data en 1984 
        con crews como Amazonas y Breakers de Venezuela. 
        En los '80 new york city breakers se presentaron 
        en Sábado Sensacional como invitados por el lanzamiento de su película.
        </div>
    </div>
    <div class="piepagina">
        <p>Contacto: informaticos</p>
    </div>
</body>
</html>
