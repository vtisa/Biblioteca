<?php
include "conexion.php";

if (isset($_POST['submit'])) {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $especialidad = $_POST['especialidad'];
    $año = $_POST['año'];
    $url = $_POST['url'];

    $sql = "INSERT INTO `libros` (`titulo`, `autor`, `editorial`, `especialidad`, `año`, `url`) VALUES ('$titulo', '$autor', '$editorial', '$especialidad', '$año', '$url')";

    $resultado = mysqli_query($conn, $sql);

    if ($resultado){
        header("Location: index.php?msg=Libro agregado");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca Virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#E5E8E8;">
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #FF8000;">
        <h1>Biblioteca Digital</h1>
    </nav>
    <div class="container">
        <div class="text-center mb-4">
            <h2>Agregar Libro</h2>
            <p class="text-muted">Complete los campos requeridos para agregar un libro.</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="POST" style="width:50vw; min-width:300px">
            <div class="row">
                <div class="col">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" name="titulo" class="form-control" required>
                </div>

                <div class="col">
                    <label for="autor" class="form-label">Autor:</label>
                    <input type="text" name="autor" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="editorial" class="form-label">Editorial:</label>
                    <input type="text" name="editorial" class="form-control" required>
                </div>

                <div class="col">
                    <label for="especialidad" class="form-label">Especialidad:</label>
                    <input type="text" name="especialidad" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="año" class="form-label">Año:</label>
                    <div style="position: relative;">
                        <input type="date" name="año" class="form-control" required>
                        <span style="position: absolute; top: 8px; right: 8px; pointer-events: none;">&#128197;</span>
                    </div>
                </div>

                <div class="col">
                    <label for="url" class="form-label">URL:</label>
                    <input type="text" name="url" class="form-control" required>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-success" name="submit">Agregar</button>
                <a href="index.php" class="btn btn-danger">Cancelar</a>
            </div>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>