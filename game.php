<?php
require __DIR__ . '/lib/Steampunked.inc.php';

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
            <div class="cell"><img src="images/valve-closed.png"></div><div class = "cell"><img src="images/straight-h.png"></div><div class="cell"><img src="images/straight-h.png"></div><div class = "cell"><img src="images/ninety-sw.png"></div><div class = "cell"></div><div class = "cell"></div><div class = "cell"><img src = "images/gauge-top-190.png"></div>



        </div>
        <div class="row">
            <div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"><img src="images/ninety-ne.png"></div><div class="cell"><img src="images/straight-h.png"></div><div class="cell"><img src="images/straight-h.png"></div><div class="cell"><img src = "images/gauge-0.png"></div>

        </div>
        <div class="row">
            <div class="cell"></div>

        </div>
        <div class="row">
            <div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"><img src = "images/gauge-top-190.png"></div>

        </div>
        <div class="row">
            <div class="cell"></div><div class="cell"></div><div class="cell"></div><div class="cell"><img src="images/ninety-es.png"></div><div class="cell"><img src="images/straight-h.png"></div><div class="cell"><img src="images/straight-h.png"></div><div class="cell"><img src = "images/gauge-0.png"></div>
        </div>

        <div class="row">
            <div class="cell"><img src="images/valve-closed.png"></div><div class = "cell"><img src="images/straight-h.png"></div><div class="cell"><img src="images/straight-h.png"></div><div class = "cell"><img src="images/ninety-wn.png"></div><div class = "cell"></div><div class = "cell"></div><div class = "cell"></div>
        </div>
    </div>
    <p class="message">Player 1, you have won!</p>
    <p>
        <label>
            <div class="pic">
                <input type="radio" name="pipe" value="small" />
                <img src="images/ninety-es.png"><input type="radio" name="pipe" value="small" />
                <img src="images/straight-h.png"><input type="radio" name="pipe" value="small" />
                <img src="images/tee-esw.png"><input type="radio" name="pipe" value="small" />
                <img src="images/ninety-es.png"><input type="radio" name="pipe" value="small" />
                <img src="images/cap-s.png"></div>
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
