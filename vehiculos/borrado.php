<?php
require_once('../config.php');

$matricula = $_GET['matricula'];
$consulta = "DELETE FROM vehiculos WHERE matricula=?";
$preparada = mysqli_prepare($conexion, $consulta);
mysqli_stmt_bind_param($preparada, 's', $matricula);
mysqli_stmt_execute($preparada);

$_SESSION['mensaje'] = mysqli_affected_rows($conexion) == 1
    ? "Vehículo eliminado correctamente."
    : "Error al eliminar el vehículo.";

header('Location: listado.php');
?>
