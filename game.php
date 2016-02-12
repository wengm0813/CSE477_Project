<?php
/**
 * Created by PhpStorm.
 * User: Min
 * Date: 2/12/2016
 * Time: 1:52 PM
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project1 CheckPoint</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="centerwrap">
<header>
    <img src="images/title.png">
</header>
<form>
    <div class="game">

        <div class="row">
            <div class="cell"></div><div class="cell"></div><div class="cell"></div>
        </div>

        <div class="row">
            <div class="cell"></div><div class="cell"></div><div class="cell"></div>
        </div>
    </div>
    <p>
        <label>
            <input type="radio" name="pipe" value="small" />
            <img src="images/straight-h.png">
        </label>
        <label>
            <input type="radio" name="pipe" value="small" />
            <img src="images/ninety-es.png">
        </label>
     </p>
    <p>
    <input type="submit" name="leak" value="Rotate">
    <input type="submit" name="leak" value="Discard">
    <input type="submit" name="leak" value="Open Valve">
    <input type="submit" name="leak" value="Give Up">
    </p>
</form>
</div>
</body>
</html>
