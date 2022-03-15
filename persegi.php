<?php

    require_once "bangun_datar.php";

    class Persegi extends BangunDatar{
        private $sisi;

        public function __construct($s){
            $this->sisi = $s;
        }

        public function hitungKeliling(){
            if ($this->sisi == '') {
                return "Tidak Boleh kosong!";
            }else{
                return 4*$this->sisi;
            }
        }

        function hitungLuas(){
            if($this->sisi == ''){
                return "Tidak Boleh kosong!";
            }else{
                return $this->sisi * $this->sisi;
            }
        }

    }

?>