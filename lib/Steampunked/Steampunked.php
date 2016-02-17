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
        $this->player1= true;
        $this->player2 = false;


    }
    private function constructPipes()
    {

    }

    public function createGame($size)
    {
        if ($size != 6 && $size != 10 && $size != 20)
        {
            return false;
        }


        for ($i = 0; $i < $size; $i++)
        {
            for ($j = 0; $j < $size; $j++)
            {
                $this->gameArray[$i][$j] = true;
            }
        }
    }

    public function getGameSize()
    {
        return count($this->gameArray);
    }

    public function switchTurn()
    {
        if ($this->player1 == true)
        {
            $this->player1= false;
            $this->player2 = true;
            return 2;
        }
        else
        {
            $this->player1= true;
            $this->player2 = false;
            return 1;
        }

    }

    public function getTurn()
    {
        if ($this->player1 == true)
        {
            return 1;
        }

        else{
            return 2;
        }
    }


    private $gameSize;
    private $gameArray = array(array());
    private $player1;
    private $player2;
    private $pipes = array();

}