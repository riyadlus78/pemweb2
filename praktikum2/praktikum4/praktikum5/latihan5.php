
<?php
class Mahasiswa {
    protected $prodi;

    public function setProdi($prodi) {
        $this->prodi = $prodi;
    }

    public function getProdi() {
        return $this->prodi;
    }
}

$mhs1 = new Mahasiswa();

$mhs1->setProdi("Sistem Informasi");

echo "Program Studi: " . $mhs1->getProdi();

// Baris berikut akan menyebabkan error jika diaktifkan:
// $mhs1->prodi = "Teknik Informatika";
?>
