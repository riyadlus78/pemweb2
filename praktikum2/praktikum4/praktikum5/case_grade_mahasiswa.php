
<?php
class Mahasiswa {
    private $nim;
    private $nama;
    private $prodi;
    private $nilai;
    private $semester;

    public function __construct($nim, $nama, $prodi, $semester) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
        $this->nilai = null;
    }

    public function setNilai($nilai) {
        if (is_numeric($nilai) && $nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;
            return true;
        }

        return false;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getProdi() {
        return $this->prodi;
    }

    public function getNilai() {
        return $this->nilai;
    }

    public function getSemester() {
        return $this->semester;
    }

    public function tentukanGrade() {
        if ($this->nilai === null) {
            return "Belum ada nilai";
        } elseif ($this->nilai >= 80) {
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

$mhs1 = new Mahasiswa(
    "231001",
    "Andi",
    "Sistem Informasi",
    3
);

if ($mhs1->setNilai(85)) {
    echo "<h3>Data Mahasiswa</h3>";
    echo "NIM: " . $mhs1->getNim() . "<br>";
    echo "Nama: " . $mhs1->getNama() . "<br>";
    echo "Program Studi: " . $mhs1->getProdi() . "<br>";
    echo "Semester: " . $mhs1->getSemester() . "<br>";
    echo "Nilai: " . $mhs1->getNilai() . "<br>";
    echo "Grade: " . $mhs1->tentukanGrade() . "<br>";
} else {
    echo "Nilai tidak valid! Masukkan nilai 0-100.";
}
?>
