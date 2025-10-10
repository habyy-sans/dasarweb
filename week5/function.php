<?php

function perkenalan($nama, $salam="assalamu'alaikum"){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya  ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
perkenalan("hamdana","hallo");
echo "<hr>";
$saya = "elok";
$ucapanSalam = "selamat pagi";
perkenalan($saya);

?>