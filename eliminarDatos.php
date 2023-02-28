<?php
//include ("conexion_localhost.php");
include ("conexion_servidor.php");
    $registro= new basedatos();
    $doc=intval($_GET['doc']);
    $res=$registro->eliminar_registro($doc);

    if ($res == true) {
        echo '<script type="text/javascript">
        alert("Registro de cliente eliminado correctamente!");
        window.location.href="datosRegistrados.php";
        </script>';
    }else {
        echo '<script type="text/javascript">
        alert("No se pudo eliminar el registro. Verifique e intente nuevamente.");
        window.location.href="datosRegistrados.php";
        </script>';
    }