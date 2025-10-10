<?php
function hitungumur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan ($nama, $salam = "assalamu,alaikum"){
    echo $salam.",";
    echo "perkenalkan nama saya ".$nama."<br/>";
    echo "umur saya adalah". hitungumur(1988, 2023)."tahun<br/>";
    echo "senang berkenalan dengan anda<br/>";
}
perkenalan("Elok");
?>