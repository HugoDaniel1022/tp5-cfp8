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
        <h1 class="bg-secondary-subtle text-primary text-center p-2">Visualización de ventas</h1>

        <!-- Tabla de Alumnos -->
        <table class="table table-success table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Nombre Producto</th>
                    <th scope="col">Cantidad Vendida</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once "php/front/tables/ventasTable.php"
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>