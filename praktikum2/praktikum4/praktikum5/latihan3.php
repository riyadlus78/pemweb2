
<?php
class Mahasiswa {
    private $nama;
    private $nim;
    private $nilai;

    public function __construct($nama, $nim, $nilai) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->setNilai($nilai);
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNilai($nilai) {
        if ($nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;
        } else {
            $this->nilai = 0;
        }
    }

    public function getNilai() {
        return $this->nilai;
    }
}

$mhs1 = new Mahasiswa("Andi", "231001", 90);

echo "<h3>Data Mahasiswa</h3>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "NIM: " . $mhs1->getNim() . "<br>";
echo "Nilai: " . $mhs1->getNilai() . "<br>";

echo "<hr>";

$mhs1->setNama("Budi");
$mhs1->setNilai(85);

echo "<h3>Data Setelah Diubah</h3>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "NIM: " . $mhs1->getNim() . "<br>";
echo "Nilai: " . $mhs1->getNilai() . "<br>";
?>
