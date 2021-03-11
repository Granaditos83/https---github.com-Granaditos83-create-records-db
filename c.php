<?php


$conecta = mysqli_connect ('localhost', 'root', '', 'mascota') or die (mysql_error($mysqli));

insertar($conecta);


function insertar ($conecta){

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $nombrecientifico = $_POST['nombrecientifico'];


    $consulta = "INSERT TO INTO animales(id,nombre, edad, nombrecientifico)
    VALUES  ( '$id','$nombre', '$edad', '$nombrecientifico')";

    mysqli_query($conecta, $consulta);
    mysqli_close($conecta);

}
