<h2>Problema 8: Detector de Estación del Año</h2>
<p>Seleccione un mes y digite el día correspondiente para calcular la estación climática exacta.</p>

<form action="index.php?action=p8" method="POST">
    <div class="form-group">
        <label for="mes">Seleccione el Mes:</label>
        <select id="mes" name="mes" required>
            <option value="">-- Elija un mes --</option>
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>
    </div>

    <div class="form-group">
        <label for="dia">Ingrese el Día:</label>
        <input type="number" id="dia" name="dia" min="1" max="31" step="1" required placeholder="Ej. 21">
    </div>

    <button type="submit" class="btn-enviar">Determinar Estación</button>
</form>

<br>
<a href="index.php?action=menu" class="btn-regresar">← Volver al Menú</a>