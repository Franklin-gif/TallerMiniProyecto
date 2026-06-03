<h2>Problema 1: Cálculo de Media y Desviación Estándar</h2>
<p>Ingrese 5 números positivos para calcular sus estadísticas descriptivas muestrales.</p>

<form action="index.php?action=p1" method="POST">
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <div class="form-group">
            <label>Número <?php echo $i; ?>:</label>
            <input type="number" name="numeros[]" step="any" min="0" required>
        </div>
    <?php endfor; ?>
    <button type="submit" class="btn-enviar">Calcular Estadísticas</button>
</form>

<br>
<a href="index.php?action=menu" class="btn-regresar">← Volver</a>