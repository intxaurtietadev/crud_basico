<?php
include('connection.php');
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$poblacion = $_POST['poblacion'];
$codigopostal = $_POST['codigopostal'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];


$sql= "INSERT INTO clientes VALUES('$id','$nombre','$apellidos','$direccion','$poblacion','$codigopostal','$telefono','$email')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};

?>