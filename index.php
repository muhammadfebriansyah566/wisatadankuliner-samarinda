<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wisata & Kuliner Samarinda</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Navbar -->
  <nav>
    <ul>
      <li><a href="#wisata">Wisata</a></li>
      <li><a href="#kuliner">Kuliner</a></li>
      <li><a href="#tentang">Tentang</a></li>
      <?php if (isset($_SESSION['username'])): ?>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="logout.php">Logout</a></li>
      <?php else: ?>
        <li><a href="login.php">Login</a></li>
      <?php endif; ?>
    </ul>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Selamat Datang di Wisata & Kuliner Samarinda</h1>
  </section>

  <main class="container">
    <!-- Section Wisata -->
    <section id="wisata">
      <h2>Destinasi Wisata</h2>
      <div class="grid">
        <div class="card">
          <img src="img/jembatan-mahakam.jpg" alt="Jembatan Mahakam">
          <div class="card-content">
            <h3>Jembatan Mahakam</h3>
            <p>Ikon kota Samarinda yang megah, cocok untuk menikmati pemandangan sungai Mahakam.</p>
            <a href="detail.php?tempat=Jembatan Mahakam" class="btn btn-primary">Lihat Selengkapnya</a>
          </div>
        </div>
        <div class="card">
          <img src="img/islamic-center.jpg" alt="Islamic Center Samarinda">
          <div class="card-content">
            <h3>Islamic Center Samarinda</h3>
            <p>Masjid terbesar di Kalimantan Timur dengan arsitektur megah dan menawan.</p>
            <a href="detail.php?tempat=Islamic Center Samarinda" class="btn btn-primary">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section Kuliner -->
    <section id="kuliner">
      <h2>Kuliner Khas</h2>
      <div class="grid">
        <div class="card">
          <img src="img/nasi-bekepor.jpg" alt="Nasi Bekepor">
          <div class="card-content">
            <h3>Nasi Bekepor</h3>
            <p>Makanan khas Samarinda yang kaya rempah, biasanya disajikan dengan ikan asin.</p>
            <a href="detail.php?tempat=Nasi Bekepor" class="btn btn-primary">Lihat Selengkapnya</a>
          </div>
        </div>
        <div class="card">
          <img src="img/amplang.jpg" alt="Amplang Samarinda">
          <div class="card-content">
            <h3>Amplang</h3>
            <p>Camilan khas berupa kerupuk ikan tenggiri yang gurih dan renyah.</p>
            <a href="detail.php?tempat=Amplang Samarinda" class="btn btn-primary">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Tentang -->
    <section id="tentang">
      <h2>Tentang Website</h2>
      <p>
        Website ini dibuat untuk memperkenalkan keindahan wisata dan kelezatan kuliner khas Samarinda.
        Dengan tampilan sederhana, diharapkan pengunjung dapat lebih mengenal budaya lokal.
      </p>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Wisata & Kuliner Samarinda | Dibuat untuk Post Test</p>
  </footer>
  
  <script src="script.js"></script>

</body>
</html>
