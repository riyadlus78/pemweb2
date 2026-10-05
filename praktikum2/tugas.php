<?php
//================================================================================//
# TUGAS PRAKTIKUM: SISTEM SEDERHANA RENTAL KENDARAAN
//================================================================================//

//--------------------------------------------------------------------------------//
// 1. CLASS KENDARAAN
//--------------------------------------------------------------------------------//
class Kendaraan {
    // 3 Property untuk Class Kendaraan
    public $nomorPlat;
    public $merk;
    public $jenis;
    public $hargaSewaPerHari;
    public $statusSewa; // Contoh: 'Tersedia' atau 'Disewa'

    // Method 1: Menampilkan seluruh data/informasi kendaraan
    public function tampilkanData() {
        echo "Nomor Plat : "    . $this->nomorPlat . "<br>";
        echo "Merk       : "    . $this->merk . "<br>";
        echo "Jenis      : "    . $this->jenis . "<br>";
        echo "Harga/Hari : Rp " . number_format($this->hargaSewaPerHari, 0, ',', '.') . "<br>";
        echo "Status     : "    . $this->statusSewa . "<br><br>";
    }

    // Method 2: Menghitung estimasi total biaya sewa berdasarkan durasi hari
    public function hitungTotalSewa($jumlahHari) {
        $total = $this->hargaSewaPerHari * $jumlahHari;
        return $total;
    }
}


//--------------------------------------------------------------------------------//
// 2. CLASS PELANGGAN
//--------------------------------------------------------------------------------//
class Pelanggan {
    // 3 Property untuk Class Pelanggan
    public $idPelanggan;
    public $nama;
    public $alamat;
    public $noTelepon;

    // Method 1: Menampilkan data pribadi pelanggan
    public function tampilkanData() {
        echo "ID Pelanggan : " . $this->idPelanggan . "<br>";
        echo "Nama         : " . $this->nama . "<br>";
        echo "Alamat       : " . $this->alamat . "<br>";
        echo "No. Telepon  : " . $this->noTelepon . "<br><br>";
    }

    // Method 2: Menimpa/mencatat transaksi sewa kendaraan oleh pelanggan
    public function sewaKendaraan($objekKendaraan, $lamaHari) {
        echo "<b>" . $this->nama . "</b> melakukan transaksi sewa kendaraan <b>" . $objekKendaraan->merk . " (" . $objekKendaraan->nomorPlat . ")</b> selama <b>" . $lamaHari . " hari</b>.<br>";
        $totalBiaya = $objekKendaraan->hitungTotalSewa($lamaHari);
        echo "Total Biaya Sewa: <b>Rp " . number_format($totalBiaya, 0, ',', '.') . "</b><br><br>";
    }
}


//================================================================================//
# IMPLEMENTASI DAN PENGUJIAN OBJEK
//================================================================================//

echo "<h2>Sistem Informasi Rental Kendaraan</h2>";
echo "<hr>";

// --- INSTANSIASI OBJEK CLASS KENDARAAN ---
echo "<h3>1. Data Armada Kendaraan</h3>";

$kendaraan1 = new Kendaraan();
$kendaraan1->nomorPlat           = "AG 1234 AB";
$kendaraan1->merk                = "Toyota Avanza";
$kendaraan1->jenis               = "Mobil";
$kendaraan1->hargaSewaPerHari    = 350000;
$kendaraan1->statusSewa          = "Tersedia";

$kendaraan2 = new Kendaraan();
$kendaraan2->nomorPlat           = "AG 5678 CD";
$kendaraan2->merk                = "Honda PCX";
$kendaraan2->jenis               = "Motor";
$kendaraan2->hargaSewaPerHari    = 100000;
$kendaraan2->statusSewa          = "Tersedia";

// Menampilkan Data Kendaraan
echo "<b>Kendaraan 1:</b><br>";
$kendaraan1->tampilkanData();

echo "<b>Kendaraan 2:</b><br>";
$kendaraan2->tampilkanData();


// --- INSTANSIASI OBJEK CLASS PELANGGAN ---
echo "<hr>";
echo "<h3>2. Data Pelanggan & Transaksi Sewa</h3>";

$pelanggan1 = new Pelanggan();
$pelanggan1->idPelanggan    = "P001";
$pelanggan1->nama           = "Muhammad Riyadlus Sholihiin";
$pelanggan1->alamat         = "Nganjuk";
$pelanggan1->noTelepon      = "083119726592";

$pelanggan2 = new Pelanggan();
$pelanggan2->idPelanggan    = "P002";
$pelanggan2->nama           = "Budi Pratama";
$pelanggan2->alamat         = "Kediri";
$pelanggan2->noTelepon      = "089876543210";

// Menampilkan Data Pelanggan
echo "<b>Pelanggan 1:</b><br>";
$pelanggan1->tampilkanData();

echo "<b>Pelanggan 2:</b><br>";
$pelanggan2->tampilkanData();


// --- PENGUJIAN METHOD TRANSAKSI SEWA ---
echo "<hr>";
echo "<h3>3. Simulasi Transaksi Rental</h3>";

// Pelanggan 1 menyewa Kendaraan 1 selama 3 hari
$pelanggan1->sewaKendaraan($kendaraan1, 3);

// Pelanggan 2 menyewa Kendaraan 2 selama 2 hari
$pelanggan2->sewaKendaraan($kendaraan2, 2);

?>