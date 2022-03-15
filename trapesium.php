<?php
    require_once "bangun_datar.php";
    class Trapesium extends BangunDatar{
        private $alasa,$alasb;
        private $tinggi;
        private $sisi;

        public function __construct($s,$aa,$ab,$t){
            $this->alasa = $aa;
            $this->tinggi = $t;
            $this->alasb = $ab;
            $this->sisi = $s;
        }

        function hitungkeliling(){
            if ($this->sisi == '' ) {
                return "Tidak Boleh kosong!";
            }else{
                return $this->sisi+$this->sisi+$this->sisi+$this->sisi;
            }
        }

        function hitungLuas(){
            if($this->alasa == '' && $this->alasb == '' && $this->tinggi == ''){
                return "Tidak Boleh kosong!";
            }else{
                return ($this->alasa+$this->alasb)*$this->tinggi;
            }
        }

    }

?>