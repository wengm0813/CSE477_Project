<?php

require __DIR__ . "/../../vendor/autoload.php";

use Steampunked\Steampunked as Steampunked;


class SteampunkedTest extends \PHPUnit_Framework_TestCase
{
	const SEED = 1234;
	public function testConstuctor() {

		$steampunked = new Steampunked(self::SEED);
		$this->assertInstanceOf('Steampunked\Steampunked', $steampunked);

		$steampunked2 = new Steampunked();
		$this->assertInstanceOf('Steampunked\Steampunked', $steampunked2);
	}


	public function testGameSize() {
		$steampunked = new Steampunked(self::SEED);
		$steampunked->createGame(6);
		$this->assertEquals(6, $steampunked->getGameSize());

		$steampunked2 = new Steampunked(self::SEED);
		$this->assertEquals(false, $steampunked2->createGame(15));

	}

	public function testPlayerTurn() {
		$steampunked = new Steampunked(self::SEED);
		$this->assertEquals(1, $steampunked->getTurn());
		$this->assertEquals(2, $steampunked->switchTurn());
		$this->assertEquals(2, $steampunked->getTurn());
		$this->assertEquals(1, $steampunked->switchTurn());
		$this->assertEquals(1, $steampunked->getTurn());



	}

}

/// @endcond
?>
