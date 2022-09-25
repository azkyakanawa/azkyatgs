<?php
    $pertama = $_REQUEST ['pertama'];
    $kedua = $_REQUEST ['kedua'];
    $operator = $_REQUEST ['operator'];

    $hasilpenjumlahan = $pertama + $kedua;
    $hasilpengurangan = $pertama - $kedua;
    $hasilpembagian   = $pertama / $kedua;
    $hasilperkalian  = $pertama * $kedua;
    $hasilmodulus    = $pertama % $kedua;

    if ($operator=="Penjumlahan"){
        echo "hasil penjumlahan dari ".$pertama, " + ".$kedua," adalah ".$hasilpenjumlahan;
    }
    elseif ($operator=="Pengurangan"){
        echo "hasil pengurangan dari ".$pertama, " - ".$kedua," adalah ".$hasilpengurangan;
    }
    elseif ($operator=="perkalian"){
        echo "Hasil perkalian dari ".$pertama, " x ".$kedua," adalah ".$hasilperkalian;
    }
    elseif ($operator=="pembagian"){
        echo "hasil pembagian dari ".$pertama, " % ".$kedua," adalah ".$hasilpembagian;
    }
    elseif ($operator=="modulus"){
        echo "hasil modulus dari ".$pertama, " dan ".$kedua," adalah ".$hasilmodulus;
    }
?>