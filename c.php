
<?php
    
    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $edad = $_REQUEST['edad'];
    $nombrecientifico = $_REQUEST['nombrecientifico'];

     
    $host = "localhost";
    $dbname ="mascota";
    $username ="root";
    $password ="";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    /*contruir la sentencia */
    $sql = "INSERT INTO animales (id,nombre, edad, nombrecientifico) 
    VALUES  ( '$id','$nombre', '$edad', '$nombrecientifico')";
    
    /*preparar la sentencia */
    $q = $cnx -> prepare ($sql);

    /*ejecutar la sentencia sql*/
    $result = $q -> execute();
    if ($result) {
       
        echo"🐾 El animal fue guardado con exito 🐾";
    } 
        else{
            echo"se ha producido un error";
        }