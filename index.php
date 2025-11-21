<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Index Sederhana</title>

    <!-- kalau nanti ada style.css, otomatis terpakai -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Bisa diganti sesuai nama kamu
        $nama = "Nama Saya";
    ?>

    <h1>Halo, <?php echo $nama; ?>!</h1>
    <p>Ini adalah halaman <strong>index.php</strong> pertama saya.</p>

    <p>
        Waktu saat ini:
        <?php echo date('d-m-Y H:i'); ?>
    </p>
</body>
</html>
