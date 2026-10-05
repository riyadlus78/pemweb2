
<?php

// ==============================================================================
// PRAKTIKUM 2
// PROGRAM PHP OOP
// ==============================================================================

class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    // ==========================================================================
    // PRAKTIKUM 6
    // Menambahkan Method pada Class Mahasiswa
    // ==========================================================================

    public function tampilkanData()
    {
        echo "NIM      : " . $this->nim . "<br>";
        echo "Nama     : " . $this->nama . "<br>";
        echo "Prodi    : " . $this->prodi . "<br>";
        echo "Semester : " . $this->semester . "<br><br>";
    }
}

// ==============================================================================
// PRAKTIKUM 3
// BUAT OBJECT DARI CLASS Mahasiswa
// ==============================================================================

$mhs1 = new Mahasiswa();

// ==============================================================================
// PRAKTIKUM 4
// MEMBUAT PROPERTI DARI OBJECT $mhs1
// ==============================================================================

$mhs1->nim = "23001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = 4;

// ==============================================================================
// PRAKTIKUM 5
// MEMBUAT OBJECT KE-2 YAITU $mhs2 BESERTA PROPERTINYA
// ==============================================================================

$mhs2 = new Mahasiswa();

$mhs2->nim = "24002";
$mhs2->nama = "Budi";
$mhs2->prodi = "Sistem Informasi";
$mhs2->semester = 2;

// ==============================================================================
// MENAMPILKAN DATA
// ==============================================================================

echo "<h3>Data Mahasiswa 1</h3>";
$mhs1->tampilkanData();

echo "<h3>Data Mahasiswa 2</h3>";
$mhs2->tampilkanData();

?>

