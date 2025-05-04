<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli - Rezervasyon</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="images/wing.png" type="image/ico">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <div class="wrapper d-flex">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="d-flex align-items-center">
                    <img src="images/wing.png" alt="Logo">
                    <span class="fw-bold">RezervasyonCenneti</span>
                </div>
                <button type="button" id="sidebarCollapse" class="btn btn-link text-white p-0">
                    <i class="fas fa-chevron-left"></i>
                </button>
            </div>
            
            <ul class="nav flex-column mt-3">
                <li class="nav-item">
                    <a href="#" class="nav-link active" data-page="dashboard">
                        <i class="fas fa-gauge-high"></i>
                        <span class="menu-text">Kontrol Paneli</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-page="users">
                        <i class="fas fa-users"></i>
                        <span class="menu-text">Kullanıcılar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-page="bookings">
                        <i class="fas fa-calendar-check"></i>
                        <span class="menu-text">Rezervasyonlar</span>
                        <span class="badge bg-info rounded-pill badge-nav">16</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-page="hotels">
                        <i class="fas fa-building"></i>
                        <span class="menu-text">Oteller</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-page="approvals">
                        <i class="fas fa-clipboard-check"></i>
                        <span class="menu-text">Onay Bekleyenler</span>
                        <span class="badge bg-danger rounded-pill badge-nav">15</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-page="notifications">
                        <i class="fas fa-bell"></i>
                        <span class="menu-text">Bildirimler</span>
                        <span class="badge bg-danger rounded-pill badge-nav">3</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-page="reports">
                        <i class="fas fa-chart-bar"></i>
                        <span class="menu-text">Raporlar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-page="calendar">
                        <i class="fas fa-calendar-alt"></i>
                        <span class="menu-text">Takvim</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-page="financial">
                        <i class="fas fa-coins"></i>
                        <span class="menu-text">Finansal</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-page="settings">
                        <i class="fas fa-cog"></i>
                        <span class="menu-text">Ayarlar</span>
                    </a>
                </li>
                <li class="nav-item mt-5">
                    <a href="auth.php?logout=true" class="nav-link text-danger">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="menu-text">Çıkış Yap</span>
                    </a>
                </li>
            </ul>
        </nav>
        
        <!-- Main Content -->
        <div id="content">
            <!-- Navbar -->
            <nav class="navbar navbar-admin navbar-expand-lg">
                <div class="container-fluid">
                    <!-- Left side: Page title and search -->
                    <div class="d-flex align-items-center">
                        <h4 class="fw-semibold mb-0 me-4" id="pageTitle">Kontrol Paneli</h4>
                        <div class="search-input d-none d-md-block">
                            <i class="fas fa-search"></i>
                            <input type="text" class="form-control" placeholder="Arama yap...">
                        </div>
                    </div>
                    
                    <!-- Right side: Actions and user profile -->
                    <div class="d-flex align-items-center">
                        <!-- Quick Actions -->
                        <div class="d-none d-md-flex me-3">
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="tooltip" title="Yeni Rezervasyon">
                                <i class="fas fa-plus me-2"></i>Ekle
                            </button>
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-sm btn-light active" data-filter="all">Tümü</button>
                                <button type="button" class="btn btn-sm btn-light" data-filter="today">Bugün</button>
                                <button type="button" class="btn btn-sm btn-light" data-filter="week">Hafta</button>
                                <button type="button" class="btn btn-sm btn-light" data-filter="month">Ay</button>
                            </div>
                        </div>
                        
                        <!-- Date Picker -->
                        <div class="datepicker-toggle me-3 d-none d-md-flex">
                            <i class="far fa-calendar-alt"></i>
                            <span>Mayıs 01 - Mayıs 31, 2025</span>
                        </div>
                        
                        <!-- Notifications -->
                        <div class="position-relative me-3">
                            <a href="#" class="text-secondary fs-5 position-relative" data-bs-toggle="dropdown">
                                <i class="fas fa-bell"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.5rem;">
                                    3
                                </span>
                            </a>
                            <!-- Notifications Dropdown -->
                            <div class="dropdown-menu dropdown-menu-end shadow border-0 p-0" style="width: 300px; max-height: 400px; overflow-y: auto;">
                                <div class="p-3 border-bottom">
                                    <h6 class="mb-0">Bildirimler</h6>
                                </div>
                                <div class="p-0">
                                    <!-- Notification items -->
                                    <a href="#" class="dropdown-item p-3 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="user-icon activity-icon">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="activity-title">
                                                    <span class="highlight">ahmet_yilmaz</span> adlı kullanıcı sisteme kaydoldu.
                                                </div>
                                                <div class="activity-time">15 dakika önce</div>
                                            </div>
                                        </div>
                                    </a>
                                    
                                    <a href="#" class="dropdown-item p-3 border-bottom">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="booking-icon activity-icon">
                                                    <i class="fas fa-calendar-check"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="activity-title">
                                                    <span class="highlight">Lüks Şehir Oteli</span> için yeni rezervasyon yapıldı.
                                                </div>
                                                <div class="activity-time">1 saat önce</div>
                                            </div>
                                        </div>
                                    </a>
                                    
                                    <a href="#" class="dropdown-item p-3">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="approval-icon activity-icon">
                                                    <i class="fas fa-exclamation-circle"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="activity-title">
                                                    Bekleyen <span class="highlight">15</span> onay için inceleme yapın.
                                                </div>
                                                <div class="activity-time">3 saat önce</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top text-center">
                                    <a href="#" class="text-primary small">Tüm Bildirimleri Gör</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- User Profile -->
                        <div class="dropdown">
                            <div class="d-flex align-items-center cursor-pointer" data-bs-toggle="dropdown">
                                <div class="user-avatar me-2">
                                    AY
                                </div>
                                <div class="d-none d-md-block">
                                    <div class="fw-semibold" style="line-height: 1.2;">Admin Yönetici</div>
                                    <div class="text-muted small">Sistem Yöneticisi</div>
                                </div>
                                <i class="fas fa-chevron-down ms-2 d-none d-md-block text-muted small"></i>
                            </div>
                            
                            <!-- User Dropdown Menu -->
                            <div class="dropdown-menu dropdown-menu-end mt-2 border-0 shadow">
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-user me-2 text-primary"></i>Profil
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-cog me-2 text-primary"></i>Ayarlar
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="fas fa-question-circle me-2 text-primary"></i>Yardım
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="auth.php?logout=true" class="dropdown-item text-danger">
                                    <i class="fas fa-sign-out-alt me-2"></i>Çıkış Yap
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            
            <!-- Dashboard Content -->
            <div class="container-fluid py-4 fade-in">
                <div id="dashboardContent">
                    <!-- Welcome Banner -->
                    <div class="card mb-4 bg-primary text-white border-0 shadow">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h4 class="fw-bold mb-1">Hoş geldiniz, Admin Yönetici</h4>
                                    <p class="mb-0">Sistemde bugün 15 yeni rezervasyon ve 3 yeni kullanıcı bulunuyor.</p>
                                </div>
                                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                                    <button class="btn btn-light me-2"><i class="fas fa-download me-2"></i>Rapor İndir</button>
                                    <button class="btn btn-outline-light"><i class="fas fa-sync-alt me-2"></i>Yenile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Stats Cards Row -->
                    <div class="row g-3 mb-4">
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="card stat-card user-card h-100">
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="text-muted mb-0">Toplam Kullanıcı</h6>
                                        <div class="stat-icon bg-success-subtle text-success">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                    <h3 class="fw-bold mb-3">1,250</h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="change-indicator bg-success-subtle">
                                            <i class="fas fa-arrow-up me-1"></i> 8.2%
                                        </div>
                                        <span class="text-muted small">Son 30 günde</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="card stat-card booking-card h-100">
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="text-muted mb-0">Toplam Rezervasyon</h6>
                                        <div class="stat-icon bg-info-subtle text-info">
                                            <i class="fas fa-calendar-check"></i>
                                        </div>
                                    </div>
                                    <h3 class="fw-bold mb-3">540</h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="change-indicator bg-info-subtle">
                                            <i class="fas fa-arrow-up me-1"></i> 12.5%
                                        </div>
                                        <span class="text-muted small">Son 30 günde</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="card stat-card hotel-card h-100">
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="text-muted mb-0">Aktif Oteller</h6>
                                        <div class="stat-icon bg-primary-subtle text-primary">
                                            <i class="fas fa-building"></i>
                                        </div>
                                    </div>
                                    <h3 class="fw-bold mb-3">85</h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="change-indicator bg-success-subtle">
                                            <i class="fas fa-arrow-up me-1"></i> 5.3%
                                        </div>
                                        <span class="text-muted small">Son 30 günde</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="card stat-card approval-card h-100">
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="text-muted mb-0">Bekleyen Onaylar</h6>
                                        <div class="stat-icon bg-warning-subtle text-warning">
                                            <i class="fas fa-clipboard-check"></i>
                                        </div>
                                    </div>
                                    <h3 class="fw-bold mb-3">15</h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="change-indicator bg-danger-subtle">
                                            <i class="fas fa-arrow-down me-1"></i> 2.1%
                                        </div>
                                        <span class="text-muted small">Son 30 günde</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Charts Row -->
                    <div class="row g-4 mb-4">
                        <div class="col-12 col-lg-8">
                            <div class="card chart-card h-100">
                                <div class="card-header chart-header bg-white">
                                    <h5 class="card-title mb-0">Rezervasyon ve Kullanıcı İstatistikleri</h5>
                                    <div class="chart-actions">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#" data-chart="users">Kullanıcılar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-chart="bookings">Rezervasyonlar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-chart="revenue">Gelir</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="mainChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-4">
                            <div class="card chart-card h-100">
                                <div class="card-header chart-header bg-white">
                                    <h5 class="card-title mb-0">Otel Kategorileri</h5>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                            <i class="fas fa-filter me-1"></i>Filtrele
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item active" href="#">Tüm Kategoriler</a></li>
                                            <li><a class="dropdown-item" href="#">Lüks</a></li>
                                            <li><a class="dropdown-item" href="#">Butik</a></li>
                                            <li><a class="dropdown-item" href="#">Ekonomik</a></li>
                                            <li><a class="dropdown-item" href="#">Tatil Köyü</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="categoryChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Activity, Popular Hotels and Approvals -->
                    <div class="row g-4">
                        <!-- Recent Activities -->
                        <div class="col-12 col-lg-6">
                            <div class="card activity-card h-100">
                                <div class="card-header activity-header">
                                    <h5 class="card-title mb-0">Son Aktiviteler</h5>
                                    <a href="#" class="header-action">
                                        Tümünü Gör <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                                <div class="activity-body">
                                    <div class="activity-item">
                                        <div class="user-icon activity-icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="activity-content">
                                            <div class="activity-title">
                                                <span class="highlight">ahmet_yilmaz</span> adlı kullanıcı sisteme kaydoldu.
                                            </div>
                                            <div class="activity-time">
                                                <i class="far fa-clock text-muted"></i> 15 dakika önce
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-sm text-secondary" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2 text-primary"></i>Kullanıcıyı Görüntüle</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-envelope me-2 text-primary"></i>Mesaj Gönder</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-ban me-2"></i>İşlemi İptal Et</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="activity-item">
                                        <div class="booking-icon activity-icon">
                                            <i class="fas fa-calendar-check"></i>
                                        </div>
                                        <div class="activity-content">
                                            <div class="activity-title">
                                                <span class="highlight">Lüks Şehir Oteli</span> için yeni rezervasyon yapıldı: 2 Gece.
                                            </div>
                                            <div class="activity-time">
                                                <i class="far fa-clock text-muted"></i> 1 saat önce
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-sm text-secondary" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-info-circle me-2 text-primary"></i>Rezervasyon Detayları</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-check me-2 text-success"></i>Onayla</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-print me-2 text-primary"></i>Yazdır</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-times me-2"></i>İptal Et</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="activity-item">
                                        <div class="hotel-icon activity-icon">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="activity-content">
                                            <div class="activity-title">
                                                <span class="highlight">Sahil Resort</span> bilgileri güncellendi: Yeni fotoğraflar eklendi.
                                            </div>
                                            <div class="activity-time">
                                                <i class="far fa-clock text-muted"></i> 3 saat önce
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-sm text-secondary" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-hotel me-2 text-primary"></i>Oteli Görüntüle</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-image me-2 text-primary"></i>Fotoğrafları Gör</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-history me-2"></i>Değişiklikleri Geri Al</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="activity-item">
                                        <div class="user-icon activity-icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="activity-content">
                                            <div class="activity-title">
                                                <span class="highlight">melis_kaya</span> adlı kullanıcı sisteme kaydoldu.
                                            </div>
                                            <div class="activity-time">
                                                <i class="far fa-clock text-muted"></i> 5 saat önce
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-sm text-secondary" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2 text-primary"></i>Kullanıcıyı Görüntüle</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-envelope me-2 text-primary"></i>Mesaj Gönder</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-ban me-2"></i>İşlemi İptal Et</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="activity-item">
                                        <div class="approval-icon activity-icon">
                                            <i class="fas fa-clipboard-check"></i>
                                        </div>
                                        <div class="activity-content">
                                            <div class="activity-title">
                                                Sistem yöneticisi <span class="highlight">Admin</span> tarafından yeni indirim onaylandı.
                                            </div>
                                            <div class="activity-time">
                                                <i class="far fa-clock text-muted"></i> 8 saat önce
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-sm text-secondary" type="button" data-bs-toggle="dropdown">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-info-circle me-2 text-primary"></i>Detayları Gör</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-undo me-2"></i>Geri Al</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Approvals -->
                        <div class="col-12 col-lg-6">
                            <div class="card activity-card h-100">
                                <div class="card-header activity-header">
                                    <h5 class="card-title mb-0">Onay Bekleyenler</h5>
                                    <a href="#" class="header-action">
                                        Tümünü Gör <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                                <div class="activity-body">
                                    <!-- Approval Item 1 -->
                                    <div class="card mb-3 bg-light border-0">
                                        <div class="card-body p-3">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="approval-icon activity-icon me-3">
                                                    <i class="fas fa-building"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1"><span class="highlight">Elit Otel</span> için yeni otel onayı bekliyor.</h6>
                                                    <div class="small text-muted"><i class="far fa-clock me-1"></i> 2 gün önce</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-end">
                                                <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="tooltip" title="Detayları Gör">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-success">
                                                    <i class="fas fa-check me-1"></i> Onayla
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-times me-1"></i> Reddet
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Approval Item 2 -->
                                    <div class="card mb-3 bg-light border-0">
                                        <div class="card-body p-3">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="approval-icon activity-icon me-3">
                                                    <i class="fas fa-tag"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1"><span class="highlight">Yaz İndirimi</span> için %15 indirim kampanyası onayı bekliyor.</h6>
                                                    <div class="small text-muted"><i class="far fa-clock me-1"></i> 1 gün önce</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-end">
                                                <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="tooltip" title="Detayları Gör">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-success">
                                                    <i class="fas fa-check me-1"></i> Onayla
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-times me-1"></i> Reddet
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Approval Item 3 -->
                                    <div class="card mb-3 bg-light border-0">
                                        <div class="card-body p-3">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="approval-icon activity-icon me-3">
                                                    <i class="fas fa-building"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1"><span class="highlight">Deniz Manzaralı Resort</span> için yeni otel onayı bekliyor.</h6>
                                                    <div class="small text-muted"><i class="far fa-clock me-1"></i> 3 gün önce</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-end">
                                                <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="tooltip" title="Detayları Gör">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-success">
                                                    <i class="fas fa-check me-1"></i> Onayla
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-times me-1"></i> Reddet
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Approval Item 4 -->
                                    <div class="card bg-light border-0">
                                        <div class="card-body p-3">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="approval-icon activity-icon me-3">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1"><span class="highlight">Otel Yöneticisi</span> rolü için yeni kullanıcı onayı bekliyor.</h6>
                                                    <div class="small text-muted"><i class="far fa-clock me-1"></i> 4 saat önce</div>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-end">
                                                <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="tooltip" title="Detayları Gör">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-success">
                                                    <i class="fas fa-check me-1"></i> Onayla
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-times me-1"></i> Reddet
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Other page content (hidden by default) -->
                <div id="usersContent" class="d-none">
                    <div class="text-center p-5 bg-white rounded shadow-sm">
                        <h2 class="mb-3">Kullanıcı Yönetimi</h2>
                        <p class="text-muted">Bu bölüm şu anda geliştirme aşamasındadır.</p>
                    </div>
                </div>
                
                <div id="bookingsContent" class="d-none">
                    <div class="text-center p-5 bg-white rounded shadow-sm">
                        <h2 class="mb-3">Rezervasyon Yönetimi</h2>
                        <p class="text-muted">Bu bölüm şu anda geliştirme aşamasındadır.</p>
                    </div>
                </div>
                
                <div id="hotelsContent" class="d-none">
                    <div class="text-center p-5 bg-white rounded shadow-sm">
                        <h2 class="mb-3">Otel Yönetimi</h2>
                        <p class="text-muted">Bu bölüm şu anda geliştirme aşamasındadır.</p>
                    </div>
                </div>
                
                <div id="approvalsContent" class="d-none">
                    <div class="text-center p-5 bg-white rounded shadow-sm">
                        <h2 class="mb-3">Onay Bekleyenler</h2>
                        <p class="text-muted">Bu bölüm şu anda geliştirme aşamasındadır.</p>
                    </div>
                </div>
                
                <div id="notificationsContent" class="d-none">
                    <div class="text-center p-5 bg-white rounded shadow-sm">
                        <h2 class="mb-3">Bildirimler</h2>
                        <p class="text-muted">Bu bölüm şu anda geliştirme aşamasındadır.</p>
                    </div>
                </div>
                
                <div id="reportsContent" class="d-none">
                    <div class="text-center p-5 bg-white rounded shadow-sm">
                        <h2 class="mb-3">Raporlar</h2>
                        <p class="text-muted">Bu bölüm şu anda geliştirme aşamasındadır.</p>
                    </div>
                </div>
                
                <div id="calendarContent" class="d-none">
                    <div class="text-center p-5 bg-white rounded shadow-sm">
                        <h2 class="mb-3">Takvim</h2>
                        <p class="text-muted">Bu bölüm şu anda geliştirme aşamasındadır.</p>
                    </div>
                </div>
                
                <div id="financialContent" class="d-none">
                    <div class="text-center p-5 bg-white rounded shadow-sm">
                        <h2 class="mb-3">Finansal Rapor</h2>
                        <p class="text-muted">Bu bölüm şu anda geliştirme aşamasındadır.</p>
                    </div>
                </div>
                
                <div id="settingsContent" class="d-none">
                    <div class="text-center p-5 bg-white rounded shadow-sm">
                        <h2 class="mb-3">Ayarlar</h2>
                        <p class="text-muted">Bu bölüm şu anda geliştirme aşamasındadır.</p>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <footer class="bg-white p-3 mt-4 border-top text-center">
                <div class="container-fluid">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <p class="mb-2 mb-md-0 text-muted">&copy; 2025 RezervasyonCenneti - Admin Paneli</p>
                        <div>
                            <a href="#" class="text-muted text-decoration-none me-3 small">Gizlilik Politikası</a>
                            <a href="#" class="text-muted text-decoration-none me-3 small">Kullanım Şartları</a>
                            <a href="#" class="text-muted text-decoration-none small">Yardım</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="script/admin.js"></script>


</body>
</html> 