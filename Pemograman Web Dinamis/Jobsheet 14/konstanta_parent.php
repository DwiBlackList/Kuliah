<?php
    class tas {
       // buat konstanta class tas
        const DISKON = 0.1;
    }
   // turunkan class tas ke class ransel
    class ransel extends tas {
       // buat konstanta class ransel
        const DISKON = 0.15;
        public function beli_tas($harga){
            return "Diskon tas baru, Rp .".$harga*parent::DISKON;
        }
        public function beli_ransel($harga){
            return "Diskon ransel baru, Rp .".$harga*self::DISKON;
        }
    }
   // buat objek dari class ransel (instansiasi)
    $ransel_baru=new ransel();
    echo $ransel_baru->beli_ransel(250000);
    echo "<br />";
    echo $ransel_baru->beli_tas(250000);
