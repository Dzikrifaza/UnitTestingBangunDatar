<?php
    require_once "bangun_datar.php";

    class Layang extends BangunDatar{
        private $a;
        private $b;

        public function __construct($a,$b){
            $this->a = $a;
            $this->b = $b;
        }

        function hitungkeliling(){
            if ($this->a == '' && $this->b == '' ) {
                return "Tidak Boleh kosong!";
            }else{
                return 2*($this->a+$this->b);
            }
        }

        function hitungLuas(){
            if($this->a == '' && $this->b == ''){
                return "Tidak Boleh kosong!";
            }else{
                return 0.5*$this->a*$this->b;
            }
        }

    }

?>