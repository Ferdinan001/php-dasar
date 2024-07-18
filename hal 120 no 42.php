<?php

$siswa = [
    "kelas_x" => ["santi","yanto","reza"],
    "kelas_xi" => ["tia","siska","nova"],
    "kelas_xii" => ["robert","rudi","alex"]
];

echo $siswa["kelas_xi"][0];
echo "<br>";
echo $siswa["kelas_xii"][2];
echo "<br>";
echo $siswa["kelas_x"][1];

echo "<pre>";
print_r($siswa);
echo "</pre>";

?>