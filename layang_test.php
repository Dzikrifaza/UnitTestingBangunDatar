<<?php

use PHPUnit\Framework\TestCase;

require_once "layang.php";

class Layang_Test extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling()
    {
        $layanglayang = new Layang(4,2);
        
        $result = $layanglayang->hitungKeliling();
        $expected = 12;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {
        $layanglayang = new Layang("","");
        
        $result = $layanglayang->hitungKeliling();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {
        $layanglayang = new Layang(5,8);
        
        $result = $layanglayang->hitungLuas();
        $expected = 20;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {
        $layanglayang = new Layang("","");
        
        $result = $layanglayang->hitungLuas();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengjujian \n";
    }

}