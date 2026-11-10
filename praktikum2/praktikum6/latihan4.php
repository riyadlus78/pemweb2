
<?php
class Pengguna {
    public function tampilkanPeran() {
        echo "Peran: Pengguna Sistem<br>";
    }
}

class Mahasiswa extends Pengguna {
    public function tampilkanPeran() {
        echo "Peran: Mahasiswa<br>";
    }
}

class Dosen extends Pengguna {
    public function tampilkanPeran() {
        echo "Peran: Dosen<br>";
    }
}
class Admin extends Pengguna {
    public function tampilkanPeran() {
        echo "Peran: Admin<br>";
    }
}
// Object
$mhs = new Mahasiswa();
$dosen = new Dosen();
$admin = new Admin();

$admin->tampilkanPeran();

$mhs->tampilkanPeran();
$dosen->tampilkanPeran();
?>
