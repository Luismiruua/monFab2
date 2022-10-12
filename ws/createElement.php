<?php
    include "./models/element.php";

    if(isset($_POST["enviar"]))
    {
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
        if( $prioridad = isset($_POST["prioridad"]))
            !empty($_POST["prioridad2"]);
            !empty($_POST["prioridad3"]);

            echo "Alta";
         
        if($prioridad = isset($_POST["prioridad2"]))
            echo "Media";
             
        if($prioridad = isset($_POST["prioridad3"]))
            echo "Baja";
    }
    echo "<br>";
    

    
    $elemento = new Element($nombre, $descripcion, $numSerie, $estado, $prioridad);
?>