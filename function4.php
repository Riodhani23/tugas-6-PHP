<?php
    // membuat fungsi
    function hitungan($thn_lahir, $thn_sekarang) {
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    echo "umur saya adalah ". hitungan(2005, 2023) ." tahun";
?>