<h2>Problema 7: Calculadora Estadística de Notas Escolares</h2>
<p>Haga clic en "Añadir otra nota" para ingresar la cantidad de calificaciones que requiera procesar.</p>

<form action="index.php?action=p7" method="POST">
    <div id="contenedor-notas">
        <div class="form-group">
            <label>Nota 1:</label>
            <input type="number" name="notas[]" min="0" max="100" step="0.01" required placeholder="Ej. 91.5">
        </div>
    </div>
    
    <div style="margin-bottom: 20px;">
        <button type="button" onclick="agregarNotaField()" style="background: #17a2b8; color: white; padding: 8px 12px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">
            + Añadir otra nota
        </button>
    </div>

    <button type="submit" class="btn-enviar">Calcular Análisis de Notas</button>
</form>

<script>
    let contadorNotas = 1;
    function agregarNotaField() {
        contadorNotas++;
        const contenedor = document.getElementById('contenedor-notas');
        const div = document.createElement('div');
        div.className = 'form-group';
        div.innerHTML = `
            <label>Nota ${contadorNotas}:</label>
            <input type="number" name="notas[]" min="0" max="100" step="0.01" required placeholder="Ej. 85.0">
        `;
        contenedor.appendChild(div);
    }
</script>

<br>
<a href="index.php?action=menu" class="btn-regresar">← Volver al Menú</a>