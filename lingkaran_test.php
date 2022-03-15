<?php

use PHPUnit\Framework\TestCase;

require_once "lingkaran.php";

class Lingkaran_Test extends TestCase
{

    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebleum pengjujian \n";
    }

    public function testHitungkeliling()
    {
        $lingkaran = new Lingkaran(4);

        $result = $lingkaran->hitungKeliling();
        $expected = 25.12;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungkelilingKosong()
    {        
        $lingkaran = new Lingkaran("");
        
        $result = $lingkaran->hitungKeliling();
        $expected = "Tidak Boleh kosong!";

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuas()
    {        
        $lingkaran = new Lingkaran(2);
        
        $result = $lingkaran->hitungLuas();
        $expected = 12.56;

        $this->assertEquals($expected, $result); 
    }

    public function testHitungLuasKosong()
    {        
        $lingkaran = new Lingkaran("");
        
        $result = $lingkaran->hitungLuas();
        $expected = "Tidak Boleh kosong!";
        
        $this->assertEquals($expected, $result); 
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengjujian \n";
    }

}