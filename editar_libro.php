<?php
include "conexion.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $especialidad = $_POST['especialidad'];
    $año = $_POST['año'];
    $url = $_POST['url'];

    $sql = "UPDATE libros SET titulo='$titulo', autor='$autor', editorial='$editorial', especialidad='$especialidad', año='$año', url='$url' WHERE id=$id";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado) {
        header("Location: index.php?msg=Actualización exitosa");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM libros WHERE id=$id";
$resultado = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($resultado);
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
            <h2>Editar Libro</h2>
            <p class="text-muted">Complete los campos requeridos para actualizar los libros</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="POST" style="width:50vw; min-width:300px">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
               <div class="row">
                    <div class="col">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" class="form-control" name="titulo" value="<?php echo $row['titulo']; ?>">
                    </div>
                    <div class="col">
                        <label for="autor" class="form-label">Autor:</label>
                        <input type="text" class="form-control" name="autor" value="<?php echo $row['autor']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="editorial" class="form-label">Editorial:</label>
                        <input type="text" class="form-control" name="editorial" value="<?php echo $row['editorial']; ?>">
                    </div>
                    <div class="col">
                        <label for="especialidad" class="form-label">Especialidad:</label>
                        <input type="text" class="form-control" name="especialidad" value="<?php echo $row['especialidad']; ?>">
                    </div>
                </div>
                <div class="row">
                <div class="col">
                    <label for="año" class="form-label">Año:</label>
                    <div style="position: relative;">
                        <input type="date" name="año" class="form-control" value="<?php echo $row['año']; ?>">
                        <span style="position: absolute; top: 8px; right: 8px; pointer-events: none;">&#128197;</span>
                    </div>
                </div>
                    <div class="col">
                        <label for="url" class="form-label">URL:</label>
                        <input type="text" class="form-control" name="url" value="<?php echo $row['url']; ?>">
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-success" name="submit">Actualizar</button>
                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>