<?php

use PHPUnit\Framework\TestCase;

require_once "jajar_genjang.php";

class Jajar_Genjang_Test extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling()
    {
        $JajarGenjang = new Jajar_Genjang(4,2);
        
        $result = $JajarGenjang->hitungKeliling();
        $expected = 12;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {
        $JajarGenjang = new Jajar_Genjang("","");

        $result = $JajarGenjang->hitungKeliling();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {
        $JajarGenjang = new Jajar_Genjang(4,2);
        
        $result = $JajarGenjang->hitungLuas();
        $expected = 8;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {
        $JajarGenjang = new Jajar_Genjang("","");

        $result = $JajarGenjang->hitungLuas();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengjujian \n";
    }

}