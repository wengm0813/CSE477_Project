<?php
/**
 * Created by PhpStorm.
 * User: Min
 * Date: 2/16/2016
 * Time: 4:08 PM
 */

namespace Steampunked;


class SteampunkedController
{
    public function __construct(Steampunked $steampunked, $post) {
        //$this->steampunked = $steampunked;
    }

    public function isReset() {
        //return $this->reset;
    }

    public function getPage() {
        //return $this->page;
    }

    private $steampunked;                // The Steampunked object we are controlling
    private $page = 'game.php';     // The next page we will go to
    private $reset = false;
}