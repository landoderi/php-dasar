<?php
class Motor
{
    public $merk = "Honda";
    public $roda = 2;
    public $jenis = "Beat";
    public $warna = "Merah dan putih";

    public function detail()
    {
        return "Merk: {$this->merk}<br> Roda: {$this->roda}<br> Jenis: {$this->jenis}<br>
        Warna: {$this->warna}<br>";
    }
}

$kendaraan = new Motor();
echo $kendaraan->detail() . "<br>";