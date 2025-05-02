// Genel JavaScript kodları buraya eklenebilir.
// Örneğin, mobil menü toggle, form validasyonları vb.

console.log("Otel Rezervasyon Scriptleri Yüklendi."); 
function toggleForms() {
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    loginForm.classList.toggle('active');
    registerForm.classList.toggle('active');
}

/**/
document.addEventListener('DOMContentLoaded', function() {
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Handle compare checkboxes
    const compareCheckboxes = document.querySelectorAll('input[id^="compare-hotel-"]');
    const compareBtn = document.getElementById('compare-hotels-btn');
    const compareCount = document.querySelector('.compare-count');
    
    compareCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const checkedCount = document.querySelectorAll('input[id^="compare-hotel-"]:checked').length;
            compareCount.textContent = checkedCount;
            
            if (checkedCount >= 2) {
                compareBtn.disabled = false;
            } else {
                compareBtn.disabled = true;
            }
        });
    });
});