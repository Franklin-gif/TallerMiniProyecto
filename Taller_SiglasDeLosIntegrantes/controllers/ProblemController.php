<?php
// controllers/ProblemController.php
require_once __DIR__ . '/../models/Utilidades.php';

class ProblemController {

    // Problema 1: Media, desviación estándar, min y máx de 5 números positivos
    public static function resolverProblema1($numeros) {
        if (count($numeros) !== 5) return ["error" => "Deben ser exactamente 5 números."];
        
        $suma = array_sum($numeros);
        $media = $suma / 5;
        $min = min($numeros);
        $max = max($numeros);
        
        $sumaVariancia = 0;
        foreach ($numeros as $num) {
            $sumaVariancia += pow(($num - $media), 2);
        }
        // Fórmula de desviación estándar muestral: s = sqrt( sum(x - media)^2 / (n - 1) )
        $desviacion = Utilidades::calcularRaiz($sumaVariancia / (5 - 1));

        return compact('media', 'desviacion', 'min', 'max');
    }

    // Problema 2: Suma de los números del 1 al 1,000
    public static function resolverProblema2() {
        $suma = 0;
        for ($i = 1; $i <= 1000; $i++) {
            $suma += $i; // Resultado esperado: 500500
        }
        return ["resultado" => $suma];
    }

    // Problema 3: Suma independiente de números pares e impares entre 1 y 200
    public static function resolverProblema3() {
        $pares = 0;
        $impares = 0;
        $i = 1;
        while ($i <= 200) {
            if ($i % 2 === 0) {
                $pares += $i;
            } else {
                $impares += $i;
            }
            $i++;
        }
        return ["pares" => $pares, "impares" => $impares];
    }

    // Problema 4: Imprimir los N-primeros múltiplos de 4
    public static function resolverProblema4($n) {
        $multiplos = [];
        for ($i = 1; $i <= $n; $i++) {
            $multiplos[] = 4 * $i;
        }
        return ["n" => $n, "multiplos" => $multiplos];
    }

    // Problema 5: Edades de 5 personas con categorías y estadísticas
    public static function resolverProblema5($edades) {
        $categorias = ['niño' => 0, 'adolescente' => 0, 'adulto' => 0, 'adulto_mayor' => 0];
        $conteoEdades = [];

        foreach ($edades as $edad) {
            if ($edad >= 0 && $edad <= 12) $categorias['niño']++;
            elseif ($edad >= 13 && $edad <= 17) $categorias['adolescente']++;
            elseif ($edad >= 18 && $edad <= 64) $categorias['adulto']++;
            elseif ($edad >= 65) $categorias['adulto_mayor']++;

            $conteoEdades[$edad] = isset($conteoEdades[$edad]) ? $conteoEdades[$edad] + 1 : 1;
        }
        return compact('categorias', 'conteoEdades');
    }

    // Problema 6: Presupuesto Hospitalario
    public static function resolverProblema6($presupuestoTotal) {
        // Ginecología 40%, Traumatología 35%, Pediatría 25%
        return [
            "Ginecología" => $presupuestoTotal * 0.40,
            "Traumatología" => $presupuestoTotal * 0.35,
            "Pediatría" => $presupuestoTotal * 0.25,
            "Total" => $presupuestoTotal
        ];
    }

    // Problema 7: Calculadora de Datos Estadísticos por N cantidad de notas
    public static function resolverProblema7($notas) {
        $n = count($notas);
        if ($n === 0) return ["error" => "No se introdujeron notas."];

        $media = array_sum($notas) / $n;
        $min = min($notas);
        $max = max($notas);

        $sumaVariancia = 0;
        foreach ($notas as $nota) {
            $sumaVariancia += pow(($nota - $media), 2);
        }
        $desviacion = ($n > 1) ? Utilidades::calcularRaiz($sumaVariancia / ($n - 1)) : 0;

        return compact('media', 'desviacion', 'min', 'max', 'notas');
    }

    // Problema 8: Estación del Año dada una fecha (Formato YYYY-MM-DD)
    public static function resolverProblema8($fechaInput) {
        $timestamp = strtotime($fechaInput);
        $mes = (int)date('m', $timestamp);
        $dia = (int)date('d', $timestamp);
        $fechaFormato = date('d/m', $timestamp);
        
        // Conversión a valor numérico comparable (Mes * 100 + Día)
        $valor = ($mes * 100) + $dia;

        // Estaciones según tabla proporcionada apuntando a la carpeta img/
  if ($valor >= 1221 || $valor <= 320) {
    $estacion = "Verano" . " <img src='../img/verano.jpg' alt='Verano'>";
} elseif ($valor >= 321 && $valor <= 621) {
    $estacion = "Otoño" . " <img src='../img/otoño.jpg' alt='Otoño'>";
} elseif ($valor >= 622 && $valor <= 922) {
    $estacion = "Invierno" . " <img src='../img/invierno.jpg' alt='Invierno'>";
} else {
    $estacion = "Primavera" . " <img src='../img/primavera.jpg' alt='Primavera'>";
}
        return ["fecha" => $fechaFormato, "estacion" => $estacion];
    }

    // Problema 9: 15 primeras potencias de un número (1 al 9)
    public static function resolverProblema9($base) {
        if ($base < 1 || $base > 9) return ["error" => "Número fuera de rango (1-9)."];
        
        $potencias = [];
        for ($exponente = 1; $exponente <= 15; $exponente++) {
            $potencias[$exponente] = pow($base, $exponente);
        }
        return ["base" => $base, "potencias" => $potencias];
    }
}