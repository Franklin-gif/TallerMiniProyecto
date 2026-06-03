<h2>Problema 8: Detector de Estación del Año</h2>
<p>Seleccione un mes y digite el día correspondiente para calcular la estación climática exacta.</p>

<form action="index.php?action=p8" method="POST">
    <div class="form-group">
        <label for="fecha">Seleccione una Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>
    </div>

    <button type="submit" class="btn-enviar">Determinar Estación</button>
</form>

<br>
<a href="index.php?action=menu" class="btn-regresar">← Volver al Menú</a>