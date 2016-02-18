<?php

require __DIR__ . "/../../vendor/autoload.php";

use Steampunked\Steampunked as Steampunked;
use Steampunked\SteampunkedView as View;

/** @file
 * @brief Empty unit testing template
 * @cond 
 * @brief Unit tests for the class 
 */
class EmptyTest extends \PHPUnit_Framework_TestCase
{
	const SEED = 1234;

	public function test_construct() {
		$steampunked = new Steampunked(self::SEED);
		$view = new View($steampunked);

		$this->assertInstanceOf('Steampunked\SteampunkedView', $view);
	}

	public function test_present() {
		$steampunked = new Steampunked(self::SEED);
		$view = new View($steampunked);

		$status = $view->present();
		$size = $view->getGridSize();
		$this->assertContains('leak', $status);
		$this->assertEquals($size, $steampunked->getGameSize());
	}

}

/// @endcond
?>
