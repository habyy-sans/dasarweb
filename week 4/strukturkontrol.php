<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A";
} elseif($nilaiNumerik >= 80 && $nilaiNumerik < 90 ){
    echo "nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80 ){
    echo "Nilai huruf: c";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf: D";
}