<?php

namespace Maxibon;

class Developer
{
    protected $name;
    protected $maxibonsToGrab;

    function __construct($name, $maxibonsToGrab)
    {
        $this->name = $name;
        $this->maxibonsToGrab = max(0, $maxibonsToGrab);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getMaxibonsToGrab()
    {
        return $this->maxibonsToGrab;
    }
}
