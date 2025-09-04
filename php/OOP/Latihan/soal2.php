<?php
class Siswa
{
    public $nama;
    public $umur;
    public $alamat;
    public $kelas;

    public function __construct($nama, $umur, $alamat, $kelas)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->alamat = $alamat;
        $this->kelas = $kelas;
    }
}

$budi = new Siswa("Budi", 16, "Bandung", "XI RPL 3");
echo "Nama: " . $budi->nama . "<br>";
echo "Umur: " . $budi->umur . "<br>";
echo "Alamat: " . $budi->alamat . "<br>";
echo "Kelas: " . $budi->kelas . "<br>";

echo "<hr>";

$rehan = new Siswa("Rehan", 17, "Bandung", "XI RPL 3");
echo "Nama: " . $rehan->nama . "<br>";
echo "Umur: " . $rehan->umur . "<br>";
echo "Alamat: " . $rehan->alamat . "<br>";
echo "Kelas: " . $rehan->kelas . "<br>";

echo "<hr>";

$dadan = new Siswa("Dadan", 15, "Bandung", "XI RPL 3");
echo "Nama: " . $dadan->nama . "<br>";
echo "Umur: " . $dadan->umur . "<br>";
echo "Alamat: " . $dadan->alamat . "<br>";
echo "Kelas: " . $dadan->kelas . "<br>";

echo "<hr>";

$maryana = new Siswa("Maryana", 15, "Bandung", "XI RPL 3");
echo "Nama: " . $maryana->nama . "<br>";
echo "Umur: " . $maryana->umur . "<br>";
echo "Alamat: " . $maryana->alamat . "<br>";
echo "Kelas: " . $maryana->kelas . "<br>";
