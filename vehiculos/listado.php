<?php require_once('../plantillas/cabecera.php'); ?>

<article>
    <h2>Listado de vehículos</h2>

    <table class="table table-striped table-bordered table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>Matrícula</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Tipo</th>
                <th>Color</th>
                <th>Fecha Matriculación</th>
                <th>Cilindrada</th>
                <th>ITV Pasada</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if (isset($_POST['filtrarFecha'])) {
    $fechaFiltro = $_POST['fechaFiltro'];
    $consulta = "SELECT * FROM vehiculos WHERE fecha_matriculacion > '$fechaFiltro'";
} else {
    $consulta = "SELECT * FROM vehiculos";
}

            $filas = mysqli_query($conexion, $consulta);
            while($fila = mysqli_fetch_array($filas)) {
                echo "<tr>";
                echo "<td>{$fila['matricula']}</td>";
                echo "<td>{$fila['marca']}</td>";
                echo "<td>{$fila['modelo']}</td>";
                echo "<td>{$fila['tipo']}</td>";
                echo "<td>{$fila['color']}</td>";
                echo "<td>{$fila['fecha_matriculacion']}</td>";
                echo "<td>{$fila['cilindrada']}</td>";
                echo "<td>" . ($fila['itv_pasada'] ? 'Sí' : 'No') . "</td>";
                echo "<td><a href='editar.php?matricula={$fila['matricula']}' class='btn btn-primary'>Editar</a></td>";
                echo "<td><a href='borrado.php?matricula={$fila['matricula']}' class='btn btn-danger'>Eliminar</a></td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
    <h3>Filtrar por fecha de matriculación</h3>
<form method="post" action="listado.php">
    <label for="fechaFiltro">Mostrar vehículos matriculados después de:</label>
    <input type="date" name="fechaFiltro" id="fechaFiltro" required>
    <input type="submit" name="filtrarFecha" value="Filtrar" class="btn btn-secondary">
    <a href="listado.php" class="btn btn-link">Limpiar filtro</a>
</form>

</article>

<?php require_once('../plantillas/pie.php'); ?>
