<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RezervasyonCenneti | Hotel | Apart | Bungladov</title>
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
                <li><a href="#about">Hakkımızda</a></li>
                <li><a href="#contact">İletişim</a></li>
                <li><a href="auth.php">Giriş Yap / Kayıt Ol</a></li>
                <li><a href="admin.php">Admin Paneli</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero" style="background-image: url('images/image.png');">
            <div class="hero-content">
                <h1>Hayalinizdeki Tatile Bir Adım Uzaktasınız</h1>
                <p>En iyi otellerde en uygun fiyatlarla konaklayın.</p>
                <form action="search.php" method="GET" class="search-form">
                    <input type="text" name="location" placeholder="Şehir veya Otel Adı" required>
                    <input type="date" name="checkin" required>
                    <input type="date" name="checkout" required>
                    <select name="guests" required>
                        <option value="1">1 Misafir</option>
                        <option value="2">2 Misafir</option>
                        <option value="3">3 Misafir</option>
                        <option value="4+">4+ Misafir</option>
                    </select>
                    <button type="submit">Otel Ara</button>
                </form>
            </div>
        </section>

        <section id="featured-hotels" class="container">
            <h2>Öne Çıkan Oteller</h2>
            <div class="divider-custom mx-auto mb-4">
                <div class="divider-custom-line bg-info" style="height: 3px; width: 100%;"></div>
            </div>
            <div class="hotel-list">
                <!-- Örnek Otel Kartı -->
                <div class="hotel-card">
                    <img src="images/hotel1.jpg" alt="Otel 1">
                    <h3>Lüks Şehir Oteli</h3>
                    <p>Şehir merkezinde konforlu konaklama.</p>
                    <a href="search.php?hotel_id=1" class="btn">Detayları Gör</a>
                </div>
                <div class="hotel-card">
                    <img src="images/hotel2.jpg" alt="Otel 2">
                    <h3>Sahil Resort</h3>
                    <p>Denize sıfır, huzurlu bir tatil.</p>
                    <a href="search.php?hotel_id=2" class="btn">Detayları Gör</a>
                </div>
                <!-- Daha fazla otel kartı eklenebilir -->
            </div>
        </section>

        <section id="about" class="py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <h2 class="display-4 fw-bold mb-3">Hakkımızda</h2>
                        <div class="divider-custom mx-auto mb-4">
                            <div class="divider-custom-line bg-info" style="height: 3px; width: 100%;"></div>
                        </div>
                        <p class="lead text-muted">2025 yılından bu yana müşterilerimize en iyi tatil deneyimini yaşatmak için buradayız.</p>
                    </div>
                </div>

                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="images/otel.jpg" alt="Hakkımızda" class="img-fluid rounded shadow-sm">
                    </div>
                    <div class="col-lg-6">
                        <h3 class="fw-bold mb-4">Hikayemiz</h3>
                        <p>Rezervasyon Cenneti, 2025 yılında Türkiye'nin tatil deneyimini yeniden tanımlamak amacıyla kuruldu. Kurucularımız, tatil planlamanın zorluklarını bizzat yaşamış ve daha kolay, daha güvenilir bir rezervasyon sistemi hayaliyle yola çıkmışlardır.</p>
                        <p>Geçen yıllar içinde, binlerce müşteriye hizmet verdik ve portföyümüzü sürekli genişlettik. Bugün, Türkiye'nin dört bir yanında 500'den fazla premium otel, apart ve bungalov seçeneği sunuyoruz.</p>
                        <p>Müşteri memnuniyetini ön planda tutan yaklaşımımızla, tatil sektöründe güvenilir bir isim haline geldik. Teknolojik altyapımız ve uzman ekibimiz sayesinde, müşterilerimize kesintisiz ve sorunsuz bir rezervasyon deneyimi sunuyoruz.</p>
                    </div>
                </div>

                <div class="row my-5">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center py-5">
                                <div class="mb-4">
                                    <i class="fas fa-eye fa-3x text-info"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Vizyonumuz</h4>
                                <p class="text-muted mb-0">Türkiye'nin lider online tatil rezervasyon platformu olmak ve müşterilerimize unutulmaz tatil deneyimleri sunmak.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center py-5">
                                <div class="mb-4">
                                    <i class="fas fa-bullseye fa-3x text-info"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Misyonumuz</h4>
                                <p class="text-muted mb-0">Müşterilerimize en uygun fiyatlarla en kaliteli konaklama seçeneklerini sunarak, tatil planlamasını kolay ve keyifli hale getirmek.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center py-5">
                                <div class="mb-4">
                                    <i class="fas fa-heart fa-3x text-info"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Değerlerimiz</h4>
                                <p class="text-muted mb-0">Dürüstlük, şeffaflık, müşteri memnuniyeti ve sürekli yenilikçilik prensipleriyle çalışıyoruz.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 pt-3">
                    <div class="col-12 text-center mb-5">
                        <h3 class="fw-bold">Rakamlarla Biz</h3>
                        <div class="divider-custom mx-auto mb-4">
                            <div class="divider-custom-line bg-info" style="height: 3px; width: 100%;"></div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-0">
                        <div class="text-center">
                            <h2 class="display-4 fw-bold text-info mb-2">500+</h2>
                            <p class="text-muted">Anlaşmalı Otel</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-0">
                        <div class="text-center">
                            <h2 class="display-4 fw-bold text-info mb-2">25K+</h2>
                            <p class="text-muted">Mutlu Müşteri</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-md-0">
                        <div class="text-center">
                            <h2 class="display-4 fw-bold text-info mb-2">30+</h2>
                            <p class="text-muted">Turizm Bölgesi</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <h2 class="display-4 fw-bold text-info mb-2">5</h2>
                            <p class="text-muted">Yıllık Tecrübe</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 pt-5">
                    <div class="col-12 text-center mb-5">
                        <h3 class="fw-bold">Ekibimiz</h3>
                        <div class="divider-custom mx-auto mb-4">
                            <div class="divider-custom-line bg-info" style="height: 3px; width: 100%;"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="img-container" style="height: 300px; overflow: hidden;">
                                        <img src="images/ulvi.jpg" class="card-img-top img-fluid" alt="Takım Üyesi" style="object-fit: cover; width: 100%; height: 100%;">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold mb-1">Mustafa Ulvi Durmaz</h5>
                                        <p class="text-muted small mb-3">Kurucu ve CEO</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="mx-1 text-muted"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#" class="mx-1 text-muted"><i class="fab fa-twitter"></i></a>
                                            <a href="#" class="mx-1 text-muted"><i class="fas fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="img-container" style="height: 300px; overflow: hidden;">
                                        <img src="images/ben_1.jpg" class="card-img-top img-fluid" alt="Takım Üyesi" style="object-fit: cover; width: 100%; height: 100%;">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold mb-1">Enes Dağdelen</h5>
                                        <p class="text-muted small mb-3">CTO ve Kurucu Ortak</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="mx-1 text-muted"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#" class="mx-1 text-muted"><i class="fab fa-twitter"></i></a>
                                            <a href="#" class="mx-1 text-muted"><i class="fas fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="img-container" style="height: 300px; overflow: hidden;">
                                        <img src="images/alp.jpg" class="card-img-top img-fluid" alt="Takım Üyesi" style="object-fit: cover; width: 100%; height: 100%;">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-bold mb-1">Alperen Çalışır</h5>
                                        <p class="text-muted small mb-3">VeriTabanı Yöneticisi ve Kurucu Ortak</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="mx-1 text-muted"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="#" class="mx-1 text-muted"><i class="fab fa-twitter"></i></a>
                                            <a href="#" class="mx-1 text-muted"><i class="fas fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="container my-5">
            <h2 class="text-center mb-4">İletişim</h2>
            <div class="row g-4">
                <!-- Contact Information -->
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Bizimle İletişime Geçin</h3>
                            <div class="mb-3">
                                <p class="mb-2"><i class="fas fa-map-marker-alt text-info me-2"></i> <strong>Adres:</strong></p>
                                <p class="ms-4 mb-3">Üçtutlar Mahallesi No:123, Merkez, Çorum</p>
                            </div>
                            <div class="mb-3">
                                <p class="mb-2"><i class="fas fa-phone-alt text-info me-2"></i> <strong>Telefon:</strong></p>
                                <p class="ms-4 mb-3">+90 (212) 123 45 67</p>
                            </div>
                            <div class="mb-3">
                                <p class="mb-2"><i class="fas fa-envelope text-info me-2"></i> <strong>E-posta:</strong></p>
                                <p class="ms-4 mb-3">rezervasyoncen19@hotmail.com</p>
                            </div>
                            
                            <h5 class="mt-4 mb-3">Bizi Takip Edin</h5>
                            <div class="d-flex gap-3">
                                <a href="#" class="btn btn-outline-primary rounded-circle" style="width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center;">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-outline-info rounded-circle" style="width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center;">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-outline-danger rounded-circle" style="width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center;">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="btn btn-outline-success rounded-circle" style="width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center;">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Mesaj Gönderin</h3>
                            <form>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Adınız Soyadınız" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="E-posta Adresiniz" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Konu" required>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="5" placeholder="Mesajınız" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-info text-white">Gönder</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 