<?php

class CharsTest extends PHPUnit_Framework_TestCase {

	public function test_onStringIncrements(
	) {
		$aChar = "y";

		$aChar++;
		$this->assertEquals("z", $aChar);

		$aChar++;
		$this->assertEquals("aa", $aChar);
	}

	public function test_onCharsIncrements(
	) {
		$aChar = 'y';

		$aChar++;
		$this->assertEquals('z', $aChar);

		$aChar++;
		$this->assertEquals('aa', $aChar);
	}

	public function test_someCharsArentReallySingleChars(
	) {
		$this->assertEquals(2, strlen('·'));
		$this->assertEquals(2, strlen('¬'));
		$this->assertEquals(2, strlen('ñ'));
		$this->assertEquals(2, strlen('Ñ'));
		$this->assertEquals(2, strlen('ç'));
		$this->assertEquals(2, strlen('º'));
		$this->assertEquals(2, strlen('ª'));
		$this->assertEquals(3, strlen('€'));
	}

}
