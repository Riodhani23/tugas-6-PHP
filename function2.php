<?php
    // fungsi void
    function salam($nama) {
        echo "<h2>assalamu'alaikum ".strtoupper($nama)."</h2>";
    }

    salam("Rio");
    salam("Aldi");
    salam(1);
?>