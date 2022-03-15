<?php

    require_once "bangun_datar.php";

    class Persegi_Panjang extends BangunDatar{
        private $panjang;
        private $lebar;

        public function __construct($p,$l){
            $this->panjang = $p;
            $this->lebar = $l;
        }

        public function hitungKeliling(){
            if ($this->panjang == '' && $this->lebar == '') {
                return "Tidak Boleh kosong!";
            }else{
                return 2*($this->panjang + $this->lebar);
            }
        }

        function hitungLuas(){
            if($this->panjang == '' && $this->lebar == ''){
                return "Tidak Boleh kosong!";
            }else{
                return $this->panjang * $this->lebar;
            }
        }

    }

?>