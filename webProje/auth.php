<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap / Kayıt Ol - Rezervasyon</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="images/wing.png" type="image/ico">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <nav>
            <div class="logo">
                <a href="index.php" class="d-flex align-items-center text-decoration-none">
                    <img src="images/logo.png" alt="Logo" style="height: 40px;">
                    <span class="ms-2 text-white fw-bold">Rezervasyon Cenneti</span>
                </a>
            </div>
            <ul>
                <li><a href="index.php">Ana Sayfa</a></li>
                <li><a href="#index.php#about">Hakkımızda</a></li>
                <li><a href="index.php#contact">İletişim</a></li>
                <li><a href="admin.php">Admin Paneli</a></li>
            </ul>
        </nav>
    </header>

    <main class="container auth-page">
        <div class="auth-container">
            <div id="login-form" class="auth-form active">
                 <h2>Giriş Yap</h2>
                 <form action="#" method="POST"> <!-- Action backend'e göre ayarlanacak -->
                     <div class="form-group">
                         <label for="login-email">E-posta:</label>
                         <input type="email" id="login-email" name="email" required>
                     </div>
                     <div class="form-group">
                         <label for="login-password">Şifre:</label>
                         <input type="password" id="login-password" name="password" required>
                     </div>
                     <button type="submit">Giriş Yap</button>
                     <p>Hesabınız yok mu? <a href="#" onclick="toggleForms()">Kayıt Ol</a></p>
                 </form>
            </div>

            <div id="register-form" class="auth-form">
                <h2>Kayıt Ol</h2>
                <form action="#" method="POST"> <!-- Action backend'e göre ayarlanacak -->
                    <div class="form-group">
                        <label for="register-name">Ad Soyad:</label>
                        <input type="text" id="register-name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="register-email">E-posta:</label>
                        <input type="email" id="register-email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone-number">Telefon Numarası:</label>
                        <input type="tel" id="phone-number" name="phone" required>
                    </div>
                     <div class="form-group">
                        <label for="register-confirm-password">Şifre:</label>
                        <input type="password" id="register-password" name="password" required>
                    </div>
                    <button type="submit">Kayıt Ol</button>
                    <p>Zaten hesabınız var mı? <a href="#" onclick="toggleForms()">Giriş Yap</a></p>
                </form>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <!-- Company Information -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Rezervasyon Cenneti</h5>
                    <p class="small">
                        Tatil hayallerinizi gerçeğe dönüştüren premium otel rezervasyon hizmetleri sunuyoruz. En iyi otellerde en uygun fiyatlarla konaklayın.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-light btn-floating me-2" style="width: 35px; height: 35px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-floating me-2" style="width: 35px; height: 35px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-floating me-2" style="width: 35px; height: 35px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-floating" style="width: 35px; height: 35px; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%;">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Hızlı Bağlantılar</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="index.php" class="text-white text-decoration-none">
                                <i class="fas fa-angle-right me-2"></i>Ana Sayfa
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#about" class="text-white text-decoration-none">
                                <i class="fas fa-angle-right me-2"></i>Hakkımızda
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#featured-hotels" class="text-white text-decoration-none">
                                <i class="fas fa-angle-right me-2"></i>Oteller
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#contact" class="text-white text-decoration-none">
                                <i class="fas fa-angle-right me-2"></i>İletişim
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="auth.php" class="text-white text-decoration-none">
                                <i class="fas fa-angle-right me-2"></i>Giriş Yap / Kayıt Ol
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Hizmetlerimiz</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#" class="text-white text-decoration-none">
                                <i class="fas fa-angle-right me-2"></i>Otel Rezervasyonu
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-white text-decoration-none">
                                <i class="fas fa-angle-right me-2"></i>Apart Daireler
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-white text-decoration-none">
                                <i class="fas fa-angle-right me-2"></i>Bungalovlar
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-white text-decoration-none">
                                <i class="fas fa-angle-right me-2"></i>Özel Teklifler
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-white text-decoration-none">
                                <i class="fas fa-angle-right me-2"></i>Müşteri Destek
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">İletişim Bilgileri</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-home me-2"></i> Üçtutlar Mahallesi No:123, Merkez, Çorum
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-envelope me-2"></i> rezervasyoncen19@hotmail.com
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-phone me-2"></i> +90 (212) 123 45 67
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-print me-2"></i> +90 (212) 123 45 68
                        </li>
                    </ul>
                    <div class="mt-4">
                        <h6 class="text-uppercase mb-2">Bültenimize Abone Olun</h6>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="E-posta adresiniz">
                            <button class="btn btn-outline-light" type="button">Abone Ol</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3 mt-4" style="background-color: rgba(0, 0, 0, 0.2);">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-start mb-3 mb-md-0">
                    © 2024 RezervasyonCenneti. Tüm hakları saklıdır.
                </div>
                <div class="col-md-6 text-md-end">
                    <img src="images/indir.jpeg" alt="Ödeme Yöntemleri" style="height: auto; max-height: 30px; width: auto; max-width: 150px; object-fit: contain;" class="me-2">
                    <a href="#" class="text-white me-3 text-decoration-none small">Gizlilik Politikası</a>
                    <a href="#" class="text-white me-3 text-decoration-none small">Kullanım Şartları</a>
                    <a href="#" class="text-white text-decoration-none small">Çerez Politikası</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html> 