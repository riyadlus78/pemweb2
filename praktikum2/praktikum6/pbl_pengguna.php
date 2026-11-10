
<?php

// Parent Class
class Pengguna {
    protected $nama;
    protected $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Pengguna Sistem<br>";
    }
}

// Child Class Mahasiswa
class Mahasiswa extends Pengguna {
    private $nim;
    private $prodi;

    public function __construct($nama, $email, $nim, $prodi) {
        parent::__construct($nama, $email);
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "NIM: " . $this->nim . "<br>";
        echo "Prodi: " . $this->prodi . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Mahasiswa<br>";
    }
}

// Child Class Dosen
class Dosen extends Pengguna {
    private $nidn;
    private $bidangKeahlian;

    public function __construct($nama, $email, $nidn, $bidangKeahlian) {
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
        $this->bidangKeahlian = $bidangKeahlian;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "NIDN: " . $this->nidn . "<br>";
        echo "Bidang Keahlian: " . $this->bidangKeahlian . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Dosen<br>";
    }
}

// Object Mahasiswa
$mhs = new Mahasiswa(
    "Riyadlus",
    "riyadlus@gmail.com",
    "23001",
    "Sistem Informasi"
);

// Object Dosen
$dosen = new Dosen(
    "Budi Santoso",
    "budi@gmail.com",
    "123456",
    "Pemrograman Web"
);

// Menampilkan data
echo "<h3>Data Mahasiswa</h3>";
$mhs->tampilkanData();
$mhs->tampilkanPeran();

echo "<hr>";

echo "<h3>Data Dosen</h3>";
$dosen->tampilkanData();
$dosen->tampilkanPeran();

?>
