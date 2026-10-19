
<?php
class Mahasiswa {
    private $nama;
    private $nilai;

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNilai($nilai) {
        if ($nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;
        } else {
            echo "Nilai tidak valid! Nilai harus antara 0-100.<br>";
        }
    }

    public function getNilai() {
        return $this->nilai;
    }
}

$mhs1 = new Mahasiswa();

$mhs1->setNama("Andi");
$mhs1->setNilai(99);

echo "<h3>Data Mahasiswa</h3>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "Nilai: " . $mhs1->getNilai() . "<br>";
?>
