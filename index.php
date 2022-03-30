<?php include "header.php"; ?>
<?php include "./database/connection.php"?>
    
<div class="row mt-3" style="margin:auto">
    <!-- Create User Form -->
    <div class="col-4">
        <div class="card ">
            <h1 class="card-header text-center ">Create User</h1>
            <div class="card-body">
                <form action="./database/registerUser.php" method="post">
                    <div class="form-floating mb-3 mt-1">
                        <input type="text" name="nombres" id="nombres" placeholder="Nombres" class="form-control">
                        <label for="nombres">Nombres</label>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" class="form-control">
                        <label for="apellidos">Apellidos</label>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="text" name="direccion" id="direccion" placeholder="Direccion" class="form-control">
                        <label for="direccion">Direccion</label>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <input type="tel" name="tel" id="tel" class="form-control" placeholder="Numero De Telefono">
                        <label for="tel">Numero de Telefono</label>
                    </div>

                    <div class="d-flex">
                        <button type="submit" class="btn btn-success ms-auto">Crear</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <!-- end Create user form -->

    <!-- Users table -->
    <div class="col-8">
        <table class="table table-light table-bordered table-hover ">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Num</th>
                    <th>Direccion</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php include "./database/displayUser.php" ?>

            </tbody>
        </table>
    </div>
</div>
<?php include "footer.php"?>