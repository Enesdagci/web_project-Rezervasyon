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
    <link rel="stylesheet" href="css/style_2.css">
</head>

<body>
    <!-- Header/Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="Rezervasyon Cenneti">
                    <span>Rezervasyon Cenneti</span>
                </a>

                <!-- Hamburger Menu Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Items -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <i class="fas fa-home me-1"></i> Ana Sayfa
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="hotelsDropdown" role="button" 
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-hotel me-1"></i> Oteller
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="hotelsDropdown">
                                <li><a class="dropdown-item" href="index.php#featured-hotels">Öne Çıkan Oteller</a></li>
                                <li><a class="dropdown-item" href="search.php">Otel Ara</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Lüks Oteller</a></li>
                                <li><a class="dropdown-item" href="#">Apart Daireler</a></li>
                                <li><a class="dropdown-item" href="#">Bungalovlar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#about">
                                <i class="fas fa-info-circle me-1"></i> Hakkımızda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#contact">
                                <i class="fas fa-envelope me-1"></i> İletişim
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="auth.php">
                                <i class="fas fa-user me-1"></i> Giriş / Kayıt
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin.php" class="btn btn-admin ms-2">
                                <i class="fas fa-cog me-1"></i> Admin
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container">
            <div class="auth-container">
                <div class="auth-card">
                    <!-- Login Form -->
                    <div class="login-form active">
                        <div class="auth-header">
                            <h2>Hoş Geldiniz</h2>
                            <p>Hesabınıza güvenli giriş yapın</p>
                        </div>

                        <form id="loginForm">
                            <!-- Email Field -->
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="login-email" name="email" 
                                       placeholder="E-posta Adresi" required>
                                <label for="login-email">E-posta Adresi</label>
                            </div>

                            <!-- Password Field -->
                            <div class="form-floating mb-3 position-relative">
                                <input type="password" class="form-control" id="login-password" name="password" 
                                       placeholder="Şifre" required minlength="8">
                                <label for="login-password">Şifre</label>
                                <button type="button" class="password-toggle-btn" onclick="togglePassword('login-password')"
                                        aria-label="Şifreyi göster/gizle">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                            </div>

                            <!-- Options Row -->
                            <div class="login-options">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" name="remember">
                                    <label class="form-check-label" for="remember-me">
                                        Beni hatırla
                                    </label>
                                </div>
                                <a href="reset-password.php" class="forgot-password">Şifremi unuttum?</a>
                            </div>

                            <!-- Security Notice -->
                            <div class="alert alert-info d-flex align-items-center" role="alert">
                                <i class="fas fa-shield-alt me-2"></i>
                                <div>Güvenli bağlantı üzerinden oturum açıyorsunuz</div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-auth" id="loginButton">
                                <span class="btn-text"><i class="fas fa-sign-in-alt me-2"></i>Giriş Yap</span>
                                <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            </button>

                            <!-- Divider -->
                            <div class="divider">
                                <span>veya</span>
                            </div>

                            <!-- Social Login Button -->
                            <button type="button" class="btn btn-outline-secondary w-100 mb-4">
                                <i class="fab fa-google me-2"></i> Google ile giriş yap
                            </button>

                            <!-- Register Link -->
                            <div class="text-center">
                                <p class="mb-0">
                                    Hesabınız yok mu? 
                                    <a class="auth-link" id="showRegisterForm">Hemen kayıt olun</a>
                                </p>
                            </div>
                        </form>
                    </div>

                    <!-- Register Form -->
                    <div class="register-form">
                        <div class="auth-header">
                            <h2>Kayıt Ol</h2>
                            <p>Rezervasyon Cenneti'ne üye olarak yolculuğunuza başlayın</p>
                        </div>

                        <form id="registerForm" class="needs-validation" novalidate>
                            <!-- Name Fields Row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- First Name Field -->
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="firstName" name="firstName" 
                                               placeholder="Adınız" required>
                                        <label for="firstName">Adınız</label>
                                        <div class="invalid-feedback">Lütfen adınızı girin.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Last Name Field -->
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="lastName" name="lastName" 
                                               placeholder="Soyadınız" required>
                                        <label for="lastName">Soyadınız</label>
                                        <div class="invalid-feedback">Lütfen soyadınızı girin.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Email Field -->
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="register-email" name="email" 
                                       placeholder="E-posta Adresi" required>
                                <label for="register-email">E-posta Adresi</label>
                                <div class="invalid-feedback">Lütfen geçerli bir e-posta adresi girin.</div>
                            </div>

                            <!-- Phone Field -->
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="phone" name="phone" 
                                       placeholder="Telefon Numarası" pattern="[0-9]{10,11}" required>
                                <label for="phone">Telefon Numarası</label>
                                <div class="invalid-feedback">Lütfen geçerli bir telefon numarası girin.</div>
                            </div>

                            <!-- Password Field -->
                            <div class="form-floating mb-3 position-relative">
                                <input type="password" class="form-control" id="register-password" name="password" 
                                       placeholder="Şifre" required minlength="8">
                                <label for="register-password">Şifre</label>
                                <button type="button" class="password-toggle-btn" onclick="togglePassword('register-password')"
                                        aria-label="Şifreyi göster/gizle">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                                <div class="invalid-feedback">Şifre en az 8 karakter olmalıdır.</div>
                            </div>

                            <!-- Password Strength Indicator -->
                            <div class="password-strength-container">
                                <div class="password-strength-meter">
                                    <div class="strength-segment" data-strength="1"></div>
                                    <div class="strength-segment" data-strength="2"></div>
                                    <div class="strength-segment" data-strength="3"></div>
                                    <div class="strength-segment" data-strength="4"></div>
                                </div>
                                <span class="password-strength-text"></span>
                            </div>

                            <!-- Confirm Password Field -->
                            <div class="form-floating mb-3 position-relative">
                                <input type="password" class="form-control" id="confirm-password" name="confirmPassword" 
                                       placeholder="Şifre Tekrarı" required minlength="8">
                                <label for="confirm-password">Şifre Tekrarı</label>
                                <button type="button" class="password-toggle-btn" onclick="togglePassword('confirm-password')"
                                        aria-label="Şifreyi göster/gizle">
                                    <i class="fas fa-eye-slash"></i>
                                </button>
                                <div class="invalid-feedback">Şifreler eşleşmiyor.</div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="terms-container">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                    <label class="form-check-label" for="terms">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Kullanım Şartları</a>'nı okudum ve kabul ediyorum.
                                    </label>
                                    <div class="invalid-feedback">Devam etmek için kullanım şartlarını kabul etmelisiniz.</div>
                                </div>
                            </div>

                            <!-- Security Notice -->
                            <div class="alert alert-info d-flex align-items-center mb-4" role="alert">
                                <i class="fas fa-shield-alt me-2"></i>
                                <div>Güvenli bağlantı üzerinden kayıt oluyorsunuz</div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-auth" id="registerButton">
                                <span class="btn-text"><i class="fas fa-user-plus me-2"></i>Hesap Oluştur</span>
                                <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            </button>

                            <!-- Login Link -->
                            <div class="text-center">
                                <p class="mb-0">
                                    Zaten hesabınız var mı? 
                                    <a class="auth-link" id="showLoginForm">Giriş yapın</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Toast Container -->
        <div class="toast-container"></div>
        
        <!-- Terms Modal -->
        <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="termsModalLabel">Kullanım Şartları</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>1. Kullanım Koşulları</h5>
                        <p>RezervasyonCenneti web sitesini kullanarak, bu kullanım koşullarını kabul etmiş olursunuz. Bu web sitesini kullanmaya devam ederek, bu koşullara bağlı kalmayı kabul etmiş olursunuz.</p>
                        
                        <h5>2. Hesap Kullanımı</h5>
                        <p>Hesap açtığınızda, hesabınızın güvenliğinden ve hesabınız altında gerçekleşen tüm etkinliklerden siz sorumlusunuz. Hesabınızı başkalarıyla paylaşmamanız önerilir.</p>
                        
                        <h5>3. Rezervasyon Koşulları</h5>
                        <p>Rezervasyon yaparken belirtilen koşullar geçerlidir. Rezervasyon iptali ve değişikliği, her otelin kendi politikasına bağlıdır.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Company Information -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-uppercase mb-4">Rezervasyon Cenneti</h5>
                    <p class="small">
                        Tatil hayallerinizi gerçeğe dönüştüren premium otel rezervasyon hizmetleri sunuyoruz.
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
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6 mb-4">
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
                    </ul>
                </div>

                <!-- Services -->
                <div class="col-lg-3 col-md-6 mb-4">
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
                    </ul>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-3 col-md-6 mb-4">
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
                    </ul>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        © 2024 RezervasyonCenneti. Tüm hakları saklıdır.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="#" class="text-white me-3 text-decoration-none small">Gizlilik Politikası</a>
                        <a href="#" class="text-white text-decoration-none small">Kullanım Şartları</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/script.js"></script>
    <script src="js/login.js"></script>
</body>
</html> 