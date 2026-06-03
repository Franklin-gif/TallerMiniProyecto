<?php
// controllers/Controller.php
require_once __DIR__ . '/../models/Utilidades.php';

class Controller {

    // P1: Media, Desviación Estándar, Mínimo y Máximo de 5 números
    public static function resolverProblema1($numeros) {
        if (count($numeros) !== 5) {
            return ["error" => "Debes introducir exactamente 5 números válidos."];
        }
        $media = array_sum($numeros) / 5;
        $min = min($numeros);
        $max = max($numeros);
        
        $sumaVariancia = 0;
        foreach ($numeros as $num) {
            $sumaVariancia += pow(($num - $media), 2);
        }
        $desviacion = sqrt($sumaVariancia / (5 - 1)); // Desviación estándar muestral

        return compact('media', 'desviacion', 'min', 'max');
    }

    // P2: Suma fija del 1 al 1,000 (Ciclo For)
    public static function resolverProblema2() {
        $suma = 0;
        for ($i = 1; $i <= 1000; $i++) {
            $suma += $i;
        }
        return ["resultado" => $suma];
    }

    // P3: Sumas independientes de pares e impares del 1 al 200 (Ciclo While)
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

    // P4: Los N primeros múltiplos de 4
    public static function resolverProblema4($n) {
        if ($n <= 0) return ["error" => "El valor de N debe ser mayor a cero."];
        $multiplos = [];
        for ($i = 1; $i <= $n; $i++) {
            $multiplos[] = 4 * $i;
        }
        return ["multiplos" => $multiplos, "n" => $n];
    }

    // P5: Distribución de Edades
    public static function resolverProblema5($edades) {
        if (count($edades) !== 5) return ["error" => "Debes ingresar 5 edades."];
        $categorias = ['Niño (0-12)' => 0, 'Adolescente (13-17)' => 0, 'Adulto (18-64)' => 0, 'Adulto Mayor (65+)' => 0];
        
        foreach ($edades as $edad) {
            if ($edad <= 12) $categorias['Niño (0-12)']++;
            elseif ($edad <= 17) $categorias['Adolescente (13-17)']++;
            elseif ($edad <= 64) $categorias['Adulto (18-64)']++;
            else $categorias['Adulto Mayor (65+)']++;
        }
        return ["categorias" => $categorias];
    }

    // P6: Presupuesto del Hospital (40%, 35%, 25%)
    public static function resolverProblema6($monto) {
        if ($monto <= 0) return ["error" => "El presupuesto debe ser un monto mayor a 0."];
        return [
            "Ginecología (40%)" => $monto * 0.40,
            "Traumatología (35%)" => $monto * 0.35,
            "Pediatría (25%)" => $monto * 0.25,
            "Total" => $monto
        ];
    }

    // P7: Calculadora dinámica de Notas Escolares
    public static function resolverProblema7($notas) {
        $n = count($notas);
        if ($n === 0) return ["error" => "No se procesó ninguna nota válida."];
        
        $media = array_sum($notas) / $n;
        $min = min($notas);
        $max = max($notas);
        
        $sumaVariancia = 0;
        foreach ($notas as $nota) {
            $sumaVariancia += pow(($nota - $media), 2);
        }
        $desviacion = ($n > 1) ? sqrt($sumaVariancia / ($n - 1)) : 0;

        return compact('media', 'desviacion', 'min', 'max', 'notas');
    }

    // P8: Estación del año según mes y día
    public static function resolverProblema8($mes, $dia) {
        if ($mes < 1 || $mes > 12 || $dia < 1 || $dia > 31) {
            return ["error" => "Fecha inválida."];
        }
        // Conversión a una marca numérica (Mes * 100 + Día) para evaluar rangos
        $fechaClave = ($mes * 100) + $dia;

        if ($fechaClave >= 1221 || $fechaClave <= 320) {
            $estacion = "Verano";
        } elseif ($fechaClave >= 321 && $fechaClave <= 621) {
            $estacion = "Otoño";
        } elseif ($fechaClave >= 622 && $fechaClave <= 922) {
            $estacion = "Invierno";
        } else {
            $estacion = "Primavera";
        }
        return ["estacion" => $estacion, "fecha" => "$dia/$mes"];
    }

    // P9: Las 15 primeras potencias de un número (1 al 9)
    public static function resolverProblema9($base) {
        if ($base < 1 || $base > 9) {
            return ["error" => "La base debe estar estrictamente entre 1 y 9."];
        }
        $potencias = [];
        for ($i = 1; $i <= 15; $i++) {
            $potencias[$i] = pow($base, $i);
        }
        return ["base" => $base, "potencias" => $potencias];
    }
}