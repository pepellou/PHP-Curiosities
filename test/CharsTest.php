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

}
