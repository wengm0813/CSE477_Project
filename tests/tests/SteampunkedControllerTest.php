<?php

require __DIR__ . "/../../vendor/autoload.php";

use Steampunked\Steampunked as Steampunked;
use Steampunked\SteampunkedController as Controller;

class SteampunkedControllerTest extends \PHPUnit_Framework_TestCase {
	const SEED = 1234;

	public function test_construct() {
		$steampunked = new Steampunked(self::SEED);
		$controller = new Controller($steampunked, array());

		$this->assertInstanceOf('Steampunked\SteampunkedController', $controller);
		$this->assertFalse($controller->isReset());
		$this->assertEquals('game.php', $controller->getPage());
	}

	public function test_rotate() {
		$steampunked = new Steampunked(self::SEED);
		$controller = new Controller($steampunked, array('rotate' => 'clockwise'));

		$this->assertEquals('game.php', $controller->getPage());
	}

	public function test_giveUp() {
		$steampunked = new Steampunked(self::SEED);
		$controller = new Controller($steampunked, array('giveUp' => false));
		$this->assertFalse($controller->isReset());
		$this->assertEquals('game.php', $controller->getPage());

		$steampunked = new Steampunked(self::SEED);
		$controller = new Controller($steampunked, array('giveUp' => true));
		$this->assertTrue($controller->isReset());
		$this->assertEquals('newgame.php', $controller->getPage());
	}
}

?>
