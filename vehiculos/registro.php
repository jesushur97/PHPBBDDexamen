<?php require_once('../plantillas/cabecera.php'); ?>

<article>
    <h2>Registrar nuevo vehículo</h2>

    <form action="insertar.php" method="post">
        <label>Matrícula: <input type="text" name="matricula" required></label><br>
        <label>Marca: <input type="text" name="marca" required></label><br>
        <label>Modelo: <input type="text" name="modelo" required></label><br>
        <label>Tipo: 
            <select name="tipo" required>
                <option value="turismo">Turismo</option>
                <option value="autobús">Autobús</option>
                <option value="camion">Camión</option>
                <option value="furgón">Furgón</option>
            </select>
        </label><br>
        <label>Color: <input type="text" name="color" required></label><br>
        <label>Fecha de matriculación: <input type="date" name="fecha_matriculacion"></label><br>
        <label>Cilindrada: <input type="text" name="cilindrada" min="0"></label><br>
        <label>ITV pasada: 
            <select name="itv_pasada">
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </label><br>
        <input type="submit" value="Registrar vehículo" class="btn btn-success">
    </form>
</article>

<?php require_once('../plantillas/pie.php'); ?>
