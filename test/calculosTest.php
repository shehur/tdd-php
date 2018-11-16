<?php
use PHPUnit\Framework\TestCase;

include 'soma.php';

class CalculosSoma extends TestCase {
	public function testSomaComParametros() {
		$this->assertEquals(5, somar(2, 3));
	}

	public function testSomaSemParametros() {
		$this->assertEquals(0, somar());
	}
}
?>