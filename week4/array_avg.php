<?php
$siswa = array(
    array("Alice", 85),
    array("Bob", 92),
    array("Charlie", 78),
    array("David", 64),
    array("Eva", 90)
);

$total = 0;
for ($i = 0; $i < count($siswa); $i++) {
    $total += $siswa[$i][1];
}

$rataRata = $total / count($siswa);


echo "<h2>Rata-rata Nilai = ".number_format($rataRata, 2)."</h2>";


echo "<h3>Siswa dengan nilai di atas rata-rata:</h3>";
for ($i = 0; $i < count($siswa); $i++) {
    if ($siswa[$i][1] > $rataRata) {
        echo $siswa[$i][0] . " - " . $siswa[$i][1] . "<br>";
    }
}
?>
