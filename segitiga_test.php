<?php

use PHPUnit\Framework\TestCase;

require_once "segitiga.php";

class Segitiga_Test extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling()
    {       
        $segitiga = new Segitiga(4,2,6,5,8);
        
        $result = $segitiga->hitungKeliling();
        $expected = 12;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {
        $segitiga = new Segitiga("","","","","");

        $result = $segitiga->hitungKeliling();
        $expected = "Tidak Boleh kosong!";
        
        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {        
        $segitiga = new Segitiga(4,2,6,5,8);

        $result = $segitiga->hitungLuas();
        $expected = 20;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {
        $segitiga = new Segitiga("","","","","");
        
        $result = $segitiga->hitungLuas();
        $expected = "Tidak Boleh kosong!";
        
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengjujian \n";
    }

}