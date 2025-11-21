<?php
    // index.php
    // File PHP sederhana untuk latihan
    $nama = "Nama Saya"; // silakan ganti dengan nama kamu
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Index Sederhana</title>

    <!-- Hubungkan ke file CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Halo, <?php echo $nama; ?>!</h1>

        <p>
            Ini adalah halaman <strong>index.php</strong> pertama saya
            dengan tampilan yang sudah menggunakan <code>style.css</code>.
        </p>

        <p>
            Waktu saat ini:
            <strong><?php echo date('d-m-Y H:i'); ?></strong>
        </p>

        <p>
            File ini berada di folder proyek PHP saya dan dijalankan melalui server
            (misalnya XAMPP / Laragon).
        </p>
    </div>
</body>
</html>
