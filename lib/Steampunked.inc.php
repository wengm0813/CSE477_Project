<?php
/**
 * Created by PhpStorm.
 * User: Min
 * Date: 2/17/2016
 * Time: 4:17 PM
 */

require __DIR__ . "/../vendor/autoload.php";

// Start the PHP session
session_start();

define("STEAMPUNKED_SESSION", 'steampunked');

if(!isset($_SESSION[STEAMPUNKED_SESSION])) {
    $_SESSION[STEAMPUNKED_SESSION] = new Steampunked\Steampunked(time());
}

$steampunked = $_SESSION[STEAMPUNKED_SESSION];