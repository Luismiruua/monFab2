<?php
    include "./models/element.php";

    if(isset($_POST["enviar"])){
    
        $nombre = $_POST["nombre"];        
        echo $nombre;
        echo "<br>";

        $descripcion = $_POST["descripcion"];
        echo $descripcion;
        echo "<br>";

        $numSerie = $_POST["serie"];
        echo $numSerie;
        echo "<br>";

        $estado = $_POST["estados"];
        echo $estado;
        echo "<br>";

        $prioridad = $_POST["prioridad"];
        echo $prioridad;

    } 
    echo "<br>";
    

    
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
    $texto = nl2br($texto);
    fclose($esc);
    
    


?>