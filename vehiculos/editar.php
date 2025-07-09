<?php
require_once('../plantillas/cabecera.php');

$matricula = $_GET['matricula'];
$consulta = "SELECT * FROM vehiculos WHERE matricula='$matricula'";
$resultado = mysqli_query($conexion, $consulta);
$fila = mysqli_fetch_array($resultado);
?>

<article>
    <h2>Editar vehículo</h2>

    <form action="actualizar.php" method="post">
        <input type="hidden" name="matricula" value="<?=$fila['matricula']?>">

        <label>Marca: <input type="text" name="marca" value="<?=$fila['marca']?>" required></label><br>
        <label>Modelo: <input type="text" name="modelo" value="<?=$fila['modelo']?>" required></label><br>
        <label>Tipo:
            <select name="tipo">
                <?php
                foreach (['turismo','autobús','camion','furgón'] as $tipo) {
                    $selected = $fila['tipo'] == $tipo ? 'selected' : '';
                    echo "<option value='$tipo' $selected>$tipo</option>";
                }
                ?>
            </select>
        </label><br>
        <label>Color: <input type="text" name="color" value="<?=$fila['color']?>" required></label><br>
        <label>Fecha de matriculación: <input type="date" name="fecha_matriculacion" value="<?=$fila['fecha_matriculacion']?>"></label><br>
        <label>Cilindrada: <input type="number" name="cilindrada" value="<?=$fila['cilindrada']?>"></label><br>
        <label>ITV pasada:
            <select name="itv_pasada">
                <option value="1" <?=$fila['itv_pasada'] ? 'selected' : ''?>>Sí</option>
                <option value="0" <?=!$fila['itv_pasada'] ? 'selected' : ''?>>No</option>
            </select>
        </label><br>
        <input type="submit" value="Actualizar vehículo" class="btn btn-primary">
    </form>
</article>

<?php require_once('../plantillas/pie.php'); ?>
