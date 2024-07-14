<?php
use PHPUnit\Framework\TestCase;

require_once 'path/to/your/file/with/gravity_flip_function.php'; // Asegúrate de ajustar la ruta a tu archivo

class FlipTest extends TestCase
{
    public function testFlipRight()
    {
        $input = [3, 2, 1, 2];
        $expected = [1, 2, 2, 3];
        $this->assertEquals($expected, flip('R', $input));
    }

    public function testFlipLeft()
    {
        $input = [1, 4, 5, 3, 5];
        $expected = [5, 5, 4, 3, 1];
        $this->assertEquals($expected, flip('L', $input));
    }

    // Añade más pruebas según sea necesario
}
?>
