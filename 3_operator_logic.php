<?php


function bagi($angka, $pembagi)
{
    $hasil = 0;
    $sisa = $angka;
    while ($sisa >= $pembagi) {
        $sisa = $sisa - $pembagi;
        $hasil++;
    }

    return $hasil;
}
echo bagi(10, 2);
