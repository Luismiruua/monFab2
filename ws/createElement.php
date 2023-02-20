<?php
    include "./models/element.php";

        $nombre =   isset($_POST["nombre"]);     

        $descripcion = isset($_POST["descripcion"]);

        $numSerie = isset($_POST["serie"]);

        $estado = isset($_POST["estado"]);

        $prioridad = isset($_POST["prioridad"]);

     
    

    
    $elemento = new Element($nombre, $descripcion, $numSerie, $estado, $prioridad);
    $elemento -> toJson($elemento);
    $archivo = 'formulario.txt';
    $esc = fopen($archivo, 'a');
    $texto = fwrite($esc, '');
        fwrite($esc, $nombre);
        fwrite($esc,$descripcion);
        fwrite($esc, $numSerie);
        fwrite($esc, $estado);
        fwrite($esc, $prioridad);
        echo '<br>';
    $texto = nl2br($texto);
    fclose($esc);


    
    


?>