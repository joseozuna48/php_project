<?php
include "./connection.php";



$sql = "DELETE FROM cliente WHERE id = {$_GET['id']}";

// echo $sql;

if($conn->query($sql) == TRUE){
    echo "Cliente deleted succesfully.";
    header('Location: ../index.php');
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>