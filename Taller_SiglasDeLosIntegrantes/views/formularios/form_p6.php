<h2>Problema 6: Distribución de Presupuesto Hospitalario</h2>
<p>Ingrese el presupuesto anual total del hospital para calcular el desglose por áreas y pintar la gráfica de pastel.</p>

<form action="index.php?action=p6" method="POST">
    <div class="form-group">
        <label for="monto">Monto Total del Presupuesto ($):</label>
        <input type="number" id="monto" name="monto" min="0.01" step="0.01" required placeholder="Ej. 500000">
    </div>
    <button type="submit" class="btn-enviar">Calcular Distribución</button>
</form>

<br>
<a href="index.php?action=menu" class="btn-regresar">← Volver al Menú</a>