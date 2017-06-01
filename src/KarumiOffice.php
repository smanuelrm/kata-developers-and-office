<?php

namespace Maxibon;
use Maxibon\Developer;

class KarumiOffice
{
    private $maxibonsLeft;

    function __construct()
    {
        $this->maxibonsLeft = 10;
    }

    public function openFridge(Developer $developer)
    {
        $this->maxibonsLeft = max(0, $this->maxibonsLeft - $developer->getMaxibonsToGrab());
        if($this->getMaxibonsLeft() <= 2){
            $this->maxibonsLeft += 10;
        }
    }

    public function openFridgeByGroup(array $developers)
    {
        foreach($developers as $developer){
            $this->openFridge($developer);
        }
    }

    public function getMaxibonsLeft()
    {
        return $this->maxibonsLeft;
    }
}
