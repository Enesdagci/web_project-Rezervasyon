document.getElementById('sidebarCollapse').addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');
    
    sidebar.classList.toggle('collapsed');
    content.classList.toggle('expanded');
    
    // Change toggle icon
    const icon = this.querySelector('i');
    if (sidebar.classList.contains('collapsed')) {
        icon.classList.remove('fa-chevron-left');
        icon.classList.add('fa-chevron-right');
    } else {
        icon.classList.remove('fa-chevron-right');
        icon.classList.add('fa-chevron-left');
    }
});

// Page Navigation
document.querySelectorAll('.nav-link[data-page]').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Set active link
        document.querySelectorAll('.nav-link').forEach(el => {
            el.classList.remove('active');
        });
        this.classList.add('active');
        
        // Update page title
        const pageId = this.getAttribute('data-page');
        let pageTitle = '';
        
        switch(pageId) {
            case 'dashboard': pageTitle = 'Kontrol Paneli'; break;
            case 'users': pageTitle = 'Kullanıcı Yönetimi'; break;
            case 'bookings': pageTitle = 'Rezervasyon Yönetimi'; break;
            case 'hotels': pageTitle = 'Otel Yönetimi'; break;
            case 'approvals': pageTitle = 'Onay Bekleyenler'; break;
            case 'notifications': pageTitle = 'Bildirimler'; break;
            case 'reports': pageTitle = 'Raporlar'; break;
            case 'calendar': pageTitle = 'Takvim'; break;
            case 'financial': pageTitle = 'Finansal Rapor'; break;
            case 'settings': pageTitle = 'Ayarlar'; break;
        }
        
        document.getElementById('pageTitle').textContent = pageTitle;
        
        // Show content
        document.querySelectorAll('[id$="Content"]').forEach(content => {
            content.classList.add('d-none');
        });
        document.getElementById(pageId + 'Content').classList.remove('d-none');
    });
});

// Initialize Tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Chart Tabs
document.querySelectorAll('.chart-actions .nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Set active link
        document.querySelectorAll('.chart-actions .nav-link').forEach(el => {
            el.classList.remove('active');
        });
        this.classList.add('active');
        
        // Update chart (in a real application)
        const chartType = this.getAttribute('data-chart');
        console.log('Switching to chart: ' + chartType);
        
        // Here you would update the chart based on the selected type
        updateChart(chartType);
    });
});

// Initialize Charts
function initCharts() {
    // Main Chart (User Data)
    const mainCtx = document.getElementById('mainChart').getContext('2d');
    const mainChart = new Chart(mainCtx, {
        type: 'line',
        data: {
            labels: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran'],
            datasets: [{
                label: 'Yeni Kullanıcı Kayıtları',
                data: [50, 75, 120, 90, 150, 180],
                fill: true,
                backgroundColor: 'rgba(0, 128, 115, 0.1)',
                borderColor: 'rgb(0, 128, 115)',
                tension: 0.3,
                pointBackgroundColor: 'rgb(0, 128, 115)',
                pointBorderColor: '#fff',
                pointRadius: 5,
                pointHoverRadius: 7
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                    labels: {
                        boxWidth: 12,
                        usePointStyle: true,
                        pointStyle: 'circle'
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.7)',
                    titleFont: {
                        size: 14
                    },
                    bodyFont: {
                        size: 13
                    },
                    padding: 10,
                    cornerRadius: 5,
                    displayColors: false
                }
            }
        }
    });
    
    // Category Chart (Pie)
    const categoryCtx = document.getElementById('categoryChart').getContext('2d');
    const categoryChart = new Chart(categoryCtx, {
        type: 'doughnut',
        data: {
            labels: ['Lüks', 'Butik', 'Ekonomik', 'Tatil Köyü'],
            datasets: [{
                data: [35, 20, 15, 15],
                backgroundColor: [
                    'rgba(0, 128, 115, 0.7)',
                    'rgba(23, 162, 184, 0.7)', 
                    'rgba(255, 193, 7, 0.7)',
                    'rgba(111, 66, 193, 0.7)'
                ],
                borderColor: [
                    'rgba(0, 128, 115, 1)',
                    'rgba(23, 162, 184, 1)',
                    'rgba(255, 193, 7, 1)',
                    'rgba(111, 66, 193, 1)'
                ],
                borderWidth: 1,
                hoverOffset: 10
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 20,
                        boxWidth: 12,
                        usePointStyle: true,
                        pointStyle: 'circle'
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.7)',
                    titleFont: {
                        size: 14
                    },
                    bodyFont: {
                        size: 13
                    },
                    padding: 10,
                    cornerRadius: 5,
                    callbacks: {
                        label: function(context) {
                            const label = context.label || '';
                            const value = context.raw || 0;
                            const total = context.dataset.data.reduce((acc, curr) => acc + curr, 0);
                            const percentage = Math.round((value / total) * 100);
                            return `${label}: ${value} (%${percentage})`;
                        }
                    }
                }
            }
        }
    });
}

// Function to update chart based on selection
function updateChart(chartType) {
    const mainChart = Chart.getChart('mainChart');
    
    if (!mainChart) return;
    
    let newData = {
        labels: ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran'],
        datasets: []
    };
    
    switch(chartType) {
        case 'users':
            newData.datasets = [{
                label: 'Yeni Kullanıcı Kayıtları',
                data: [50, 75, 120, 90, 150, 180],
                fill: true,
                backgroundColor: 'rgba(0, 128, 115, 0.1)',
                borderColor: 'rgb(0, 128, 115)',
                tension: 0.3,
                pointBackgroundColor: 'rgb(0, 128, 115)',
                pointBorderColor: '#fff',
                pointRadius: 5,
                pointHoverRadius: 7
            }];
            break;
        case 'bookings':
            newData.datasets = [{
                label: 'Aylık Rezervasyon Sayısı',
                data: [30, 45, 60, 55, 70, 85],
                fill: true,
                backgroundColor: 'rgba(23, 162, 184, 0.1)',
                borderColor: 'rgb(23, 162, 184)',
                tension: 0.3,
                pointBackgroundColor: 'rgb(23, 162, 184)',
                pointBorderColor: '#fff',
                pointRadius: 5,
                pointHoverRadius: 7
            }];
            break;
        case 'revenue':
            newData.datasets = [{
                label: 'Aylık Gelir (₺)',
                data: [45000, 58000, 72000, 68000, 92000, 110000],
                fill: true,
                backgroundColor: 'rgba(40, 167, 69, 0.1)',
                borderColor: 'rgb(40, 167, 69)',
                tension: 0.3,
                pointBackgroundColor: 'rgb(40, 167, 69)',
                pointBorderColor: '#fff',
                pointRadius: 5,
                pointHoverRadius: 7
            }];
            break;
    }
    
    mainChart.data = newData;
    mainChart.update();
}

// Filter buttons
document.querySelectorAll('[data-filter]').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('[data-filter]').forEach(el => {
            el.classList.remove('active');
        });
        this.classList.add('active');
        
        // Update data based on filter (in a real app)
        const filterType = this.getAttribute('data-filter');
        console.log('Filter changed to: ' + filterType);
        // Here you would call a function to reload data
    });
});

// Initialize all components when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initCharts();
    
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Add animation class to content
    setTimeout(() => {
        const fadeElements = document.querySelectorAll('.fade-in');
        fadeElements.forEach(el => {
            el.style.animation = 'none';
            el.offsetHeight; // Trigger reflow
            el.style.animation = null;
        });
    }, 100);
});