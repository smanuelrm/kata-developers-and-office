<?php

use PHPUnit\Framework\TestCase;
use Maxibon\Developer;

class DeveloperTest extends TestCase
{
    public function testCanNotGrabNegativeMaxibons()
    {
        $developer = new Developer("Manu", -1);

        $this->assertEquals(0, $developer->getMaxibonsToGrab());
    }
}
