<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RezervasyonCenneti | Hotel | Apart | Bungalow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="images/wing.png" type="image/ico">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
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
                            <a class="nav-link active" href="index.php">
                                <i class="fas fa-home me-1"></i> Ana Sayfa
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="hotelsDropdown" role="button" 
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-hotel me-1"></i> Oteller
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="hotelsDropdown">
                                <li><a class="dropdown-item" href="#featured-hotels">Öne Çıkan Oteller</a></li>
                                <li><a class="dropdown-item" href="search.php">Otel Ara</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Lüks Oteller</a></li>
                                <li><a class="dropdown-item" href="#">Apart Daireler</a></li>
                                <li><a class="dropdown-item" href="#">Bungalovlar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">
                                <i class="fas fa-info-circle me-1"></i> Hakkımızda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">
                                <i class="fas fa-envelope me-1"></i> İletişim
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="auth.php">
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

        <!-- Hotels Slideshow -->
        <section id="featured-hotels" class="container my-5">
            <h2 class="text-center">Öne Çıkan Oteller</h2>
            <div class="divider-custom mx-auto mb-4">
                <div class="divider-custom-line bg-info" style="height: 3px; width: 100%;"></div>
            </div>
            
            <div class="featured-hotels-container">
                <div id="hotelCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicators/dots with improved styling -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#hotelCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#hotelCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#hotelCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#hotelCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#hotelCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>

                    <!-- The slideshow/carousel with improved layout -->
                    <div class="carousel-inner rounded shadow">
                        <!-- Hotel 1 -->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6 position-relative overflow-hidden">
                                    <img src="images/hotel1.jpg" class="d-block w-100 rounded-start" alt="Lüks Şehir Oteli" style="height: 400px; object-fit: cover; transition: transform 0.5s;">
                                    <div class="position-absolute top-0 end-0 bg-primary bg-opacity-75 text-white px-3 py-2 rounded-bottom-end">
                                        <i class="fas fa-star me-1"></i> 5.0
                                    </div>
                                    <div class="position-absolute bottom-0 start-0 w-100 p-3 text-white" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                        <h4 class="mb-0">Lüks Şehir Oteli</h4>
                                        <p class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>İstanbul, Türkiye</p>
                                    </div>
                                </div>
                                <div class="col-md-6 bg-white d-flex align-items-center">
                                    <div class="p-4">
                                        <h3 class="mb-3 border-bottom pb-2">Otel Özellikleri</h3>
                                        <p class="lead mb-3">Şehir merkezinde konforlu konaklama.</p>
                                        <div class="mb-4">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-wifi text-primary"></i>
                                                </div>
                                                <span>Ücretsiz Wi-Fi</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-swimming-pool text-primary"></i>
                                                </div>
                                                <span>Havuz</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-utensils text-primary"></i>
                                                </div>
                                                <span>Restoran</span>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-4">
                                            <span class="text-muted text-decoration-line-through">₺1,500</span>
                                            <span class="fs-4 fw-bold text-primary ms-2">₺1,275 / gece</span>
                                        </div>
                                        
                                        <a href="search.php?hotel_id=1" class="btn btn-primary w-100 py-2">Detayları Gör</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Hotel 2 -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 position-relative overflow-hidden">
                                    <img src="images/hotel2.jpg" class="d-block w-100 rounded-start" alt="Sahil Resort" style="height: 400px; object-fit: cover; transition: transform 0.5s;">
                                    <div class="position-absolute top-0 end-0 bg-primary bg-opacity-75 text-white px-3 py-2 rounded-bottom-end">
                                        <i class="fas fa-star me-1"></i> 4.8
                                    </div>
                                    <div class="position-absolute bottom-0 start-0 w-100 p-3 text-white" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                        <h4 class="mb-0">Sahil Resort</h4>
                                        <p class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>Antalya, Türkiye</p>
                                    </div>
                                </div>
                                <div class="col-md-6 bg-white d-flex align-items-center">
                                    <div class="p-4">
                                        <h3 class="mb-3 border-bottom pb-2">Otel Özellikleri</h3>
                                        <p class="lead mb-3">Denize sıfır, huzurlu bir tatil.</p>
                                        <div class="mb-4">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-wifi text-primary"></i>
                                                </div>
                                                <span>Ücretsiz Wi-Fi</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-umbrella-beach text-primary"></i>
                                                </div>
                                                <span>Özel Plaj</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-cocktail text-primary"></i>
                                                </div>
                                                <span>Bar</span>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-4">
                                            <span class="text-muted text-decoration-line-through">₺1,800</span>
                                            <span class="fs-4 fw-bold text-primary ms-2">₺1,500 / gece</span>
                                        </div>
                                        
                                        <a href="search.php?hotel_id=2" class="btn btn-primary w-100 py-2">Detayları Gör</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Hotel 3 -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 position-relative overflow-hidden">
                                    <img src="images/yayla.jpg" class="d-block w-100 rounded-start" alt="Dağ Manzaralı Resort" style="height: 400px; object-fit: cover; transition: transform 0.5s;">
                                    <div class="position-absolute top-0 end-0 bg-primary bg-opacity-75 text-white px-3 py-2 rounded-bottom-end">
                                        <i class="fas fa-star me-1"></i> 4.9
                                    </div>
                                    <div class="position-absolute bottom-0 start-0 w-100 p-3 text-white" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                        <h4 class="mb-0">Dağ Manzaralı Resort</h4>
                                        <p class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>Bolu, Türkiye</p>
                                    </div>
                                </div>
                                <div class="col-md-6 bg-white d-flex align-items-center">
                                    <div class="p-4">
                                        <h3 class="mb-3 border-bottom pb-2">Otel Özellikleri</h3>
                                        <p class="lead mb-3">Doğa ile iç içe huzur dolu bir tatil.</p>
                                        <div class="mb-4">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-wifi text-primary"></i>
                                                </div>
                                                <span>Ücretsiz Wi-Fi</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-spa text-primary"></i>
                                                </div>
                                                <span>Spa</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-hiking text-primary"></i>
                                                </div>
                                                <span>Doğa Yürüyüşleri</span>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-4">
                                            <span class="text-muted text-decoration-line-through">₺1,350</span>
                                            <span class="fs-4 fw-bold text-primary ms-2">₺1,150 / gece</span>
                                        </div>
                                        
                                        <a href="search.php?hotel_id=5" class="btn btn-primary w-100 py-2">Detayları Gör</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hotel 4 -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 position-relative overflow-hidden">
                                    <img src="images/butik.jpg" class="d-block w-100 rounded-start" alt="Tarihi Butik Otel" style="height: 400px; object-fit: cover; transition: transform 0.5s;">
                                    <div class="position-absolute top-0 end-0 bg-primary bg-opacity-75 text-white px-3 py-2 rounded-bottom-end">
                                        <i class="fas fa-star me-1"></i> 4.7
                                    </div>
                                    <div class="position-absolute bottom-0 start-0 w-100 p-3 text-white" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                        <h4 class="mb-0">Tarihi Butik Otel</h4>
                                        <p class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>Kapadokya, Türkiye</p>
                                    </div>
                                </div>
                                <div class="col-md-6 bg-white d-flex align-items-center">
                                    <div class="p-4">
                                        <h3 class="mb-3 border-bottom pb-2">Otel Özellikleri</h3>
                                        <p class="lead mb-3">Eşsiz mağara odalarında büyülü bir deneyim.</p>
                                        <div class="mb-4">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-wifi text-primary"></i>
                                                </div>
                                                <span>Ücretsiz Wi-Fi</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-hot-tub text-primary"></i>
                                                </div>
                                                <span>Jakuzi</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-coffee text-primary"></i>
                                                </div>
                                                <span>Kahvaltı Dahil</span>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-4">
                                            <span class="text-muted text-decoration-line-through">₺2,100</span>
                                            <span class="fs-4 fw-bold text-primary ms-2">₺1,750 / gece</span>
                                        </div>
                                        
                                        <a href="search.php?hotel_id=3" class="btn btn-primary w-100 py-2">Detayları Gör</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hotel 5 -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 position-relative overflow-hidden">
                                    <img src="images/lake.jpg" class="d-block w-100 rounded-start" alt="Göl Kenarı Otel" style="height: 400px; object-fit: cover; transition: transform 0.5s;">
                                    <div class="position-absolute top-0 end-0 bg-primary bg-opacity-75 text-white px-3 py-2 rounded-bottom-end">
                                        <i class="fas fa-star me-1"></i> 4.6
                                    </div>
                                    <div class="position-absolute bottom-0 start-0 w-100 p-3 text-white" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                        <h4 class="mb-0">Göl Kenarı Otel</h4>
                                        <p class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>Sapanca, Türkiye</p>
                                    </div>
                                </div>
                                <div class="col-md-6 bg-white d-flex align-items-center">
                                    <div class="p-4">
                                        <h3 class="mb-3 border-bottom pb-2">Otel Özellikleri</h3>
                                        <p class="lead mb-3">Göl manzaralı odalarla huzurlu bir kaçamak.</p>
                                        <div class="mb-4">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-wifi text-primary"></i>
                                                </div>
                                                <span>Ücretsiz Wi-Fi</span>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-bicycle text-primary"></i>
                                                </div>
                                                <span>Bisiklet Kiralama</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="feature-icon bg-light rounded-circle p-2 me-3">
                                                    <i class="fas fa-tshirt text-primary"></i>
                                                </div>
                                                <span>Çamaşırhane</span>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-4">
                                            <span class="text-muted text-decoration-line-through">₺1,600</span>
                                            <span class="fs-4 fw-bold text-primary ms-2">₺1,350 / gece</span>
                                        </div>
                                        
                                        <a href="search.php?hotel_id=4" class="btn btn-primary w-100 py-2">Detayları Gör</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation controls with improved styling -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#hotelCarousel" data-bs-slide="prev">
                        <div class="carousel-nav-button bg-primary bg-opacity-75 rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </div>
                        <span class="visually-hidden">Önceki</span>
                    </button>
                    
                    <button class="carousel-control-next" type="button" data-bs-target="#hotelCarousel" data-bs-slide="next">
                        <div class="carousel-nav-button bg-primary bg-opacity-75 rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </div>
                        <span class="visually-hidden">Sonraki</span>
                    </button>
                </div>
            </div>
            
            <!-- Mobile view with card layout -->
            <div class="d-md-none mt-4">
                <div class="card mb-3 shadow-sm hover-card">
                    <div class="position-relative">
                        <img src="images/hotel1.jpg" class="card-img-top" alt="Lüks Şehir Oteli" style="height: 200px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 bg-primary text-white m-2 px-2 py-1 rounded">
                            <i class="fas fa-star me-1"></i> 5.0
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Lüks Şehir Oteli</h5>
                        <p class="card-text small text-muted mb-1"><i class="fas fa-map-marker-alt me-1"></i> İstanbul, Türkiye</p>
                        <div class="d-flex my-2">
                            <span class="badge bg-light text-dark me-1"><i class="fas fa-wifi me-1"></i> Wi-Fi</span>
                            <span class="badge bg-light text-dark me-1"><i class="fas fa-swimming-pool me-1"></i> Havuz</span>
                        </div>
                        <div class="mt-3 mb-3">
                            <span class="text-muted text-decoration-line-through small">₺1,500</span>
                            <span class="fs-5 fw-bold text-primary ms-2">₺1,200 / gece</span>
                        </div>
                        <a href="search.php?hotel_id=1" class="btn btn-primary w-100">Detayları Gör</a>
                    </div>
                </div>
                
                <div class="card mb-3 shadow-sm hover-card">
                    <div class="position-relative">
                        <img src="images/yayla.jpg" class="card-img-top" alt="Dağ Manzaralı Resort" style="height: 200px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 bg-primary text-white m-2 px-2 py-1 rounded">
                            <i class="fas fa-star me-1"></i> 4.9
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Dağ Manzaralı Resort</h5>
                        <p class="card-text small text-muted mb-1"><i class="fas fa-map-marker-alt me-1"></i> Bolu, Türkiye</p>
                        <div class="d-flex my-2">
                            <span class="badge bg-light text-dark me-1"><i class="fas fa-wifi me-1"></i> Wi-Fi</span>
                            <span class="badge bg-light text-dark me-1"><i class="fas fa-hiking me-1"></i> Doğa</span>
                        </div>
                        <div class="mt-3 mb-3">
                            <span class="text-muted text-decoration-line-through small">₺1,350</span>
                            <span class="fs-5 fw-bold text-primary ms-2">₺1,090 / gece</span>
                        </div>
                        <a href="search.php?hotel_id=5" class="btn btn-primary w-100">Detayları Gör</a>
                    </div>
                </div>
                
                <div class="text-center">
                    <a href="search.php" class="btn btn-outline-primary px-4 py-2">Tüm Otelleri Gör <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </section>

        <!-- About Section -->
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

        <!-- Testimonials -->
        <section id="testimonials" class="py-5" style="background-color: #f8f9fa; margin-bottom: 60px;">
            <div class="container">
                <h2 class="text-center mb-4 display-4 text-primary fw-bold" style="font-family: 'Segoe UI', Arial, sans-serif;">Müşterilerimizden Gelen Yorumlar</h2>
                <div class="divider-custom mx-auto mb-4">
                    <div class="divider-custom-line bg-info" style="height: 3px; width: 100%;"></div>
                </div>
                <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                    <div class="carousel-inner">
                        <!-- Testimonial 1 -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-8 text-center">
                                    <div class="testimonial-wrapper" style="background-color: white; border-radius: 15px; padding: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                                        <div class="mb-4">
                                            <i class="fas fa-quote-left" style="font-size: 48px; color: #73c2fb; opacity: 0.3;"></i>
                                        </div>
                                        <p class="mb-4 fs-5" style="font-family: 'Segoe UI', Arial, sans-serif; line-height: 1.8; color: #333;">
                                            "Çorum'dan Antalya'ya tatil planım için çok yardımcı oldu. Site çok kullanışlı ve fiyatlar gerçekten uygun. 5 yıldızlı otelde sadece 1.500 TL'ye kaldım. Ailece harika bir tatil geçirdik."
                                        </p>
                                        <div class="d-flex align-items-center justify-content-center mb-3">
                                            <!-- Using placeholder image - replace with actual image path -->
                                            <img src="images/profil_3.jpg" alt="Kemal Bey" class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover; border: 3px solid #ddd;">
                                            <div style="text-align: left;">
                                                <strong style="font-size: 18px; color: #333;">Kemal Bey</strong><br>
                                                <small style="color: #666;">Çorum - Emekli Öğretmen</small>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <i class="fas fa-star" style="color: #ffc107;"></i>
                                            <i class="fas fa-star" style="color: #ffc107;"></i>
                                            <i class="fas fa-star" style="color: #ffc107;"></i>
                                            <i class="fas fa-star" style="color: #ffc107;"></i>
                                            <i class="fas fa-star" style="color: #ffc107;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Testimonial 2 -->
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-md-8 text-center">
                                    <div class="testimonial-wrapper" style="background-color: white; border-radius: 15px; padding: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                                        <div class="mb-4">
                                            <i class="fas fa-quote-left" style="font-size: 48px; color: #73c2fb; opacity: 0.3;"></i>
                                        </div>
                                        <p class="mb-4 fs-5" style="font-family: 'Segoe UI', Arial, sans-serif; line-height: 1.8; color: #333;">
                                            "Rezervasyon Cenneti sayesinde Kapadokya'da muhteşem bir butik otel buldum. Arama filtrelerini çok kullanışlı buldum ve sadece 10 dakikada rezervasyonumu tamamladım. Kesinlikle tavsiye ederim!"
                                        </p>
                                        <div class="d-flex align-items-center justify-content-center mb-3">
                                            <!-- Using placeholder image - replace with actual image path -->
                                            <img src="images/profil_2.jpg" alt="Ayşe Demir" class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover; border: 3px solid #ddd;">
                                            <div style="text-align: left;">
                                                <strong style="font-size: 18px; color: #333;">Ayşe Demir</strong><br>
                                                <small style="color: #666;">İstanbul - Mimar</small>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <i class="fas fa-star" style="color: #ffc107;"></i>
                                            <i class="fas fa-star" style="color: #ffc107;"></i>
                                            <i class="fas fa-star" style="color: #ffc107;"></i>
                                            <i class="fas fa-star" style="color: #ffc107;"></i>
                                            <i class="fas fa-star" style="color: #ffc107;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Testimonial 3 -->
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-md-8 text-center">
                                    <div class="testimonial-wrapper" style="background-color: white; border-radius: 15px; padding: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                                        <div class="mb-4">
                                            <i class="fas fa-quote-left" style="font-size: 48px; color: #73c2fb; opacity: 0.3;"></i>
                                        </div>
                                        <p class="mb-4 fs-5" style="font-family: 'Segoe UI', Arial, sans-serif; line-height: 1.8; color: #333;">
                                            "Müşteri hizmetleri gerçekten mükemmel. Rezervasyon iptali işlemim için gece 2'de aradığımda bile yardımcı oldular. Para iademi aynı gün aldım. Bu kadar güvenilir bir hizmet bulmak zor."
                                        </p>
                                        <div class="d-flex align-items-center justify-content-center mb-3">
                                            <!-- Using placeholder image - replace with actual image path -->
                                            <img src="images/profil_1.jpg" alt="Murat Bey" class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover; border: 3px solid #ddd;">
                                            <div style="text-align: left;">
                                                <strong style="font-size: 18px; color: #333;">Murat Yıldırım</strong><br>
                                                <small style="color: #666;">Ankara - İş Adamı</small>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <i class="fas fa-star" style="color: #ffc107;"></i>
                                            <i class="fas fa-star" style="color: #ffc107;"></i>
                                            <i class="fas fa-star" style="color: #ffc107;"></i>
                                            <i class="fas fa-star" style="color: #ffc107;"></i>
                                            <i class="far fa-star" style="color: #ffc107;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Önceki</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Sonraki</span>
                    </button>
                </div>
                
                <!-- Additional Review Statistics -->
                <div class="row mt-5 pt-4" style="margin-bottom: 60px;">
                    <div class="col-md-4 text-center mb-4">
                        <h3 class="display-5 fw-bold text-primary mb-2" style="font-family: 'Segoe UI', Arial, sans-serif;">4.8/5.0</h3>
                        <p class="text-muted mb-0">Ortalama Müşteri Memnuniyeti</p>
                        <div class="mt-2">
                            <i class="fas fa-star" style="color: #ffc107;"></i>
                            <i class="fas fa-star" style="color: #ffc107;"></i>
                            <i class="fas fa-star" style="color: #ffc107;"></i>
                            <i class="fas fa-star" style="color: #ffc107;"></i>
                            <i class="fas fa-star-half-alt" style="color: #ffc107;"></i>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <h3 class="display-5 fw-bold text-primary mb-2" style="font-family: 'Segoe UI', Arial, sans-serif;">25000+</h3>
                        <p class="text-muted mb-0">Mutlu Müşteri</p>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <h3 class="display-5 fw-bold text-primary mb-2" style="font-family: 'Segoe UI', Arial, sans-serif;">98%</h3>
                        <p class="text-muted mb-0">Tekrar Rezervasyon Oranı</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
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

    <!-- Footer -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>