<?php
 $conectar = mysqli_connect('localhost','root','Linda123', 'programa');

 if(!$conectar){
     echo "No conectado";
 }

 $nombre = $_POST['nombre'];
 $correo = $_POST['correo'];

 $sql = "INSERT INTO usuarios(nombre, correo_electronico) VALUES ('$nombre', '$correo')";

 $ejecutar = mysqli_query($conectar, $sql);

 if(!$ejecutar){
     echo "Hay algun error";
 }else{
     echo "Datos almacenados correctamente";
 }
?>