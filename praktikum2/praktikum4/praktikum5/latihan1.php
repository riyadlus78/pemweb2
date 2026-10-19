
<?php
class Mahasiswa {
    public $nama;
    private $nilai;
}

$mhs1 = new Mahasiswa();

$mhs1->nama = "Andi";

echo "Nama Mahasiswa: " . $mhs1->nama;

// Baris berikut akan menyebabkan error jika diaktifkan
// $mhs1->nilai = 90;
?>
