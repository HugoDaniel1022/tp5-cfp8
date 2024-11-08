<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body onload="mueveReloj()">
    <div container-lg>

        <!-- Menú de navegación -->
        <?php include_once "navbar.php"; ?>
            
        <!-- Banner -->
        <h1 class="bg-secondary-subtle text-primary text-center p-2">Gestión de Clientes</h1>

        <!-- Formulario de Alumnos -->
        <form class="p-4 bg-info-subtle">

            <!-- Nombre -->
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-3 col-form-label text-primary">Nombre</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="nombre"
                        name="nombre" value="">
                </div>
            </div>

            <!-- Apellido -->
            <div class="mb-3 row">
                <label for="apellido" class="col-sm-3 col-form-label text-primary">Apellido</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="apellido"
                        name="apellido" value="">
                </div>
            </div>

            <!-- Direccion -->
            <div class="mb-3 row">
                <label for="direccion" class="col-sm-3 col-form-label text-primary">Direccion</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="direccion"
                        name="direccion" value="">
                </div>
            </div>

            <!-- Ciudad -->
            <div class="mb-3 row">
                <label for="ciudad" class="col-sm-3 col-form-label text-primary">Ciudad</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="ciudad"
                        name="ciudad" value="">
                </div>
            </div>

            <!-- Email -->
            <div class="mb-3 row">
                <label for="email" class="col-sm-3 col-form-label text-primary">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="email"
                        name="email" value="">
                </div>
            </div>

            <!-- Telefono -->
            <div class="mb-3 row">
                <label for="telefono" class="col-sm-3 col-form-label text-primary">Telefono</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="telefono"
                        name="telefono" value="">
                </div>
            </div>


            <!-- Botones-->
            <div class="mb-3 row">
                <button type="submit" class="btn btn-success col-sm-3 m-2">Guardar</button>
                <button type="reset" class="btn btn-danger col-sm-3 m-2">Borrar</button>
            </div>

            <!-- Información -->
            <div class="mb-3 row">
                <label for="info" class="col-sm-3 col-form-label text-primary">Información</label>
                <div class="col-sm-9">
                    <div class="form-control text-primary" id="info">
                        <?php include_once "php/front/inserts/clientesInsert.php"; ?>
                        
                    </div>
                </div>
            </div>
        </form>
        <!-- Tabla de Alumnos -->
        <table class="table table-success table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php include_once "php/front/tables/clientesTable.php"; ?>
                <?php include_once 'php/front/deletes/clientesDelete.php'; ?>
            </tbody>
        </table>
    </div>
    <!-- <script src="js/reloj.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>