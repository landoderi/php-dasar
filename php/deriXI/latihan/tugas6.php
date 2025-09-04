<?php
$barang = [
    ["Pensil", 10],
    ["Buku", 3],
    ["Penghapus", 2],
    ["Pulpen", 8],
];
foreach ($barang as $item) {
    if ($item[1] < 5) {
        echo "Stok $item[0] hampir habis (sisa $item[1])<br>";
    }
}