<?php
// views/resultado.php
require_once __DIR__ . '/../models/Utilidades.php';

echo "<h2>Resultados Procesados</h2>";

if (isset($resultado['error'])) {
    echo "<p class='error'>" . Utilidades::sanitizarXSS($resultado['error']) . "</p>";
} else {
    switch ($action) {
        case 'p1':
            echo "<table class='tabla-resultados'>
                    <tr><th>Métrica</th><th>Valor</th></tr>
                    <tr><td>Media Aritmética</td><td>" . number_format($resultado['media'], 2) . "</td></tr>
                    <tr><td>Desviación Estándar Muestral</td><td>" . number_format($resultado['desviacion'], 4) . "</td></tr>
                    <tr><td>Valor Mínimo</td><td>" . $resultado['min'] . "</td></tr>
                    <tr><td>Valor Máximo</td><td>" . $resultado['max'] . "</td></tr>
                  </table>";
            break;

        case 'p2':
            echo "<p>La suma acumulada de los números consecutivos del 1 al 1,000 es: <strong>" . $resultado['resultado'] . "</strong></p>";
            break;

        case 'p3':
            echo "<table class='tabla-resultados'>
                    <tr><th>Grupo Numérico (1 - 200)</th><th>Suma Total Acumulada</th></tr>
                    <tr><td>Números Pares</td><td>" . $resultado['pares'] . "</td></tr>
                    <tr><td>Números Impares</td><td>" . $resultado['impares'] . "</td></tr>
                  </table>";
            break;

        case 'p4':
            echo "<p>Los primeros <strong>" . $resultado['n'] . "</strong> múltiplos de 4 son:</p><ul>";
            foreach ($resultado['multiplos'] as $m) {
                echo "<li>Múltiplo: " . $m . "</li>";
            }
            echo "</ul>";
            break;

        case 'p5':
            echo "<p>Distribución de frecuencias por rangos de edad:</p>";
            echo "<ul>";
            foreach ($resultado['categorias'] as $cat => $cant) {
                echo "<li><strong>$cat:</strong> $cant personas</li>";
            }
            echo "</ul>";
            // Gráfica de Barras Exigida por Rúbrica
            ?>
            <div class="chart-box"><canvas id="chartP5"></canvas></div>
            <script>
                new Chart(document.getElementById('chartP5'), {
                    type: 'bar',
                    data: {
                        labels: <?php echo json_encode(array_keys($resultado['categorias'])); ?>,
                        datasets: [{
                            label: 'Conteo de Personas',
                            data: <?php echo json_encode(array_values($resultado['categorias'])); ?>,
                            backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe', '#ffce56']
                        }]
                    }
                });
            </script>
            <?php
            break;

        case 'p6':
            echo "<p>El presupuesto total de <strong>$" . number_format($resultado['Total'], 2) . "</strong> se divide en:</p>";
            ?>
            <div class="chart-box"><canvas id="chartP6"></canvas></div>
            <script>
                new Chart(document.getElementById('chartP6'), {
                    type: 'pie',
                    data: {
                        labels: ['Ginecología (40%)', 'Traumatología (35%)', 'Pediatría (25%)'],
                        datasets: [{
                            data: [<?php echo $resultado['Ginecología (40%)'] . "," . $resultado['Traumatología (35%)'] . "," . $resultado['Pediatría (25%)']; ?>],
                            backgroundColor: ['#e74c3c', '#3498db', '#2ecc71']
                        }]
                    }
                });
            </script>
            <?php
            break;

        case 'p7':
            echo "<p>Análisis estadístico del grupo de notas introducidas:</p>";
            echo "<table class='tabla-resultados'>
                    <tr><td>Cantidad de Notas Procesadas</td><td>" . count($resultado['notas']) . "</td></tr>
                    <tr><td>Promedio Final</td><td>" . number_format($resultado['media'], 2) . "</td></tr>
                    <tr><td>Desviación Estándar</td><td>" . number_format($resultado['desviacion'], 4) . "</td></tr>
                    <tr><td>Nota Mínima</td><td>" . $resultado['min'] . "</td></tr>
                    <tr><td>Nota Máxima</td><td>" . $resultado['max'] . "</td></tr>
                  </table>";
            break;

        case 'p8':
            echo "<p>Para la fecha indicada (Día/Mes: <strong>" . $resultado['fecha'] . "</strong>), la estación climática correspondiente es: <strong>" . $resultado['estacion'] . "</strong></p>";
            break;

        case 'p9':
            echo "<p>Las 15 primeras potencias para la base de número [<strong>" . $resultado['base'] . "</strong>]:</p>";
            echo "<table class='tabla-resultados'><tr><th>Exponente</th><th>Resultado</th></tr>";
            foreach ($resultado['potencias'] as $exp => $val) {
                echo "<tr><td>" . $resultado['base'] . "<sup>$exp</sup></td><td>" . number_format($val, 0, '', ',') . "</td></tr>";
            }
            echo "</table>";
            break;
    }
}

echo Utilidades::generarEnlaceMenu();