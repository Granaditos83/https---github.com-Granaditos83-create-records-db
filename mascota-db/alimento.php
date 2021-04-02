<?php
    
    $id = $_REQUEST['id'];
    $referencia = $_REQUEST['referencia'];
    $nombre_referencia = $_REQUEST['nombre_referencia'];
    $hora_suministro = $_REQUEST['hora_suministro'];

     
    $host = "localhost";
    $dbname ="mascota";
    $username ="root";
    $password ="";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    /*contruir la sentencia */
    $sql = "INSERT INTO tipo_alimentos (id,referencia, nombre_referencia, hora_suministro) 
    VALUES  ( '$id','$referencia', '$nombre_referencia', '$hora_suministro')";
    
    /*preparar la sentencia */
    $q = $cnx -> prepare ($sql);

    /*ejecutar la sentencia sql*/
    $result = $q -> execute();
    if ($result) {
       
        echo"🐾 alimento ingresado 🐾";
    } 
        else{
            echo"se ha producido un error";
        }