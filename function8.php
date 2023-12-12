<?php
    // membuat funsi
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function perkenalan ($nama, $salam="Assalamualaikum") {
        echo $salam.", ";
        echo "perkenalakan, nama saya ".$nama."<br>";
        // memanggil fungsi lain
        echo "saya berusia ". hitungUmur(2005, 2023) ." tahun<br>";
        echo "senang berkenalan dengan anda<br>";
    }

    // memanggil fungsi perkenalan
    perkenalan("arfianta");
?>