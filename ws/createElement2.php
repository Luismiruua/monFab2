<?php
    include "./models/element.php";
    include "./conexion.php";
    //Pido lo escrito en el formulario, en las siguientes variables
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $numSerie = $_POST['serie'];
    $estado = $_POST['estado'] = 'Activo';
    $prioridad = $_POST['prioridad'];
    $success = true;
    $message = 'Se ha podido agregar perfectamente';

    $patata = ["success" => $success, "message" => $message, 
    "data" => [
        "nombre" => $nombre,
        "descripcion" =>$descripcion,
        "nserie" => $numSerie,
        "estado" => $estado,
        "prioridad" => $prioridad  
    ]];
        
    try{
        
        $query = "INSERT INTO elementos (nombre, descripcion, nserie, estado, prioridad) 
        VALUES(:nombre, :descripcion, :serie, :estado, :prioridad)"; 
        //Iniciamos la sentencia preparada
        $sentencia = $pdo->prepare($query);

        $sentencia->execute(array(
            ":nombre"=>$nombre, 
            ":descripcion"=>$descripcion, 
            ":serie"=>$numSerie, 
            "estado"=>$estado,
            "prioridad"=>$prioridad
        ));

        echo json_encode($patata) . "\n";


    }catch(PDOExcepction $e){
        //Si no puede insertarlo, falla
        echo 'Fallo la inserccion capo';
    }


























    
    /*
    $sentencia->execute();
    print_r($respuesta);

    
    $sentencia = $pdo->prepare($query);
    
    
    

    $result = $sentencia->execute();

    if($result>0){
        $data['success'] = true;
        $data['message'] = "El producto se ha creado perfectamente capo";  
        $data['id'] = $result;
    }else{
        $data['success'] = false;
        $data['message'] = 'Error en la creación del producto, (';
    }
    $respuesta = $sentencia->fetchAll(PDOFETCH_ASSOC);
    print_r($respuesta);


/*
    /*VALUES (nombre, descripcion, numSerie, estado, prioridad)";

    if ($sentencia->execute()) {
        echo "Nuevos sente$sentenciautos creados";
      } else {
        echo "No se pudieron crear capito";
    }
*/

