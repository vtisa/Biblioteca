<?php
include "conexion.php";

$id = $_GET['id'];
$sql = "DELETE FROM libros WHERE id=$id";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    header("Location: index.php?msg=libro eliminado");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>