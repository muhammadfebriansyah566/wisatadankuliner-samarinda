<?php
$nama = $_GET['tempat'] ?? 'Tidak diketahui';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Wisata</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container" style="margin-top:50px;">
    <h2>Detail Tempat: <?php echo htmlspecialchars($nama); ?></h2>
    <p>Informasi lebih lanjut tentang <?php echo htmlspecialchars($nama); ?> akan ditampilkan di sini.</p>
    <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
  </div>
</body>
</html>
