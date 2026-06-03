<?php
// models/Utilidades.php

class Utilidades {

    // OWASP: Sanitización de salidas para prevenir inyecciones de Scripts (XSS)
    public static function sanitizarXSS($datos) {
        return htmlspecialchars(trim($datos), ENT_QUOTES, 'UTF-8');
    }

    // Validación estricta: Verifica que sea un número válido y no negativo
    public static function validarNumeroPositivo($valor) {
        if (!is_numeric($valor) || $valor < 0) {
            return false;
        }
        return floatval($valor);
    }

    // Lógica de valor nulo (Null Value Logic / Coalesce)
    public static function nvl(&$var, $default = "") {
        return isset($var) ? $var : $default;
    }

    // Verifica si un parámetro se encuentra en una lista blanca autorizada
    public static function validarEnLista($valor, $listaPermitida) {
        return in_array($valor, $listaPermitida);
    }

    // Calcula la raíz cuadrada de un número (para desviación estándar)
    public static function calcularRaiz($valor) {
        if ($valor < 0) return 0;
        return sqrt($valor);
    }

    // Genera el botón unificado para regresar de forma segura al panel principal
    public static function generarEnlaceMenu() {
        return "<br><br><a href='index.php?action=menu' class='btn-regresar'>← Volver al Menú Principal</a>";
    }
}