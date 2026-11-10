<?php
$mahasiswa = [
    [
        "nim" => "23001",
        "nama" => "Andi",
        "prodi" => "Sistem Informasi"
    ],
    [
        "nim" => "23002",
        "nama" => "Budi",
        "prodi" => "Sistem Informasi"
    ],
    [
        "nim" => "23003",
        "nama" => "Citra",
        "prodi" => "Sistem Informasi"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
        </tr>

        <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= htmlspecialchars($mhs["nim"]) ?></td>
            <td><?= htmlspecialchars($mhs["nama"]) ?></td>
            <td><?= htmlspecialchars($mhs["prodi"]) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
