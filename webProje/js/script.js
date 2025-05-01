// Genel JavaScript kodları buraya eklenebilir.
// Örneğin, mobil menü toggle, form validasyonları vb.

console.log("Otel Rezervasyon Scriptleri Yüklendi."); 
function toggleForms() {
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    loginForm.classList.toggle('active');
    registerForm.classList.toggle('active');
}