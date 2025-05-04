<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arama - Rezervasyon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="images/wing.png" type="image/ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">
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
                            <a class="nav-link" href="index.php">
                                <i class="fas fa-home me-1"></i> Ana Sayfa
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="hotelsDropdown" role="button" 
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-hotel me-1"></i> Oteller
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="hotelsDropdown">
                                <li><a class="dropdown-item" href="index.php#featured-hotels">Öne Çıkan Oteller</a></li>
                                <li><a class="dropdown-item active" href="search.php">Otel Ara</a></li>
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

    <!-- Enhanced Page Header with Parallax Effect -->
    <div class="page-header-container">
        <div class="page-header-bg"></div>
        <div class="page-header-content">
            <div class="container">
                <h1 class="page-title"><i class="fas fa-search me-2"></i>Otel Arama</h1>
                <p class="page-subtitle animated-text">Binlerce otel arasından size en uygun seçenekleri bulun</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center bg-transparent">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white">Ana Sayfa</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Otel Arama</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <main class="container">
        <!-- Improved Search Form Container -->
        <div class="enhanced-search-container">
            <form action="search.php" method="GET" class="enhanced-search-form" id="searchForm">
                <div class="search-form-header">
                    <h3>Hayalinizdeki Tatili Bulun</h3>
                    <p>Tarihleri, konumu ve oda tercihlerinizi seçerek arama yapın</p>
                </div>
                <div class="row g-3">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <label for="location" class="form-label">
                                <i class="fas fa-map-marker-alt me-2"></i>Nereye Gidiyorsunuz?
                            </label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                                <input type="text" class="form-control" id="location" name="location" 
                                    placeholder="Şehir, bölge veya otel adı" 
                                    value="<?php echo htmlspecialchars($_GET['location'] ?? ''); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="form-group">
                            <label for="checkin" class="form-label">
                                <i class="fas fa-calendar-check me-2"></i>Giriş Tarihi
                            </label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                <input type="date" class="form-control" id="checkin" name="checkin" 
                                    min="<?php echo date('Y-m-d'); ?>" 
                                    value="<?php echo htmlspecialchars($_GET['checkin'] ?? date('Y-m-d', strtotime('+1 day'))); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="form-group">
                            <label for="checkout" class="form-label">
                                <i class="fas fa-calendar-times me-2"></i>Çıkış Tarihi
                            </label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                <input type="date" class="form-control" id="checkout" name="checkout" 
                                    min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" 
                                    value="<?php echo htmlspecialchars($_GET['checkout'] ?? date('Y-m-d', strtotime('+3 days'))); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="form-group">
                            <label for="guests" class="form-label">
                                <i class="fas fa-user-friends me-2"></i>Misafir Sayısı
                            </label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                                <select class="form-select" id="guests" name="guests" required>
                                    <option value="1" <?php echo (($_GET['guests'] ?? '2') == '1') ? 'selected' : ''; ?>>1 Misafir</option>
                                    <option value="2" <?php echo (($_GET['guests'] ?? '2') == '2') ? 'selected' : ''; ?>>2 Misafir</option>
                                    <option value="3" <?php echo (($_GET['guests'] ?? '') == '3') ? 'selected' : ''; ?>>3 Misafir</option>
                                    <option value="4" <?php echo (($_GET['guests'] ?? '') == '4') ? 'selected' : ''; ?>>4 Misafir</option>
                                    <option value="5+" <?php echo (($_GET['guests'] ?? '') == '5+') ? 'selected' : ''; ?>>5+ Misafir</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="form-group">
                            <label for="rooms" class="form-label">
                                <i class="fas fa-door-open me-2"></i>Oda Sayısı
                            </label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-bed"></i></span>
                                <select class="form-select" id="rooms" name="rooms">
                                    <option value="1" <?php echo (($_GET['rooms'] ?? '1') == '1') ? 'selected' : ''; ?>>1 Oda</option>
                                    <option value="2" <?php echo (($_GET['rooms'] ?? '') == '2') ? 'selected' : ''; ?>>2 Oda</option>
                                    <option value="3" <?php echo (($_GET['rooms'] ?? '') == '3') ? 'selected' : ''; ?>>3 Oda</option>
                                    <option value="4+" <?php echo (($_GET['rooms'] ?? '') == '4+') ? 'selected' : ''; ?>>4+ Oda</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-6 d-flex align-items-end">
                        <button type="submit" class="btn search-button w-100" id="searchButton">
                            <i class="fas fa-search me-2"></i><span class="d-none d-md-inline">Ara</span>
                        </button>
                    </div>
                </div>
                
                <!-- Advanced Search Options (initially hidden) -->
                <div class="advanced-search" id="advancedSearchOptions" style="display: none;">
                    <div class="row g-3 mt-3">
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <label for="property_type" class="form-label">
                                    <i class="fas fa-building me-2"></i>Tesis Türü
                                </label>
                                <select class="form-select" id="property_type" name="property_type">
                                    <option value="">Tümü</option>
                                    <option value="hotel" <?php echo ($_GET['property_type'] ?? '') == 'hotel' ? 'selected' : ''; ?>>Otel</option>
                                    <option value="apartment" <?php echo ($_GET['property_type'] ?? '') == 'apartment' ? 'selected' : ''; ?>>Apart Daire</option>
                                    <option value="villa" <?php echo ($_GET['property_type'] ?? '') == 'villa' ? 'selected' : ''; ?>>Villa</option>
                                    <option value="bungalow" <?php echo ($_GET['property_type'] ?? '') == 'bungalow' ? 'selected' : ''; ?>>Bungalov</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <label for="star_rating" class="form-label">
                                    <i class="fas fa-star me-2"></i>Yıldız Sayısı
                                </label>
                                <select class="form-select" id="star_rating" name="star_rating">
                                    <option value="">Tümü</option>
                                    <option value="5" <?php echo ($_GET['star_rating'] ?? '') == '5' ? 'selected' : ''; ?>>5 Yıldız</option>
                                    <option value="4" <?php echo ($_GET['star_rating'] ?? '') == '4' ? 'selected' : ''; ?>>4 Yıldız ve Üzeri</option>
                                    <option value="3" <?php echo ($_GET['star_rating'] ?? '') == '3' ? 'selected' : ''; ?>>3 Yıldız ve Üzeri</option>
                                    <option value="2" <?php echo ($_GET['star_rating'] ?? '') == '2' ? 'selected' : ''; ?>>2 Yıldız ve Üzeri</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <label for="price_range" class="form-label">
                                    <i class="fas fa-tags me-2"></i>Fiyat Aralığı
                                </label>
                                <select class="form-select" id="price_range" name="price_range">
                                    <option value="">Tümü</option>
                                    <option value="economy" <?php echo ($_GET['price_range'] ?? '') == 'economy' ? 'selected' : ''; ?>>Ekonomik (0-500₺)</option>
                                    <option value="moderate" <?php echo ($_GET['price_range'] ?? '') == 'moderate' ? 'selected' : ''; ?>>Orta (500-1000₺)</option>
                                    <option value="luxury" <?php echo ($_GET['price_range'] ?? '') == 'luxury' ? 'selected' : ''; ?>>Lüks (1000-2000₺)</option>
                                    <option value="premium" <?php echo ($_GET['price_range'] ?? '') == 'premium' ? 'selected' : ''; ?>>Premium (2000₺+)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <label for="amenities" class="form-label">
                                    <i class="fas fa-concierge-bell me-2"></i>Öne Çıkan Özellik
                                </label>
                                <select class="form-select" id="amenities" name="amenities">
                                    <option value="">Tümü</option>
                                    <option value="pool" <?php echo ($_GET['amenities'] ?? '') == 'pool' ? 'selected' : ''; ?>>Havuz</option>
                                    <option value="spa" <?php echo ($_GET['amenities'] ?? '') == 'spa' ? 'selected' : ''; ?>>Spa</option>
                                    <option value="beach" <?php echo ($_GET['amenities'] ?? '') == 'beach' ? 'selected' : ''; ?>>Plaj</option>
                                    <option value="wifi" <?php echo ($_GET['amenities'] ?? '') == 'wifi' ? 'selected' : ''; ?>>Ücretsiz WiFi</option>
                                    <option value="breakfast" <?php echo ($_GET['amenities'] ?? '') == 'breakfast' ? 'selected' : ''; ?>>Kahvaltı Dahil</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Advanced Search Toggle -->
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-link advanced-search-toggle" id="advancedSearchToggle" aria-expanded="false">
                        <span class="toggle-text">Gelişmiş Arama Seçenekleri</span>
                        <i class="fas fa-chevron-down toggle-icon"></i>
                    </button>
                </div>
            </form>
        </div>

        <!-- Results Section -->
        <div class="row">
            <!-- Filter Sidebar -->
            <div class="col-lg-3 mb-4">
                <div class="filter-sidebar">
                    <h4 class="filter-header"><i class="fas fa-filter me-2"></i>Filtreler</h4>
                    
                    <!-- Price Range Filter -->
                    <div class="filter-section">
                        <h5>Fiyat Aralığı</h5>
                        <input type="range" class="form-range" min="0" max="5000" step="100" id="priceRange" value="2500">
                        <div class="range-values">
                            <span>0 ₺</span>
                            <span id="priceValue" class="fw-bold">2500 ₺</span>
                            <span>5000+ ₺</span>
                        </div>
                    </div>
                    
                    <!-- Star Rating Filter -->
                    <div class="filter-section">
                        <h5>Yıldız Derecesi</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="5" id="star5">
                            <label class="form-check-label" for="star5">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="4" id="star4">
                            <label class="form-check-label" for="star4">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="3" id="star3">
                            <label class="form-check-label" for="star3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" id="star2">
                            <label class="form-check-label" for="star2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Property Type Filter -->
                    <div class="filter-section">
                        <h5>Tesis Türü</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="hotel" id="typeHotel" checked>
                            <label class="form-check-label" for="typeHotel">
                                <i class="fas fa-hotel me-2 text-secondary"></i>Otel
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="apartment" id="typeApartment">
                            <label class="form-check-label" for="typeApartment">
                                <i class="fas fa-building me-2 text-secondary"></i>Apart Daire
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="villa" id="typeVilla">
                            <label class="form-check-label" for="typeVilla">
                                <i class="fas fa-home me-2 text-secondary"></i>Villa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="bungalow" id="typeBungalow">
                            <label class="form-check-label" for="typeBungalow">
                                <i class="fas fa-campground me-2 text-secondary"></i>Bungalov
                            </label>
                        </div>
                    </div>
                    
                    <!-- Amenities Filter -->
                    <div class="filter-section">
                        <h5>Özellikler</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="wifi" id="amenityWifi">
                            <label class="form-check-label" for="amenityWifi">
                                <i class="fas fa-wifi me-2 text-secondary"></i> Ücretsiz WiFi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="pool" id="amenityPool">
                            <label class="form-check-label" for="amenityPool">
                                <i class="fas fa-swimming-pool me-2 text-secondary"></i> Havuz
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="breakfast" id="amenityBreakfast">
                            <label class="form-check-label" for="amenityBreakfast">
                                <i class="fas fa-coffee me-2 text-secondary"></i> Kahvaltı Dahil
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="parking" id="amenityParking">
                            <label class="form-check-label" for="amenityParking">
                                <i class="fas fa-parking me-2 text-secondary"></i> Ücretsiz Otopark
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="ac" id="amenityAC">
                            <label class="form-check-label" for="amenityAC">
                                <i class="fas fa-snowflake me-2 text-secondary"></i> Klima
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="spa" id="amenitySpa">
                            <label class="form-check-label" for="amenitySpa">
                                <i class="fas fa-spa me-2 text-secondary"></i> Spa
                            </label>
                        </div>
                    </div>
                    
                    <button class="btn btn-filter-clear w-100 mt-3">
                        <i class="fas fa-times-circle me-2"></i>Filtreleri Temizle
                    </button>
                </div>
            </div>
            
            <!-- Hotel Results -->
            <div class="col-lg-9">
                <!-- Sort and results info -->
                <div class="sort-by">
                    <div>
                        <span class="results-count">32</span> sonuç bulundu
                        <?php 
                        if (!empty($_GET['location'])) {
                            echo '<span class="ms-2 text-muted">'.htmlspecialchars($_GET['location']).' için</span>';
                        }
                        ?>
                    </div>
                    <div class="d-flex align-items-center">
                        <label for="sortBy" class="me-2">Sırala:</label>
                        <select class="form-select form-select-sm sort-select" id="sortBy">
                            <option value="recommended">Önerilen</option>
                            <option value="price-low">Fiyat (Düşükten Yükseğe)</option>
                            <option value="price-high">Fiyat (Yüksekten Düşüğe)</option>
                            <option value="rating">Puan (En Yüksek)</option>
                            <option value="distance">Merkeze Yakınlık</option>
                        </select>
                    </div>
                </div>
                
                <!-- Hotel listings -->
                <div class="hotel-listings">
                    <!-- Hotel Card 1 -->
                    <div class="hotel-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="hotel-image">
                                    <img src="images/hotel1.jpg" alt="Lüks Şehir Oteli" loading="lazy">
                                    <div class="hotel-badge">Öne Çıkan</div>
                                    <div class="discount-badge">%15 İndirim</div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="hotel-content">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h3 class="hotel-title">Lüks Şehir Oteli</h3>
                                            <div class="hotel-location">
                                                <i class="fas fa-map-marker-alt"></i> Şehir Merkezi, İstanbul
                                            </div>
                                        </div>
                                        <div class="hotel-rating">
                                            <div class="rating-score">9.2</div>
                                            <div class="rating-text">Mükemmel<br><small>(452 değerlendirme)</small></div>
                                        </div>
                                    </div>
                                    
                                    <div class="hotel-features">
                                        <span class="hotel-feature"><i class="fas fa-wifi"></i> Ücretsiz WiFi</span>
                                        <span class="hotel-feature"><i class="fas fa-parking"></i> Otopark</span>
                                        <span class="hotel-feature"><i class="fas fa-swimming-pool"></i> Havuz</span>
                                        <span class="hotel-feature"><i class="fas fa-spa"></i> Spa</span>
                                    </div>
                                    
                                    <p class="hotel-description">
                                        Şehir merkezinde lüks ve konforlu bir konaklama deneyimi. Modern odalar, geniş bir spa alanı ve enfes restoranlar ile hizmetinizdeyiz.
                                    </p>
                                    
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div class="hotel-price">
                                            <span class="original-price">1500 ₺</span>
                                            1275 ₺ <span class="price-per-night">/ gece</span>
                                        </div>
                                        <a href="hotel-detail.php?id=1" class="btn btn-reservation">
                                            <i class="fas fa-calendar-check me-2"></i>Rezervasyon Yap
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hotel Card 2 -->
                    <div class="hotel-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="hotel-image">
                                    <img src="images/hotel2.jpg" alt="Sahil Resort" loading="lazy">
                                    <div class="hotel-badge">Denize Sıfır</div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="hotel-content">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h3 class="hotel-title">Sahil Resort</h3>
                                            <div class="hotel-location">
                                                <i class="fas fa-map-marker-alt"></i> Sahil Bölgesi, Bodrum
                                            </div>
                                        </div>
                                        <div class="hotel-rating">
                                            <div class="rating-score">8.7</div>
                                            <div class="rating-text">Çok İyi<br><small>(328 değerlendirme)</small></div>
                                        </div>
                                    </div>
                                    
                                    <div class="hotel-features">
                                        <span class="hotel-feature"><i class="fas fa-wifi"></i> Ücretsiz WiFi</span>
                                        <span class="hotel-feature"><i class="fas fa-utensils"></i> Restoran</span>
                                        <span class="hotel-feature"><i class="fas fa-swimming-pool"></i> Havuz</span>
                                        <span class="hotel-feature"><i class="fas fa-umbrella-beach"></i> Özel Plaj</span>
                                    </div>
                                    
                                    <p class="hotel-description">
                                        Denize sıfır konumu ve nefes kesen manzarasıyla eşsiz bir tatil deneyimi. Özel plaj, açık havuz ve spa olanaklarıyla huzurlu bir konaklama.
                                    </p>
                                    
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div class="hotel-price">
                                            1500 ₺ <span class="price-per-night">/ gece</span>
                                        </div>
                                        <a href="hotel-detail.php?id=2" class="btn btn-reservation">
                                            <i class="fas fa-calendar-check me-2"></i>Rezervasyon Yap
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hotel Card 3 -->
                    <div class="hotel-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="hotel-image">
                                    <img src="images/yayla.jpg" alt="Dağ Manzaralı Otel" loading="lazy">
                                    <div class="hotel-badge">Özel Teklif</div>
                                    <div class="discount-badge">%20 İndirim</div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="hotel-content">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h3 class="hotel-title">Dağ Manzaralı Otel</h3>
                                            <div class="hotel-location">
                                                <i class="fas fa-map-marker-alt"></i> Dağ Bölgesi, Bolu
                                            </div>
                                        </div>
                                        <div class="hotel-rating">
                                            <div class="rating-score">9.5</div>
                                            <div class="rating-text">Olağanüstü<br><small>(216 değerlendirme)</small></div>
                                        </div>
                                    </div>
                                    
                                    <div class="hotel-features">
                                        <span class="hotel-feature"><i class="fas fa-wifi"></i> Ücretsiz WiFi</span>
                                        <span class="hotel-feature"><i class="fas fa-utensils"></i> Restoran</span>
                                        <span class="hotel-feature"><i class="fas fa-coffee"></i> Kahvaltı Dahil</span>
                                        <span class="hotel-feature"><i class="fas fa-hiking"></i> Doğa Yürüyüşleri</span>
                                    </div>
                                    
                                    <p class="hotel-description">
                                        Doğa ile baş başa kalabileceğiniz huzurlu bir ortam. Dağ manzaralı odalar, organik restoran ve doğa aktiviteleri ile unutulmaz bir deneyim.
                                    </p>
                                    
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div class="hotel-price">
                                            <span class="original-price">1,350 ₺</span>
                                            1150 ₺ <span class="price-per-night">/ gece</span>
                                        </div>
                                        <a href="hotel-detail.php?id=3" class="btn btn-reservation">
                                            <i class="fas fa-calendar-check me-2"></i>Rezervasyon Yap
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hotel Card 4 -->
                    <div class="hotel-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="hotel-image">
                                    <img src="images/butik.jpg" alt="Tarihi Konak" loading="lazy">
                                    <div class="hotel-badge">Tarihi</div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="hotel-content">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h3 class="hotel-title">Tarihi Konak</h3>
                                            <div class="hotel-location">
                                                <i class="fas fa-map-marker-alt"></i> Tarihi Yarımada, İstanbul
                                            </div>
                                        </div>
                                        <div class="hotel-rating">
                                            <div class="rating-score">8.9</div>
                                            <div class="rating-text">Mükemmel<br><small>(175 değerlendirme)</small></div>
                                        </div>
                                    </div>
                                    
                                    <div class="hotel-features">
                                        <span class="hotel-feature"><i class="fas fa-wifi"></i> Ücretsiz WiFi</span>
                                        <span class="hotel-feature"><i class="fas fa-coffee"></i> Kahvaltı Dahil</span>
                                        <span class="hotel-feature"><i class="fas fa-tram"></i> Toplu Taşıma Yakın</span>
                                        <span class="hotel-feature"><i class="fas fa-concierge-bell"></i> Concierge</span>
                                    </div>
                                    
                                    <p class="hotel-description">
                                        300 yıllık tarihi bir konakta otantik bir konaklama deneyimi. Tarihi yarımadanın kalbinde tüm turistik noktalara yürüme mesafesinde.
                                    </p>
                                    
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <div class="hotel-price">
                                            1750 ₺ <span class="price-per-night">/ gece</span>
                                        </div>
                                        <a href="hotel-detail.php?id=4" class="btn btn-reservation">
                                            <i class="fas fa-calendar-check me-2"></i>Rezervasyon Yap
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagination -->
                    <nav aria-label="Hotel results pagination" class="mt-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    
                    <!-- Empty Results State (Hidden by default) -->
                    <div class="empty-results" style="display: none;">
                        <i class="fas fa-search"></i>
                        <h3>Aramanıza uygun sonuç bulunamadı</h3>
                        <p>Farklı tarihler veya konum seçerek tekrar aramayı deneyebilirsiniz.</p>
                        <button class="btn btn-primary" onclick="window.scrollTo({top: 0, behavior: 'smooth'});">
                            <i class="fas fa-redo me-2"></i>Yeni Arama Yap
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Map View Toggle Button -->
    <button class="map-view-toggle" id="mapToggle" title="Harita Görünümü">
        <i class="fas fa-map-marked-alt"></i>
    </button>

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
                            <a href="index.php#about" class="text-white text-decoration-none">
                                <i class="fas fa-angle-right me-2"></i>Hakkımızda
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="index.php#featured-hotels" class="text-white text-decoration-none">
                                <i class="fas fa-angle-right me-2"></i>Oteller
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="index.php#contact" class="text-white text-decoration-none">
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
    <script src="js/search.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 