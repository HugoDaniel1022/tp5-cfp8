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
        <h1 class="bg-secondary-subtle text-primary text-center p-2">Gestión de Productos</h1>

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

            <!-- Codigo de referencia -->
            <div class="mb-3 row">
                <label for="cod_ref" class="col-sm-3 col-form-label text-primary">Codigo de referencia</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control text-primary" id="cod_ref"
                        name="cod_ref" value="">
                </div>
            </div>

            <!-- Precio -->
            <div class="mb-3 row">
                <label for="precio" class="col-sm-3 col-form-label text-primary">Precio</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control text-primary" id="precio"
                        name="precio" value="0" min="0">
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
                        <?php
                        include_once "php/front/inserts/productosInsert.php";
                        ?>
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
                    <th scope="col">Codigo_ref</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php include_once "php/front/tables/productosTable.php" ?>
                <?php include_once 'php/front/deletes/productosDelete.php'; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>