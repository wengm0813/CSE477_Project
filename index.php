<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Steampunked</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="centerwrap">
<header>
    <img src="images/title.png">
</header>

<div class = "intro">
<form method="post" action="Steampunked-post.php">
    <p>Player1 Name:
    <input type="text" name="name1"></p>

    <p>Player2 Name:
        <input type="text" name="name2"></p>
    <p> Chooose Game Size: <select name="size">
            <option value="4">6 by 6</option>
            <option value="10">10 by 10</option>
            <option value="20">20 by 20</option>

        </select></p>

    <input type="submit">

</form>
</div>
</div>

</body>
</html>