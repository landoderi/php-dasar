<?php
class Kucing 
{
    
    public $nama;
    public $warna;
    public $jenis;

    // method khusus yang akan di panggil pertama kali/awal
    public function __construct($nama, $warna, $jenis)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->jenis = $jenis;
    }
    
    public function berburu()
    {
        return "kucing berburu tikus";
    }
}

// inisiasi pembuatan objek
$kucing1 = new Kucing("Luna", "Abu", "Persia");
echo "Nama kucing: " . $kucing1->nama . "<br>";
echo "warma kucing: " . $kucing1->warna . "<br>";
echo "Jenis kucing: " . $kucing1->jenis . "<br>";