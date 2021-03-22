<?php

function hitungLuasSegitiga($alas, $tinggi){
    $luasSegitiga= $alas * $tinggi / 2;
    return $luasSegitiga;
}
function hitungKelSegitiga($sisi_a, $sisi_b, $sisi_c){
    $kel= $sisi_a + $sisi_b + $sisi_c;
    return $kel;
}

function hitungLuasLingkaran($r){
    $luasLingkaran= 3.14 * $r * $r;
    return $luasLingkaran;
}
    function hitungKelLingkaran($r){
        $kelLingkaran=3.14 * 2 *$r;
        return $kelLingkaran;
    }

    function hitungLuasJajar($alas, $tinggi){
        $jajargenjang=$alas * $tinggi;
        return $jajargenjang;
}
    function hitungKelJajar($sisi_a, $sisi_b){
        $kelJajar=2*($sisi_a+$sisi_b);
        return $kelJajar;
    }
    
?>