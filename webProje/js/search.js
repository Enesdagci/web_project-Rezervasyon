document.addEventListener('DOMContentLoaded', function() {
    // Date validation
    const checkinInput = document.getElementById('checkin');
    const checkoutInput = document.getElementById('checkout');
    
    if (checkinInput && checkoutInput) {
        // Set minimum date for checkin to today
        const today = new Date().toISOString().split('T')[0];
        checkinInput.setAttribute('min', today);
        
        // Update checkout minimum date when checkin changes
        checkinInput.addEventListener('change', function() {
            const checkinDate = new Date(this.value);
            checkinDate.setDate(checkinDate.getDate() + 1);
            const nextDay = checkinDate.toISOString().split('T')[0];
            
            checkoutInput.setAttribute('min', nextDay);
            
            // If checkout date is now invalid (before checkin), update it
            if (checkoutInput.value < nextDay) {
                checkoutInput.value = nextDay;
            }
        });
        
        // Initial setup for checkout minimum date
        if (checkinInput.value) {
            const checkinDate = new Date(checkinInput.value);
            checkinDate.setDate(checkinDate.getDate() + 1);
            const nextDay = checkinDate.toISOString().split('T')[0];
            checkoutInput.setAttribute('min', nextDay);
        }
    }
    
    // Advanced search toggle
    const advancedSearchToggle = document.getElementById('advancedSearchToggle');
    const advancedSearchOptions = document.getElementById('advancedSearchOptions');
    
    if (advancedSearchToggle && advancedSearchOptions) {
        advancedSearchToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            
            // Toggle advanced search options
            if (isExpanded) {
                advancedSearchOptions.style.display = 'none';
                this.setAttribute('aria-expanded', 'false');
                this.querySelector('.toggle-text').textContent = 'Gelişmiş Arama Seçenekleri';
                this.querySelector('.toggle-icon').style.transform = 'rotate(0deg)';
            } else {
                advancedSearchOptions.style.display = 'block';
                this.setAttribute('aria-expanded', 'true');
                this.querySelector('.toggle-text').textContent = 'Gelişmiş Arama Seçeneklerini Gizle';
                this.querySelector('.toggle-icon').style.transform = 'rotate(180deg)';
            }
        });
    }
    
    // Form validation
    const searchForm = document.getElementById('searchForm');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            let isValid = true;
            const requiredInputs = this.querySelectorAll('[required]');
            
            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('is-invalid');
                    
                    // Add or update validation message
                    let invalidFeedback = input.parentNode.querySelector('.invalid-feedback');
                    if (!invalidFeedback) {
                        invalidFeedback = document.createElement('div');
                        invalidFeedback.className = 'invalid-feedback';
                        invalidFeedback.textContent = 'Bu alan zorunludur.';
                        input.parentNode.appendChild(invalidFeedback);
                    }
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            
            // Date validation
            if (checkinInput.value && checkoutInput.value) {
                if (new Date(checkinInput.value) >= new Date(checkoutInput.value)) {
                    isValid = false;
                    checkoutInput.classList.add('is-invalid');
                    
                    let invalidFeedback = checkoutInput.parentNode.querySelector('.invalid-feedback');
                    if (!invalidFeedback) {
                        invalidFeedback = document.createElement('div');
                        invalidFeedback.className = 'invalid-feedback';
                        checkoutInput.parentNode.appendChild(invalidFeedback);
                    }
                    invalidFeedback.textContent = 'Çıkış tarihi giriş tarihinden sonra olmalıdır.';
                }
            }
            
            if (!isValid) {
                e.preventDefault();
            } else {
                // Add loading spinner to button
                const submitBtn = this.querySelector('button[type="submit"]');
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Aranıyor...';
                submitBtn.disabled = true;
            }
        });
        
        // Clear validation on input
        const formInputs = searchForm.querySelectorAll('.form-control, .form-select');
        formInputs.forEach(input => {
            input.addEventListener('input', function() {
                this.classList.remove('is-invalid');
                const feedback = this.parentNode.querySelector('.invalid-feedback');
                if (feedback) {
                    feedback.remove();
                }
            });
        });
    }
    
    // Price range slider functionality
    const priceRange = document.getElementById('priceRange');
    const priceValue = document.getElementById('priceValue');
    
    if (priceRange && priceValue) {
        priceRange.addEventListener('input', function() {
            priceValue.textContent = this.value + ' ₺';
            // Future implementation: update hotel listings based on price range
        });
    }
    
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Map view toggle functionality
    const mapToggle = document.getElementById('mapToggle');
    if (mapToggle) {
        mapToggle.addEventListener('click', function() {
            alert('Harita görünümü yakında eklenecektir. Şu an geliştirme aşamasındadır.');
        });
    }
    
    // Sort functionality
    const sortSelect = document.getElementById('sortBy');
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            // Future implementation: sort hotel listings based on selected option
            const selectedOption = this.value;
            console.log('Sıralama seçeneği: ' + selectedOption);
            
            // Simulate sorting effect (for demonstration purposes)
            const hotelListings = document.querySelector('.hotel-listings');
            if (hotelListings) {
                hotelListings.classList.add('sorting');
                setTimeout(function() {
                    hotelListings.classList.remove('sorting');
                }, 500);
            }
        });
    }
    
    // Filter checkboxes
    const filterCheckboxes = document.querySelectorAll('.filter-section input[type="checkbox"]');
    filterCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // Future implementation: filter hotel listings based on checkbox state
            console.log('Filtre: ' + this.id + ' = ' + this.checked);
        });
    });
    
    // Clear filters button
    const clearFiltersBtn = document.querySelector('.btn-filter-clear');
    if (clearFiltersBtn) {
        clearFiltersBtn.addEventListener('click', function() {
            filterCheckboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
            
            if (priceRange) {
                priceRange.value = 2500;
                priceValue.textContent = '2500 ₺';
            }
            
            // Future implementation: reset hotel listings to original state
        });
    }
    
    // Search auto-focus
    const locationInput = document.getElementById('location');
    if (locationInput && window.innerWidth > 768) {
        setTimeout(function() {
            locationInput.focus();
        }, 500);
    }
    
    // Smooth scroll animation for pagination
    const paginationLinks = document.querySelectorAll('.pagination .page-link');
    paginationLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if (!this.parentNode.classList.contains('disabled') && !this.parentNode.classList.contains('active')) {
                e.preventDefault();
                
                // Scroll to top of results with smooth animation
                const resultsSection = document.querySelector('.sort-by');
                if (resultsSection) {
                    window.scrollTo({
                        top: resultsSection.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
                
                // Future implementation: load next page of results
            }
        });
    });
});