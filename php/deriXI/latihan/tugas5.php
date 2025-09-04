<?php
$siswa=[
    "Andi" => 80,
    "Budi" => 70,
    "Citra" => 90,
    "Dedi" => 60,
    "eka" => 75,
];
echo "Hasil kelulusan siswa <br>";

foreach ($siswa as $nama => $nilai) {
    if ($nilai >= 75) {
        echo "<br>";
        echo "- $nama: lulus (nilai: $nilai)";
    } else {
        echo "<br>";
        echo "- $nama: tidak lulus (nilai: $nilai)";
    }
}