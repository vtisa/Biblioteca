<?php
include "conexion.php";

$sql = "SELECT * FROM libros";

$resultado = mysqli_query($conn, $sql);
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Biblioteca Virtual</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body style="background-color:#E5E8E8;">
<nav class="navbar navbar-light justify-content-center mb-5" style="background-color: #FF8000;">
    <h1>Biblioteca Digital</h1>
</nav>



<div class="container" style="max-width: fit-content;" class="resposive">

    <?php
      if  (isset($_GET['msg'])){
        $msg = $_GET['msg'];
        echo'<div class="alert alert-warning" role="alert">
        '.$msg.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
    ?>

    <a href="agregar_libro.php" class="btn btn-primary mb-3">Agregar Libro</a>
<div class="table-responsive">
<table id="table-id" class="table table-hover text-center">
    <thead class= "table-dark">
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Especialidad</th>
            <th>Año</th>
            <th>Enlace</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
       while($row = mysqli_fetch_assoc($resultado)){
        ?>
       <tr>
          <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['titulo'] ?></td>
          <td><?php echo $row['autor'] ?></td>
          <td><?php echo $row['editorial'] ?></td>
          <td><?php echo $row['especialidad'] ?></td>
          <td><?php echo $row['año'] ?></td>
          <td><a href="<?php echo $row['url'] ?>" class="btn btn-info btn-sm"><i class="bi bi-book"></i><br>Leer libro</a></td>
          <td>
              <a href="editar_libro.php?id=<?php echo $row['id'] ?>" class="btn btn-success"><i class="bi bi-pencil-square fs-6"></i></a>
              <a href="eliminar_libro.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash fs-6"></i></a>
          </td>
        </tr>
  
        <?php
        }
      ?>
    </tbody>
    </table>
</div>
</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>