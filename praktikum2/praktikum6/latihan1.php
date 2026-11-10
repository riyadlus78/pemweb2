
<?php
class Pengguna {
    public $nama;
    public $email;

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}

$user1 = new Pengguna();
$user1->nama = "Riyadlus";
$user1->email = "riyadlus@gmail.com";

$user1->tampilkanData();
?>
