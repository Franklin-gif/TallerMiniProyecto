<h2>Problema 5: Estadísticas y Clasificación de Edades</h2>
<p>Ingrese la edad de 5 personas para agruparlas por categorías y generar su gráfica de frecuencias.</p>

<form action="index.php?action=p5" method="POST">
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <div class="form-group">
            <label for="edad_<?php echo $i; ?>">Edad de la Persona <?php echo $i; ?>:</label>
            <input type="number" id="edad_<?php echo $i; ?>" name="edades[]" min="0" max="120" step="1" required placeholder="Ej. 25">
        </div>
    <?php endfor; ?>
    <button type="submit" class="btn-enviar">Procesar Categorías y Gráfica</button>
</form>

<br>
<a href="index.php?action=menu" class="btn-regresar">← Volver al Menú</a>