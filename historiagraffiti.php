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
<body id="fondgraffi">
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
        <div id="pgraffiti">
            <h1 id="tigraf">El Arte del graffiti en Venezuela es toda una moda</h1>
            <br>
            <h3 id="tigraf">Las calles de Venezuela se visten de spray</h3>
            <br>
            <img class="imghistoria" src="img/g3.gif">
            El graffiti  son varias formas de inscripción o pintura, generalmente sobre propiedades públicas o privadas como paredes, vehículos, puertas y mobiliario urbano, también es parte del hip-hop.  Es un fenómeno social que nace  en Nueva York en los años setenta donde la discriminación social, los guetos, las guerras de pandillas generan una serie de expresiones urbanas, también es  una especie de cruzada territorial que implanta  presencia, control y dominio de un área
            Aunque el graffiti sea una cultura ilegal e Venezuela, su moda y pasión por el arte en las calles cada día se incrementan más.
            El graffiti en Venezuela desde hace un tiempo se ha convertido en la pasión de artistas urbanos, quienes expresan su potencial por medio de pintura en aerosol que aunque es mal vista, se toma como una moda que transmite gráficamente ideas sensaciones o ideología por medio de formas y colores. Estos artistas van recorriendo el mundo dejando plasmado su  arte con un apodo,  “nosotros no revelamos nuestros nombres ya que para muchos este tipo de arte es catalogado como vandalismo, por eso cuidamos nuestra identidad” Así acoto “Ira” integrante del grupo Los CMS, colectivo que es bastante conocido por los seguidores del graffiti en Venezuela y el mundo, y reconocido por otros artistas del género pictórico. Actualmente el gobierno venezolano, les ha brindado espacios a dichos artistas para que trabajen cómodamente, les pagan con latas de pintura, sin embargo apoyan este arte cuando se trata de pintar murales socialmente aceptados y no como vandalismo ya que al prestarle paredes para que se desarrollen se esta evitando que otros espacios de la ciudad sean rayados clandestinamente.
            Ellos prefieren  “seguir pintando de manera clandestina para no perder la esencia y el concepto del graffiti”. Informo Tuk otro integrante del “crew” Los CMS
            Por otra parte, la mayoría de estos artistas dicen que se sienten mas cómodos realizado sus diseños en murales y de noche, para así no tener problemas con los agentes policiales ya que según en el código civil de Venezuela  el articulo 1045 reza que: “todo aquel que por dolo, falta, negligencia o imprudencia causa a otro un daño en su propiedad privada  esta obligado a repararlo junto con los perjuicios” también en el articulo 1046 indica que: “La obligación de reparar los daños y perjuicios ocasionados con un delito o cuasidelito,  pesa solidariamente sobre todos que han participado en el delito o cuasidelito, sea como autores o cómplices y sobre sus herederos.” 
            La mayoría de estos artistas están formado en un ambiente de calle, pertenecen  a distintos “crew”  “Es un grupo de panas que te acompañan siempre en lo que haces es como una familia pero en la calle” así afirma Tuk integrante del Los CMS a  estos grupos les gusta pintar en espacios y objetos de las calles  que no son permitidos, mayormente en murales grandes para poder plasmar sus diseños  y sean bien  detallados, los policías los humillan las personas los catalogan como vándalos, drogadictos,  sin embargo, no  hay nada que detenga a estos grafiteros en esa fiebre casi adictiva  de rayar paredes. Hoy en día es considerado un lenguaje que ha invadido la publicidad, la televisión, el diseño gráfico y los videojuegos.
            Pero no todo es una significación del dibujo propiamente, dentro de los diferentes “crew” del graffiti existen códigos bien respetados, como por ejemplo el hecho de que un artista haga su dibujo sobre el logo o el dibujo que otro grafitero haya hecho, significa que están buscando problemas entre ellos, la idea es dejar una buena cantidad de dibujos en sitios de la ciudad sin interferir con el arte del otro. El graffiti se divide en varias partes: tags: es la firma de un grafitero, su identificación. Lo único que va a variar en este caso, es el color, el tamaño y la posición en la que este hecha, Estas letras, o mejor dicho esta palabra, tienen un significado que, casi siempre, solo el grafitero y su grupo de amigos saben lo que significa, o porque hace esa firma. La bomba: Son letras gruesas que tienen un contorno, pueden ser rellenas, usualmente son ilegales.  La pieza: (obra maestra), que hace referencia a pinturas realizadas con “spray”, compuesta básicamente de letras. Es cuando pintan el nombre del grafitero  o del “crew” que pertenecen, debe tener más de 3 colores para ser considerado una pieza.
            Los grafiteros son ejecutores nocturnos, que no solo son señalados por la sociedad, sino perseguidos por la policía y a merced de la inseguridad del país. Aunque si a ver vamos es la forma en que prefieren expresar su arte, recordemos que el graffiti empezó como una forma de protesta, sobre todo hacia la autoridad. Luego fue transformándose a obras con ideologías y expresiones variadas, que de por sí, ya son prueba de la ausencia de autoridad en el sector o localidad que sea plasmada.
            Los colectivos juveniles mas reconocidos de la ciudad de Caracas son: los CMS “crew” y los DNC “crew” ya que llevan mas de 10 años con una buena trayectoria en el mundo del graffiti y el hip-hop en caracas.
            Dicho colectivo o “crew” ha viajado para muchas partes del mundo dejando huellas con sus coloridas firmas y caracteres poniendo en alto a Venezuela en el mundo de la pintura callejera “A cualquier parte que vamos rayamos, hemos viajado para muchas partes del mundo como: Madrid, Brasil, Colombia, argentina, Italia, Ámsterdam, parís, Londres, entre otros países  indicando  zenk integrante del “crew” Los CMS
        </div>
    </div>
    <div class="piepagina">
        <p>Contacto: informaticos</p>
    </div>
</body>
</html>
