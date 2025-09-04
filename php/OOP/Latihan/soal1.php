<?php
class Motor
{
    public $merk;
    public $jenis;
    public $nama;
    public $warna;
    public $roda;
    public $cc;

    public function __construct($merk, $jenis, $nama, $warna, $roda, $cc)
    {
        $this->merk = $merk;
        $this->jenis = $jenis;
        $this->nama = $nama;
        $this->warna = $warna;
        $this->roda = $roda;
        $this->cc = $cc;
    }
}

$kendaraan = new Motor("Ducati", "Sport", "v4S", "Merah", 2, 1100);
echo "Merek: " . $kendaraan->merk . "<br>";
echo "Jenis: " . $kendaraan->jenis . "<br>";
echo "Nama: " . $kendaraan->nama . "<br>";
echo "Warna: " . $kendaraan->warna . "<br>";
echo "Roda: " . $kendaraan->roda . "<br>";
echo "Jumlah CC: " . $kendaraan->cc . "<br>";