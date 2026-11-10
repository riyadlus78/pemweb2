
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
}

// Child Class Administrasi
class Administrasi extends Pengguna {
    private $idPegawai;
    private $bagian;

    public function __construct($nama, $email, $idPegawai, $bagian) {
        parent::__construct($nama, $email);

        $this->idPegawai = $idPegawai;
        $this->bagian = $bagian;
    }

    public function tampilkanData() {
        parent::tampilkanData();

        echo "ID Pegawai: " . $this->idPegawai . "<br>";
        echo "Bagian: " . $this->bagian . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Tenaga Administrasi<br>";
    }
}

// Object Administrasi
$admin = new Administrasi(
    "Siti Aminah",
    "siti@gmail.com",
    "ADM001",
    "Akademik"
);

// Menampilkan data
echo "<h3>Data Administrasi</h3>";

$admin->tampilkanData();
$admin->tampilkanPeran();

?>
