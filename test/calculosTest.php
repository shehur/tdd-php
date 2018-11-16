<?php
use PHPUnit\Framework\TestCase;

class CalculosSoma extends TestCase {
	public function testSoma() {
		$this->assert(5, somar(2, 3));
	}
}
?>