
<?php
class Pengguna {
    public $nama;
    public $email;

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}

// Child Class
class Mahasiswa extends Pengguna {
    public $nim;
    public $prodi;
}

$mhs1 = new Mahasiswa();

$mhs1->nama = "Riyadlus";
$mhs1->email = "riyadlus@gmail.com";
$mhs1->nim = "23001";
$mhs1->prodi = "Sistem Informasi";

$mhs1->tampilkanData();

echo "NIM: " . $mhs1->nim . "<br>";
echo "Program Studi: " . $mhs1->prodi;
?>
