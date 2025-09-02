<?php
$film = [
    ["tukang bubur naik haji", 9],
    ["dunia terbalik", 7],
    ["viva fantasi", 8],
    ["brutal legend", 6],
];
foreach ($film as $f) {
    if ($f[1] >= 8) {
        echo "Film: $f[0], Rating: $f[1] <br>";
    }
}