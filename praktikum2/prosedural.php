<?php
//================================================================================//
# PRAKTIKUM 1
// PROGRAM PHP PROSEDURAL //
//================================================================================//

$nim = "23001";
$nama = "Andi";
$prodi = "Sistem Informasi";
$semester = 4;

function tampilkanData($nim, $nama, $prodi, $semester)
{
    echo "NIM : " . $nim . "<br>";
    echo "Nama : " . $nama . "<br>";
    echo "Prodi : " . $prodi . "<br>";
    echo "Semester : " . $semester . "<br>";
}

tampilkanData($nim, $nama, $prodi, $semester);
?>