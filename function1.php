<?php
    // membuat fungsi
    function perkenalan($nama,$salam) {
        echo $salam.",";
        echo " perkenalkan, nama saya ".$nama."<br>";
        echo " senang berkenalan degan anda<br>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan("Rio", "Hai");

    echo "<hr>";

    $saya = "Rio";
    $ucapansalam = "Selamat Pagi";

    // memanggil lagi
    perkenalan($saya, $ucapansalam);

?>