<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arama Sonuçları - Rezervasyon</title>
    <link rel="icon" href="images/wing.png" type="image/ico">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
             <div class="logo">
                 <a href="index.php"><img src="images/logo.png" alt="Logo" style="height: 40px;"></a>
             </div>
            <ul>
                <li><a href="index.php">Ana Sayfa</a></li>
                <li><a href="index.php#about">Hakkımızda</a></li>
                <li><a href="index.php#contact">İletişim</a></li>
                <li><a href="auth.php">Giriş Yap / Kayıt Ol</a></li>
                 <li><a href="admin.php">Admin Paneli</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <h1>Arama Sonuçları</h1>

        <div class="search-criteria">
            <p><strong>Aranan Konum:</strong> <?php echo htmlspecialchars($_GET['location'] ?? 'Belirtilmedi'); ?></p>
            <p><strong>Giriş Tarihi:</strong> <?php echo htmlspecialchars($_GET['checkin'] ?? 'Belirtilmedi'); ?></p>
            <p><strong>Çıkış Tarihi:</strong> <?php echo htmlspecialchars($_GET['checkout'] ?? 'Belirtilmedi'); ?></p>
            <p><strong>Misafir Sayısı:</strong> <?php echo htmlspecialchars($_GET['guests'] ?? 'Belirtilmedi'); ?></p>
        </div>

        <section class="hotel-results">
            <h2>Uygun Oteller</h2>
            <div class="hotel-list">
                <!-- Örnek Otel Sonucu -->
                <div class="hotel-card">
                    <img src="images/hotel1.jpg" alt="Otel 1">
                    <h3>Lüks Şehir Oteli</h3>
                    <p>Şehir merkezinde konforlu konaklama.</p>
                    <p><strong>Fiyat:</strong> 500 TL / Gece</p>
                    <a href="#" class="btn">Rezervasyon Yap</a>
                </div>
                 <div class="hotel-card">
                    <img src="images/hotel2.jpg" alt="Otel 2">
                    <h3>Sahil Resort</h3>
                    <p>Denize sıfır, huzurlu bir tatil.</p>
                     <p><strong>Fiyat:</strong> 750 TL / Gece</p>
                    <a href="#" class="btn">Rezervasyon Yap</a>
                </div>
                <!-- Backend entegrasyonu ile dinamik olarak doldurulacak -->
                 <p><em>Not: Bu sayfadaki otel listesi ve fiyatlar örnektir. Gerçek veriler backend entegrasyonu ile gösterilecektir.</em></p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Otel Rezervasyon Sistemi. Tüm hakları saklıdır.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html> 