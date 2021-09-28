<?
    $host = "localhost";
    $basededatos = "form";
    $usuariodb = "roots";
    $clavedb = "";

    $tabla_db1 = "contacto";



    $conexion = new mysqli($host, $usuariodb, $clavedb, $basededatos);

    if($conexion -> connect_errno){
        echo "No se pudo conectar con la Base de Datos";
        exit();
    }

?>