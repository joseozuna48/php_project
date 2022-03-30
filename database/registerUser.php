<?php

include "./connection.php";
// save Variables
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$direccion = $_POST["direccion"];
$tel = $_POST["tel"];



$sql = "INSERT INTO cliente(nombre,apellidos,direccion,numTel)
VALUES('" . $nombres . "','". $apellidos . "','" . $direccion . "','". $tel . "')";

// echo $sql;

if($conn->query($sql) == TRUE){
    echo "New record created successfully.";
    header('Location: ../index.php');
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>