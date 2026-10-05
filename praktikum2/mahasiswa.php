<?php
echo "<hr>";

echo "<h2>Praktikum 9 - Sistem Mahasiswa</h2>";

class MahasiswaNilai
{
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;

    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "Grade : " . $this->tentukanGrade() . "<br>";
    }

    public function tentukanGrade()
    {
        if ($this->nilai >= 80) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }
}


// Object mahasiswa

$mhsNilai = new MahasiswaNilai();

$mhsNilai->nim = "23001";
$mhsNilai->nama = "Andi";
$mhsNilai->prodi = "Sistem Informasi";
$mhsNilai->nilai = 85;


// Menampilkan data dan grade

$mhsNilai->tampilkanData();
echo "<hr>";
?>