<?php include "connection.php"?>
<?php 
    
    if(isset($_POST["edit"])){
        $id = $_GET['id'];

        $sql = "UPDATE cliente 
        SET nombre = '{$_POST["nombres"]}' , apellidos = '{$_POST["apellidos"]}', direccion = '{$_POST["direccion"]}', numTel = '{$_POST["tel"]}' 
        WHERE id = {$id}";
        $conn->query($sql);
        header('Location: index.php');
    }

    $sql = "SELECT * FROM cliente WHERE id={$_GET['id']} ";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $nombre = $row["nombre"];
    $apellidos = $row["apellidos"];
    $direccion = $row["direccion"];
    $numTel = $row["numTel"];
    

?>

<?php include "header.php"?>

    <div class="col-4 mt-5" style="margin:auto" >
        <div class="card ">
            <h1 class="card-header text-center ">Editar usuario</h1>
            <div class="card-body">
                <form action="editUser.php?id=<?php echo $_GET['id']?>" method="post">
                    <div class="form-floating mb-3 mt-1">
                        <input type="text" name="nombres" id="nombres" placeholder="Nombres" class="form-control" value=<?php echo "{$nombre}" ?> >
                        <label for="nombres">Nombres</label>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" class="form-control" value=<?php echo "{$apellidos}" ?>>
                        <label for="apellidos">Apellidos</label>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="text" name="direccion" id="direccion" placeholder="Direccion" class="form-control" value=<?php echo "{$direccion}" ?>>
                        <label for="direccion">Direccion</label>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="tel" name="tel" id="tel" class="form-control" placeholder="Numero De Telefono" value=<?php echo "{$numTel}" ?>>
                        <label for="tel">Numero de Telefono</label>
                    </div>

                    <div class="d-flex">
                        <button class="btn btn-success ms-auto" name="edit">Editar</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php"?>