<?php
    //Indicamos datos importantes de la base de datos
    $host = '127.0.0.1'; 
    $user = 'root';
    $password = '';
    $port = '3306';
    $dbname = 'monfab';
    $dsnErr = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        //Probamos si hay conexion mediante un try-catch, si no funciona dará un mensaje de error, en cambio si funciona funcionará correctamente
        try{
            //creamos una nueva instancia de la clase PDO y ponemos los datos de nuestra conexión
            $dsn = "mysql:name=$host;port=3306;dbname=$dbname;";			
            $pdo = new PDO($dsn,$user,$password, $dsnErr);
            //Si no da error la conexion es exitosa
            //echo 'Conexion exitosa';
        } catch (PDOException $e){
            //Si no, la conexion es erronea
            echo "ERROR: ". $e->getMessage();
        }
    

    
    
?>