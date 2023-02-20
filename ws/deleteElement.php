<?php
    include_once 'conexion.php';
    
    //Declarmos la id por get para recogerla
    $id = $_GET["id"] ?? null;
    $success = true;
    $message = "Elementos borrados correctamente"; 

    //Declaramos en un atrbituo : $query la sentencia que queremos eliminar
    $query = "DELETE FROM elementos WHERE id = $id;";    

    $sentencia = $pdo->prepare($query);
    //$sentencia->execute();
    $respuesta = $sentencia->fetchAll(PDO::FETCH_ASSOC);

    //Declaramos un array en el que declaramos arriba una constante mensaje y secceso
   $patata = ["success" => $success, "message" => $message, 
        "data" => $respuesta];
    //Hacemos un if en el que ejecutamos la sentencia de arriba, y si se ejecuta, se mostrará el array que hemos creado arriba por pantallas
    
    if($id != null){
        $sentencia->execute();
        // $sentencia->execute();
                
        //echo json_encode(var_dump($patata)) . "\n";
        $cositas = json_encode($sentencia->fetchAll(PDO::FETCH_ASSOC),JSON_PRETTY_PRINT);
        print_r($cositas);

    }else{
        
        $query2 = "SELECT * FROM elementos";
        $sentencia = $pdo->prepare($query2);
        $sentencia->execute();
        $cositas = json_encode($sentencia->fetchAll(PDO::FETCH_ASSOC),JSON_PRETTY_PRINT);
        print_r($cositas);
        //echo json_encode($patata) . "\n";
        
    }
    //print_r($respuesta);
?>
