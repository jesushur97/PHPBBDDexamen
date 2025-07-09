<?php
require_once('../config.php');

$matricula = $_POST['matricula'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];
$color = $_POST['color'];
$fecha = $_POST['fecha_matriculacion'];
$cilindrada = $_POST['cilindrada'];
$itv = $_POST['itv_pasada'];

$consulta = "UPDATE vehiculos SET marca=?, modelo=?, tipo=?, color=?, fecha_matriculacion=?, cilindrada=?, itv_pasada=? WHERE matricula=?";
$preparada = mysqli_prepare($conexion, $consulta);
mysqli_stmt_bind_param($preparada, 'sssssdss', $marca, $modelo, $tipo, $color, $fecha, $cilindrada, $itv, $matricula);
mysqli_stmt_execute($preparada);

header('Location: listado.php');
?>
