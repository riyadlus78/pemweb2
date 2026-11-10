
<?php
class Pengguna {
    public $nama;
    public $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}

class Mahasiswa extends Pengguna {
    public $nim;
    public $prodi;

    public function __construct($nama, $email, $nim, $prodi) {
        parent::__construct($nama, $email);

        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanMahasiswa() {
        $this->tampilkanData();
        echo "NIM: " . $this->nim . "<br>";
        echo "Prodi: " . $this->prodi . "<br>";
    }
}

// Object pertama
$mhs1 = new Mahasiswa(
    "Riyadlus",
    "riyadlus@gmail.com",
    "23001",
    "Sistem Informasi"
);

// Object kedua
$mhs2 = new Mahasiswa(
    "Andi",
    "andi@gmail.com",
    "23002",
    "Manajemen Informatika"
);

echo "<h3>Data Mahasiswa 1</h3>";
$mhs1->tampilkanMahasiswa();

echo "<h3>Data Mahasiswa 2</h3>";
$mhs2->tampilkanMahasiswa();
?>
