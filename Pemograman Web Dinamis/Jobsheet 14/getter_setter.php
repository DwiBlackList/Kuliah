<?php
class Anak_Anak
{
    private $tinggi;
    public function setTinggi($tinggi)
    {
        if ($tinggi > 30) {
            $this->tinggi = $tinggi;
        }
    }
    public function getTinggi()
    {
        echo "Tinggi seorang anak adalah " . $this->tinggi . "cm";
    }
}
$anak1 = new Anak_Anak;
$anak1->setTinggi(120);
$anak1->getTinggi();
