<?php
/**
 * Created by PhpStorm.
 * User: Min
 * Date: 2/16/2016
 * Time: 4:08 PM
 */

namespace Steampunked;


class Steampunked
{

    /**
     * Constructor
     * @param $seed Random number seed
     */
    public function __construct($seed = null) {
        if($seed === null) {
            $seed = time();
        }

        srand($seed);


    }

    public function createGame($size)
    {
        $this->gameSize = $size;
    }

    public function getGameSize()
    {
        return $this->gamesize;

    }


    private $gameSize;

}