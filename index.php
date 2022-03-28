<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesome icons  -->
    <script src="https://kit.fontawesome.com/09af971b97.js" crossorigin="anonymous"></script>

    <!-- custom style  -->
    <link rel="stylesheet" href="styles.css">
    

    <title>Document</title>
</head>
<body class="bg-secondary">
    <?php include "header.php"; ?>
    <?php include "connection.php"?>
    
    <div class="row mt-3" style="margin:auto">
        <!-- Create User Form -->
        <div class="col-4">
            <div class="card ">
                <h1 class="card-header text-center ">Create User</h1>
                <div class="card-body">
                    <form action="registerUser.php" method="post">
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
                    <?php include "displayUser.php" ?>

                </tbody>
            </table>
        </div>
    </div>
    

    
    
        

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>