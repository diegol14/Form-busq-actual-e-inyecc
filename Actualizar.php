<?php

require 'con6.php';

if (isset($_GET['update'])) {
    
    $nombre_articulo=$_GET['nom_art'];
    $cod_articulo=$_GET['c_art'];
    $seccion=$_GET['seccion'];
    $precio=$_GET['precio'];
    $fecha=$_GET['fecha'];
    $paisorigen=$_GET['p_orig'];
    $importado=$_GET['impor'];
    
    if (isset($nombre_articulo)) {
        
        echo "Articulo a actualizar : ".$nombre_articulo;
        
        
        
        $myquery6c = "UPDATE productos SET 
        SECCI�N='$seccion', NOMBREART�CULO='$nombre_articulo', PRECIO='$precio',
        FECHA='$fecha', PA�SDEORIGEN='$paisorigen', IMPORTADO='$importado'
         where C�DIGOART�CULO = '$cod_articulo' ";
        if ( $resultquery6c = mysqli_query($con6, $myquery6c)){
            if (mysqli_affected_rows($con6)>0) {
                echo "<br/>Registro actualizado : ".mysqli_affected_rows($con6); 
                }else {
                    echo "No se han actualizado registros";
                }
             }
    }
}
?>