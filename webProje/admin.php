<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli - Rezervasyon</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/wing.png" type="image/ico">
    <!-- Chart.js kütüphanesini ekleyin (lokal veya CDN) -->
    <script src="js/chart.min.js"></script> 
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt="Logo" style="height: 40px;"></a>
            </div>
             <ul>
                 <li><a href="index.php">Siteyi Görüntüle</a></li>
                 <li><a href="#">Ayarlar</a></li>
                 <li><a href="auth.php?logout=true">Çıkış Yap</a></li> 
             </ul>
        </nav>
    </header>

    <main class="container admin-panel">
        <h1>Admin Paneli</h1>

        <section class="stats">
            <h2>Genel İstatistikler</h2>
            <div class="stat-cards">
                <div class="card">
                    <h3>Toplam Kullanıcı</h3>
                    <p id="total-users">1250</p> <!-- Örnek Veri -->
                </div>
                 <div class="card">
                    <h3>Toplam Rezervasyon</h3>
                    <p id="total-bookings">540</p> <!-- Örnek Veri -->
                </div>
                 <div class="card">
                    <h3>Aktif Oteller</h3>
                    <p id="active-hotels">85</p> <!-- Örnek Veri -->
                </div>
                <div class="card">
                    <h3>Bekleyen Onaylar</h3>
                    <p id="pending-approvals">15</p> <!-- Örnek Veri -->
                </div>
            </div>
        </section>

        <section class="charts">
            <h2>Kullanıcı İstatistikleri</h2>
            <div class="chart-container">
                 <canvas id="userRegistrationChart"></canvas>
            </div>
             <h2>Rezervasyon Trendleri</h2>
             <div class="chart-container">
                 <canvas id="bookingTrendChart"></canvas>
             </div>
        </section>

        <section class="recent-activity">
             <h2>Son Aktiviteler</h2>
             <ul>
                 <li>Yeni kullanıcı kaydı: ahmet_yilmaz</li>
                 <li>Yeni rezervasyon: Lüks Şehir Oteli - 2 Gece</li>
                 <li>Otel güncellemesi: Sahil Resort - Yeni fotoğraflar eklendi.</li>
                 <!-- Backend ile dinamik olarak doldurulacak -->
             </ul>
        </section>

    </main>

    <footer>
        <p>&copy; 2024 Otel Rezervasyon Sistemi - Admin Paneli</p>
    </footer>

    <script>
        // Örnek Chart.js Kullanımı (Backend'den gelen verilerle güncellenmeli)
        const userCtx = document.getElementById('userRegistrationChart').getContext('2d');
        const userChart = new Chart(userCtx, {
            type: 'line', // Grafik tipi: çizgi
            data: {
                labels: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran'], // Aylar
                datasets: [{
                    label: 'Yeni Kullanıcı Kayıtları',
                    data: [50, 75, 120, 90, 150, 180], // Örnek veri
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const bookingCtx = document.getElementById('bookingTrendChart').getContext('2d');
        const bookingChart = new Chart(bookingCtx, {
            type: 'bar', // Grafik tipi: çubuk
            data: {
                labels: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran'], // Aylar
                datasets: [{
                    label: 'Aylık Rezervasyon Sayısı',
                    data: [30, 45, 60, 55, 70, 85], // Örnek veri
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
             options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script src="js/script.js"></script> 
</body>
</html> 