<?php
ob_start();
    include("conexion.php");
    $mejor_puntuacion =
        "SELECT DISTINCT peli.path_poster as poster, peli.id_peli as id FROM peli
        GROUP BY peli.titulo
        ORDER BY peli.calificacion DESC
        LIMIT 10;
    ";

    $result_mejor = mysqli_query($conexion, $mejor_puntuacion);

    /*
    $favorite = "";
    
    $result_favorite = mysqli_query($conexion, $favorite);

    $later = "";
    
    $result_later = mysqli_query($conexion, $later);

    $continue = "";
    
    $result_continue = mysqli_query($conexion, $continue);
    */
    
    $puesto = 1;

?>