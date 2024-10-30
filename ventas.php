<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div container-lg>

        <!-- Menú de navegación -->
        <?php include_once "navbar.php"; ?>

        <!-- Banner -->
        <h1 class="bg-secondary-subtle text-primary text-center p-2">Manejo de Pedidos</h1>

        <!-- Formulario de Alumnos -->
        <form class="p-4 bg-info-subtle">

            <!-- Pedido -->
            <div class="mb-3 row">
                <label for="pedido" class="col-sm-3 col-form-label text-primary">Pedido</label>
                <div class="col-sm-9">
                    <select id="pedido" name="id_curso" class="form-select text-primary" aria-label="Default select example">
                    </select>
                </div>
            </div>

            <!-- Producto -->
            <div class="mb-3 row">
                <label for="producto" class="col-sm-3 col-form-label text-primary">Producto</label>
                <div class="col-sm-9">
                    <select id="producto" name="id_curso" class="form-select text-primary" aria-label="Default select example">
                    </select>
                </div>
            </div>

            <!-- Cantidad -->
            <div class="mb-3 row">
                <label for="cantidad" class="col-sm-3 col-form-label text-primary">Cantidad</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control text-primary" id="cantidad"
                        name="cantidad" value="0" min="0">
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
                        0
                    </div>
                </div>
            </div>
        </form>
        <!-- Tabla de Alumnos -->
        <table class="table table-success table-striped table-hover">
            <thead>
                <tr>
                    <!-- <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono</th> -->
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>