<?php
/**
 * @file Calculadora.php
 * @package App
 *
 * Clase que implementa las operaciones aritméticas básicas:
 * suma, resta, multiplicación y división.
 *
 * Desarrollado para el Parcial 2 - Desarrollo de Software II
 * Universidad del Valle
 *
 * @authors Jhanca González, Emanuel Giraldo
 */

namespace App;

/**
 * Class Calculadora
 *
 * Provee métodos para realizar operaciones matemáticas básicas.
 * La división incluye validación de divisor cero para evitar
 * errores críticos en tiempo de ejecución.
 */
class Calculadora {

    /**
     * Suma dos números.
     *
     * @param int|float $a Primer operando.
     * @param int|float $b Segundo operando.
     * @return int|float Resultado de la suma.
     */
    public function sumar($a, $b) {
        return $a + $b;
    }

    /**
     * Resta el segundo número al primero.
     *
     * @param int|float $a Minuendo.
     * @param int|float $b Sustraendo.
     * @return int|float Resultado de la resta.
     */
    public function restar($a, $b) {
        return $a - $b;
    }

    /**
     * Multiplica dos números.
     *
     * @param int|float $a Primer factor.
     * @param int|float $b Segundo factor.
     * @return int|float Resultado de la multiplicación.
     */
    public function multiplicar($a, $b) {
        return $a * $b;
    }

    /**
     * Divide el primer número entre el segundo.
     *
     * Lanza una excepción si el divisor es cero para garantizar
     * la robustez del sistema en producción.
     *
     * @param int|float $a Dividendo.
     * @param int|float $b Divisor (no puede ser cero).
     * @return int|float Resultado de la división.
     * @throws \InvalidArgumentException Si el divisor es igual a cero.
     */
    public function dividir($a, $b) {
        if ($b == 0) {
            throw new \InvalidArgumentException("No se puede dividir por cero.");
        }

        return $a / $b;
    }
}
