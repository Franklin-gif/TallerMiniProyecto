<h2>Problema 9: Las 15 Primeras Potencias</h2>
<p>Seleccione un número del 1 al 9 para calcular sus primeras 15 potencias.</p>

<form action="index.php?action=p9" method="POST">
    <div class="form-group">
        <label for="base">Seleccione la Base (1-9):</label>
        <select id="base" name="base" required>
            <option value="">-- Elija un número --</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
    </div>
    <button type="submit" class="btn-enviar">Calcular Potencias</button>
</form>

<br>
<a href="index.php?action=menu" class="btn-regresar">← Volver al Menú</a>
