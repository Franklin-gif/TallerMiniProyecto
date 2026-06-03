<?php
// index.php
require_once 'models/Utilidades.php';
require_once 'controllers/ProblemController.php';

// Cargar cabecera común (Principio DRY)
include 'views/components/header.php';

// Capturar la acción de navegación de forma segura usando nvl
$action = Utilidades::nvl($_GET['action'], 'menu');

// Control de flujo estructural del sitio
switch ($action) {
    case 'menu':
        include 'views/menu.php';
        break;
        
    case 'p1':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inputs = $_POST['numeros'] ?? [];
            $numeros_validados = [];
            
            foreach ($inputs as $val) {
                $num = Utilidades::validarNumeroPositivo($val);
                if ($num !== false) {
                    $numeros_validados[] = $num;
                }
            } // <- Aquí cierra el foreach
            
            // Procesar los datos con el controlador
            $resultado = ProblemController::resolverProblema1($numeros_validados);
            include 'views/resultado.php';
            
        } else {
            // Si no es POST, mostrar el formulario de captura
            include 'views/formularios/form_p1.php';
        } // <- Aquí cierra el if/else
        break; // <- Fin seguro del caso p1

    case 'p2':
        $resultado = ProblemController::resolverProblema2();
        include 'views/resultado.php';
        break;

    case 'p3':
        $resultado = ProblemController::resolverProblema3();
        include 'views/resultado.php';
        break;

    case 'p4':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $n = (int)($_POST['n'] ?? 0);
            $resultado = ProblemController::resolverProblema4($n);
            include 'views/resultado.php';
        } else {
            include 'views/formularios/form_p4.php';
        }
        break;

    case 'p5':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inputs = $_POST['edades'] ?? [];
            $edades_validadas = [];
            
            foreach ($inputs as $val) {
                $edad = (int)$val;
                if ($edad >= 0 && $edad <= 150) {
                    $edades_validadas[] = $edad;
                }
            }
            
            $resultado = ProblemController::resolverProblema5($edades_validadas);
            include 'views/resultado.php';
        } else {
            include 'views/formularios/form_p5.php';
        }
        break;

    case 'p6':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $presupuestoTotal = (float)($_POST['presupuesto'] ?? 0);
            $resultado = ProblemController::resolverProblema6($presupuestoTotal);
            include 'views/resultado.php';
        } else {
            include 'views/formularios/form_p6.php';
        }
        break;

    case 'p7':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inputs = $_POST['notas'] ?? [];
            $notas_validadas = [];
            
            foreach ($inputs as $val) {
                $nota = (float)$val;
                if ($nota >= 0 && $nota <= 100) {
                    $notas_validadas[] = $nota;
                }
            }
            
            $resultado = ProblemController::resolverProblema7($notas_validadas);
            include 'views/resultado.php';
        } else {
            include 'views/formularios/form_p7.php';
        }
        break;

    case 'p8':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fecha = $_POST['fecha'] ?? '';
            $resultado = ProblemController::resolverProblema8($fecha);
            include 'views/resultado.php';
        } else {
            include 'views/formularios/form_p8.php';
        }
        break;

    case 'p9':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $base = (int)($_POST['base'] ?? 0);
            $resultado = ProblemController::resolverProblema9($base);
            include 'views/resultado.php';
        } else {
            include 'views/formularios/form_p9.php';
        }
        break;

    default:
        // Manejo genérico de errores (OWASP)
        echo "<h3 class='error'>Error: Opción inválida o no encontrada.</h3>";
        echo Utilidades::generarEnlaceMenu();
        break;
}

// Cargar pie de página externo dinámico
include 'views/components/footer.php';