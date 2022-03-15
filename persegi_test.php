<?php

use PHPUnit\Framework\TestCase;

require_once "persegi.php";

class Persegi_Test extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling()
    {
        $persegi = new Persegi(4);
         
        $result = $persegi->hitungKeliling();
        $expected = 16;
        
        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {
        $persegi = new Persegi("","");

        $result = $persegi->hitungKeliling();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {
        $persegi = new Persegi(4);
                
        $result = $persegi->hitungLuas();
        $expected = 16;
   
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {
        $persegi = new Persegi("","");
                
        $result = $persegi->hitungLuas();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengjujian \n";
    }

}