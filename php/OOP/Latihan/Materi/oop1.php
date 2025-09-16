<?php
class Kucing 
{
    // properti atau atribute
    public $warna ="merah";
    public $jumlah_kaki = 4;

    // public atau function
    public function bersuara()
    {
        return "meong";
    }
    
    public function berburu()
    {
        return "kucing berburu tikus";
    }
}

// inisiasi pembuatan objek
$kucing1 = new Kucing();
echo "warna kucing 1: " . $kucing1->warna . "<br>";
echo "jumlah kaki kucing 1: " . $kucing1->jumlah_kaki . "<br>";
echo "suara kucing: " . $kucing1->bersuara() . "<br>";