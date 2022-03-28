<?php
include "connection.php";


// Display user table
$sql = "SELECT nombre, apellidos, direccion, numTel FROM cliente";
$result = $conn->query($sql);

if($result->num_rows > 0){
    
    while( $row = $result->fetch_assoc() ){
        $nombre = $row["nombre"];
        $apellidos = $row["apellidos"];
        $direccion = $row["direccion"];
        $numTel = $row["numTel"];

        echo "<tr>
        <td>{$nombre}</td>
        <td>{$apellidos}</td>
        <td>{$direccion}</td>
        <td>{$numTel}</td>
        <td><i class='fa-solid fa-pen-to-square'></i><i class='fa-solid fa-trash'></i></td>
    </tr>";
    }

}else{
    echo "<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>";
}



?>