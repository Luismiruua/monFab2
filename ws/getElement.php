<?php
require 'conexion.php';
require './models/element.php';



    //tomamos los datos del post del formulario
    $id = $_GET['id'] ?? NUll;

    //Aqui declaramos dos atributos, para luego ponerlos, eun un arrat
    $success = true;
    $message = "Elementos obtenidos correctamente"; 

    
    try{
        
        $query = "SELECT * FROM elementos WHERE id = $id;";
        $sentencia = $pdo->prepare($query);
        //$sentencia->bindParam(':id',$id);
        //$sentencia->execute();
        $respuesta = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        //print_r($respuesta);

        //print_r($respuesta);
        //Se  crea un array donde van a ir todos los datos
            $patata = ["success" => $success, "message" => $message, 
            "data" => $respuesta];
            //Ejecutamos la sentencia de arriba, y si se ejecuta, imprime la sentencia anterior.
            if($id != null){

                $sentencia->execute();
                
                //echo json_encode(var_dump($patata)) . "\n";

                $cositas = json_encode($sentencia->fetchAll(PDO::FETCH_ASSOC),JSON_PRETTY_PRINT);
                print_r($cositas);

            }else{
                
                $query2 = "SELECT * FROM elementos";
                $sentencia = $pdo->prepare($query2);
                $sentencia->execute();
                $cositas = json_encode($sentencia->fetchAll(PDO::FETCH_ASSOC),JSON_PRETTY_PRINT);
                print_r($cositas);


            }

    }catch(PDOException $e){
        echo 'Fallo capito';

    }

    


    //Es la respuesta que se especifica, que en este caso si se ejecuta, 
    //coge el objeto de  arriba y lo 

    



    /*
    $sentencia->bindParam(':id', $id);
    
    if ($sentencia->execute()) {

        json_encode(print_r($sentencia->fetchAll(PDO::FETCH_ASSOC)));
    

    }else {
        echo "No se pudieron obtener correctamente capito";
    }
    //$element->guardar();

    */

    /*
    //$sql = 'SELECT $id FROM elementos order by nombre';

    foreach ($variable as $key => $value) {
        # code...
    }*/
?>