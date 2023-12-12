<?php
    // membuat function
    function perkenalan($nama, $salam="Assalamualaikum") {
        echo $salam.", ";
        echo " perkenalkan, nama saya ".$nama."<br>";
        echo " senang berkenalan degan anda<br>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan("Rio", "Hai");

    echo "<hr>";

    $saya = "Rio";
    $ucapansalam = "Selamat Pagi";

    // memanggil nya lagi tanpa mengisi parameter salam
    perkenalan($saya);
?>