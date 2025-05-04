// Modern Script for RezervasyonCenneti

console.log("RezervasyonCenneti - Improved Navbar Loaded");

// Navbar Scroll Effect
function handleNavbarScroll() {
    const navbar = document.querySelector('.navbar');
    
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
}

// Set Active Navigation Link
function setActiveNavLink() {
    const currentLocation = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        
        // Remove active class from all links
        link.classList.remove('active');
        
        // Add active class to current page link
        if (href && currentLocation.includes(href) && href !== '#') {
            link.classList.add('active');
            link.setAttribute('aria-current', 'page');
        }
    });
}

// Smooth Scroll for Anchor Links
function setupSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const navbarHeight = document.querySelector('.navbar').offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            }
        });
    });
}

// Close Dropdown on Outside Click
function setupDropdownClose() {
    document.addEventListener('click', function(e) {
        // Check if click is outside dropdown
        if (!e.target.closest('.dropdown')) {
            const dropdownMenus = document.querySelectorAll('.dropdown-menu');
            dropdownMenus.forEach(menu => {
                menu.classList.remove('show');
            });
        }
    });
}

// Form Validation
function setupFormValidation() {
    const contactForm = document.querySelector('#contact form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formInputs = this.querySelectorAll('input[required], textarea[required]');
            let isValid = true;
            
            formInputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            
            if (isValid) {
                // Submit form or show success message
                alert('Mesajınız başarıyla gönderildi!');
                this.reset();
            }
        });
    }
}

// Initialize all functions
function init() {
    // Setup event listeners
    window.addEventListener('scroll', handleNavbarScroll);
    window.addEventListener('resize', () => {
        // Handle resize events if needed
    });
    
    // Run on page load
    setActiveNavLink();
    setupSmoothScroll();
    setupDropdownClose();
    setupFormValidation();
    
    // Initialize Bootstrap tooltips if needed
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
}

// Run when DOM is loaded
document.addEventListener('DOMContentLoaded', init);

// Additional helper functions
function toggleForms() {
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    
    if (loginForm && registerForm) {
        loginForm.classList.toggle('active');
        registerForm.classList.toggle('active');
    }
}

// Search form enhancement
function enhanceSearchForm() {
    const searchForm = document.querySelector('.search-form');
    
    if (searchForm) {
        // Add loading state to search button
        searchForm.addEventListener('submit', function() {
            const submitBtn = this.querySelector('button[type="submit"]');
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Aranıyor...';
            submitBtn.disabled = true;
        });
        
        // Date input validation
        const dateInputs = searchForm.querySelectorAll('input[type="date"]');
        dateInputs.forEach(input => {
            input.addEventListener('change', function() {
                const today = new Date().toISOString().split('T')[0];
                if (this.value < today) {
                    this.value = today;
                }
            });
        });
    }
}

// Add search form enhancement to init
document.addEventListener('DOMContentLoaded', () => {
    enhanceSearchForm();
});