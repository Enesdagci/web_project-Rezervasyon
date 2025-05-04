document.addEventListener('DOMContentLoaded', function() {
    // Form toggle functionality
    const loginForm = document.querySelector('.login-form');
    const registerForm = document.querySelector('.register-form');
    const showRegisterButton = document.getElementById('showRegisterForm');
    const showLoginButton = document.getElementById('showLoginForm');
    
    showRegisterButton.addEventListener('click', function() {
        loginForm.classList.remove('active');
        registerForm.classList.add('active');
        // Update window hash for better navigation
        window.location.hash = 'register';
    });
    
    showLoginButton.addEventListener('click', function() {
        registerForm.classList.remove('active');
        loginForm.classList.add('active');
        // Update window hash for better navigation
        window.location.hash = 'login';
    });
    
    // Check hash on page load
    if (window.location.hash === '#register') {
        loginForm.classList.remove('active');
        registerForm.classList.add('active');
    }
    
    // Toggle password visibility
    function togglePassword(inputId) {
        const passwordInput = document.getElementById(inputId);
        const toggleBtn = passwordInput.parentElement.querySelector('.password-toggle-btn i');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleBtn.classList.remove('fa-eye-slash');
            toggleBtn.classList.add('fa-eye');
        } else {
            passwordInput.type = 'password';
            toggleBtn.classList.remove('fa-eye');
            toggleBtn.classList.add('fa-eye-slash');
        }
    }
    
    // Make togglePassword available globally
    window.togglePassword = togglePassword;
    
    // Password strength checker
    const passwordInput = document.getElementById('register-password');
    const strengthText = document.querySelector('.password-strength-text');
    
    if (passwordInput) {
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            const strength = checkPasswordStrength(password);
            
            // Update strength meter
            const segments = document.querySelectorAll('.strength-segment');
            segments.forEach((segment, index) => {
                if (index < strength) {
                    segment.classList.add('active');
                } else {
                    segment.classList.remove('active');
                }
            });
            
            // Update strength text
            const strengthTexts = ['Çok zayıf', 'Zayıf', 'Orta', 'Güçlü'];
            strengthText.textContent = strength > 0 ? strengthTexts[strength - 1] : '';
            
            // Update strength text color
            const colors = [
                'var(--error-color)',
                'var(--warning-color)',
                'var(--info-color)',
                'var(--success-color)'
            ];
            
            strengthText.style.color = strength > 0 ? colors[strength - 1] : '';
        });
    }
    
    // Check password strength
    function checkPasswordStrength(password) {
        if (!password) return 0;
        
        let score = 0;
        
        // Length check
        if (password.length >= 8) score += 1;
        if (password.length >= 12) score += 1;
        
        // Complexity checks
        if (/[A-Z]/.test(password)) score += 1;
        if (/[a-z]/.test(password)) score += 1;
        if (/[0-9]/.test(password)) score += 1;
        if (/[^A-Za-z0-9]/.test(password)) score += 1;
        
        // Calculate final score (1-4)
        return Math.min(Math.floor(score / 2) + 1, 4);
    }
    
    // Password match validation
    const confirmPasswordInput = document.getElementById('confirm-password');
    
    if (confirmPasswordInput && passwordInput) {
        confirmPasswordInput.addEventListener('input', function() {
            const password = passwordInput.value;
            const confirmPassword = this.value;
            
            if (password !== confirmPassword) {
                this.setCustomValidity('Şifreler eşleşmiyor');
            } else {
                this.setCustomValidity('');
            }
        });
    }
    
    // Form submissions
    const loginFormEl = document.getElementById('loginForm');
    const registerFormEl = document.getElementById('registerForm');
    
    if (loginFormEl) {
        loginFormEl.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            const button = document.getElementById('loginButton');
            const btnText = button.querySelector('.btn-text');
            const spinner = button.querySelector('.spinner-border');
            
            btnText.classList.add('d-none');
            spinner.classList.remove('d-none');
            button.disabled = true;
            
            // Simulate form submission (replace with actual AJAX call)
            setTimeout(function() {
                // Show success toast
                showToast('Giriş başarılı! Yönlendiriliyorsunuz...', 'success');
                
                // Redirect after delay
                setTimeout(function() {
                    window.location.href = 'dashboard.php';
                }, 1500);
            }, 2000);
        });
    }
    
    if (registerFormEl) {
        registerFormEl.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validate form
            if (!this.checkValidity()) {
                e.stopPropagation();
                this.classList.add('was-validated');
                return;
            }
            
            // Show loading state
            const button = document.getElementById('registerButton');
            const btnText = button.querySelector('.btn-text');
            const spinner = button.querySelector('.spinner-border');
            
            btnText.classList.add('d-none');
            spinner.classList.remove('d-none');
            button.disabled = true;
            
            // Simulate form submission (replace with actual AJAX call)
            setTimeout(function() {
                // Show success toast
                showToast('Kaydınız başarıyla oluşturuldu!', 'success');
                
                // Switch to login form after successful registration
                setTimeout(function() {
                    registerForm.classList.remove('active');
                    loginForm.classList.add('active');
                    
                    // Reset button state
                    btnText.classList.remove('d-none');
                    spinner.classList.add('d-none');
                    button.disabled = false;
                    
                    // Reset form
                    registerFormEl.reset();
                    registerFormEl.classList.remove('was-validated');
                }, 1500);
            }, 2000);
        });
    }
    
    // Show toast notification
    function showToast(message, type = 'success') {
        const toastContainer = document.querySelector('.toast-container');
        
        const toastHTML = `
            <div class="toast align-items-center text-white bg-${type === 'success' ? 'success' : 'danger'} border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2"></i>
                        ${message}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        `;
        
        toastContainer.innerHTML = toastHTML;
        
        const toast = new bootstrap.Toast(toastContainer.querySelector('.toast'), {
            delay: 4000
        });
        
        toast.show();
    }
    
    // Make showToast available globally
    window.showToast = showToast;
});