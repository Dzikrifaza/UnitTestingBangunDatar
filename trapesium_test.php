<?php

use PHPUnit\Framework\TestCase;

require_once "trapesium.php";

class Trapesium_Test extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling()
    {
        $trapesium = new Trapesium(6,5,6,8);
        
        $result = $trapesium->hitungKeliling();
        $expected = 24;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {
        $trapesium = new Trapesium("","","","");
        
        $result = $trapesium->hitungKeliling();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {
        $trapesium = new Trapesium(6,5,6,8);

        $result = $trapesium->hitungLuas();
        $expected = 88;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {
        $trapesium = new Trapesium("","","","");

        $result = $trapesium->hitungLuas();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengjujian \n";
    }

}