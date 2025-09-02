<?php
$nilai = [
    ["nama" => "andi", "mapel" => ["matematika" => 85, "IPA" => 90, "bahasa" => 85]],
    ["nama" => "budi", "mapel" => ["matematika" => 75, "IPA" => 8, "bahasa" => 79]],
    ["nama" => "citra", "mapel" => ["matematika" => 92, "IPA" => 81, "bahasa" => 87]],
];
foreach ($nilai as $data) {
    echo "nilai " . $data["nama"] . "<br>";
    foreach ( $data["mapel"] as $pelajaran => $nilai) {
        echo " - $pelajaran: $nilai <br>";
    }
    echo "<br>";
}