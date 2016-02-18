<?php
/**
 * Created by PhpStorm.
 * User: Min
 * Date: 2/16/2016
 * Time: 4:08 PM
 */

namespace Steampunked;


class SteampunkedView
{
    private $steampunked;	// Guessing object
    private $grid_size;

    public function __construct(Steampunked $steampunked) {
        $this->steampunked = $steampunked;
    }

    public function getGridSize()
    {
        return $this->grid_size;
    }

    public function present() {
        $html = '<form method="post" action="guessing-post.php">' .
            '<h1><img src="images/title.png"></h1>';

        $html .= <<<HTML
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
HTML;

        $html .= '<p><input type="submit" name="leak" value="Rotate">
    <input type="submit" name="leak" value="Discard">
    <input type="submit" name="leak" value="Open Valve">
    <input type="submit" name="leak" value="Give Up"></p></form>';

        return $html;
    }
}
