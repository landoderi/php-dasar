<?php
$nilai = 65;
if ($nilai >= 90) {
    echo "lulus dengan peringkat A";
} elseif ($nilai >= 75) {
    echo "lulus dengan peringkat B";
}  elseif ($nilai >= 60) {
    echo "lulus dengan peringkat C";
} else {
    echo "tidak lulus";
}