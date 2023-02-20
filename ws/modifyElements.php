<?php

include_once "conexion.php";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $numSerie = $_POST['nserie'];
        $estado = $_POST['estado'];
        $prioridad = $_POST['prioridad'];
        
            //Creamos un array en el que introduciremos después todos los datos
        
            try{
                //Pongo las variables
                $success = true;
                $message = 'Se ha podido actualizar los datos perfectamente';
                // Creamos la instrucción que queremos que se cree
                $query = "UPDATE elementos SET nombre = :nombre , descripcion = :descripcion, nserie = :nserie, estado = :estado, prioridad = :prioridad WHERE id = :id";
                $sentencia = $pdo->prepare($query);
                // Asignamos los valores a los marcadores de posición
                $valores = array(
                    ':id' => $id,
                    ':nombre' => $nombre,
                    ':descripcion' => $descripcion,
                    ':nserie' => $numSerie,
                    ':estado' => $estado,
                    ':prioridad' => $prioridad,
                );
                // La ejecutamos con los valores asignados
                $sentencia->execute($valores);
                // Imprimimos el resultado
                $patata = array('success' => $success, 'message' => $message, 'data'=> $valores);
                echo json_encode($patata) . "\n";
        
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

?>