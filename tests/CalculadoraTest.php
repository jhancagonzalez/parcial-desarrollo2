<?php
/**
 * @file CalculadoraTest.php
 *
 * Suite de pruebas unitarias para la clase Calculadora.
 * Implementada con el enfoque TDD (Test Driven Development):
 * cada prueba se escribió primero en rojo (falla) y luego
 * se implementó el código para ponerla en verde.
 *
 * Parcial 2 - Desarrollo de Software II
 * Universidad del Valle
 *
 * @authors Jhanca González, Emanuel Giraldo
 */

use PHPUnit\Framework\TestCase;
use App\Calculadora;

/**
 * Class CalculadoraTest
 *
 * Verifica el correcto funcionamiento de todas las operaciones
 * aritméticas de la clase Calculadora, incluyendo el manejo
 * controlado de errores como la división por cero.
 */
class CalculadoraTest extends TestCase {

    /** @var Calculadora Instancia de la calculadora usada en cada prueba. */
    private $calc;

    /**
     * Inicializa una nueva instancia de Calculadora antes de cada prueba.
     */
    protected function setUp(): void {
        $this->calc = new Calculadora();
    }

    /**
     * Verifica que la suma de 2 + 3 retorne 5.
     */
    public function testSuma() {
        $this->assertEquals(5, $this->calc->sumar(2, 3));
    }

    /**
     * Verifica que la resta de 4 - 3 retorne 1.
     */
    public function testResta() {
        $this->assertEquals(1, $this->calc->restar(4, 3));
    }

    /**
     * Verifica que la multiplicación de 4 * 3 retorne 12.
     */
    public function testMultiplicacion() {
        $this->assertEquals(12, $this->calc->multiplicar(4, 3));
    }

    /**
     * Verifica que la división de 6 / 3 retorne 2.
     */
    public function testDivision() {
        $this->assertEquals(2, $this->calc->dividir(6, 3));
    }

    /**
     * Verifica que dividir entre cero lanza una InvalidArgumentException.
     * Esto garantiza la robustez del sistema ante entradas inválidas.
     */
    public function testDivisionPorCeroLanzaExcepcion() {
        $this->expectException(\InvalidArgumentException::class);
        $this->calc->dividir(5, 0);
    }
}
