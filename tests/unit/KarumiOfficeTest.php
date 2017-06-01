<?php

use PHPUnit\Framework\TestCase;
use Maxibon\Developer;
use Maxibon\KarumiOffice;

class KarumiOfficeTest extends TestCase
{
    public function testIfGrabsTwoMaxibonsLeftIsEight()
    {
        $karumiOffice = new KarumiOffice();
        $developer = new Developer("Manu", 2);

        $karumiOffice->openFridge($developer);

        $this->assertEquals(8, $karumiOffice->getMaxibonsLeft());
    }

    public function testIfGrabsEightMaxibonsLeftIsTwelve()
    {
        $karumiOffice = new KarumiOffice();
        $developer = new Developer("Manu", 8);

        $karumiOffice->openFridge($developer);

        $this->assertEquals(12, $karumiOffice->getMaxibonsLeft());
    }

    public function testIfGrabsMaxibonsNono()
    {
        $karumiOffice = new KarumiOffice();
        $developer = new Developer("Nono", 32);

        $karumiOffice->openFridge($developer);

        $this->assertEquals(10, $karumiOffice->getMaxibonsLeft());
    }

    public function testIfGrabsMaxibonsTwoDevelopers()
    {
        $karumiOffice = new KarumiOffice();
        $developers = [
            new Developer("Manu", 2),
            new Developer("Conchi", 2)
        ];

        $karumiOffice->openFridgeByGroup($developers);

        $this->assertEquals(6, $karumiOffice->getMaxibonsLeft());
    }
}
