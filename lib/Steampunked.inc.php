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

define("STEAMPUNKED_SESSION", 'guess');

if(isset($_GET['name1']) && isset($_GET['name2']))
{
    $_SESSION[STEAMPUNKED_SESSION] = new Steampunked\Steampunked(time());
}



$guessing = $_SESSION[GUESSING_SESSION];
