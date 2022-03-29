<?php
include "connection.php";


// Display user table
$sql = "SELECT *FROM cliente";
$result = $conn->query($sql);

if($result->num_rows > 0){
    
    while( $row = $result->fetch_assoc() ){
        $nombre = $row["nombre"];
        $apellidos = $row["apellidos"];
        $direccion = $row["direccion"];
        $numTel = $row["numTel"];
        $id = $row["id"];

        echo "<tr>
        <td>{$nombre}</td>
        <td>{$apellidos}</td>
        <td>{$direccion}</td>
        <td>{$numTel}</td>
        <td>
        <a href='edit.php?id={$id}' id='edit'>
            <i class='fa-solid fa-pen-to-square'></i>
        </a>
        <a href='deleteUser.php?id={$id}' id='delete'>
            </i><i class='fa-solid fa-trash'></i>
        </a>
        </td>
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

