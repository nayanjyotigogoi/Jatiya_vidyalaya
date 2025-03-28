document.addEventListener('DOMContentLoaded', function() {
    // Create the background shapes dynamically
    createShapes();
    
    // Mobile menu toggle
    const menuToggle = document.querySelector('.nav-icons .fa-bars');
    const navLinks = document.querySelector('.nav-links');
    
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');
        });
    }
    
    // Form validation
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const subject = document.getElementById('subject').value.trim();
            const message = document.getElementById('message').value.trim();
            
            // Validate form
            let isValid = true;
            let errorMessage = '';
            
            if (!name) {
                isValid = false;
                errorMessage += 'Name is required.\n';
            }
            
            if (!email) {
                isValid = false;
                errorMessage += 'Email is required.\n';
            } else if (!isValidEmail(email)) {
                isValid = false;
                errorMessage += 'Please enter a valid email address.\n';
            }
            
            if (!phone) {
                isValid = false;
                errorMessage += 'Phone is required.\n';
            }
            
            if (!subject) {
                isValid = false;
                errorMessage += 'Subject is required.\n';
            }
            
            if (isValid) {
                // Simulate form submission
                const submitBtn = contactForm.querySelector('.submit-btn');
                submitBtn.textContent = 'SENDING...';
                submitBtn.disabled = true;
                
                // Simulate API call with timeout
                setTimeout(function() {
                    // Reset form
                    contactForm.reset();
                    submitBtn.textContent = 'SEND MESSAGE';
                    submitBtn.disabled = false;
                    
                    // Show success message
                    alert('Thank you! Your message has been sent successfully.');
                }, 2000);
            } else {
                // Show error message
                alert(errorMessage);
            }
        });
    }
    
    // Subscribe form validation
    const subscribeForm = document.querySelector('.subscribe-form');
    if (subscribeForm) {
        subscribeForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[type="email"]');
            const email = emailInput.value.trim();
            
            if (!email) {
                alert('Please enter your email address');
                return;
            }
            
            if (!isValidEmail(email)) {
                alert('Please enter a valid email address');
                return;
            }
            
            alert('Thank you for subscribing!');
            emailInput.value = '';
        });
    }
});

// Function to create background shapes
function createShapes() {
    // Create wavy lines for hero section
    const wave = document.createElement('div');
    wave.innerHTML = `
        <svg width="150" height="30" viewBox="0 0 150 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 15C8.33333 5 16.6667 0 25 0C33.3333 0 41.6667 5 50 15C58.3333 25 66.6667 30 75 30C83.3333 30 91.6667 25 100 15C108.333 5 116.667 0 125 0C133.333 0 141.667 5 150 15" stroke="#6C5CE7" stroke-width="2"/>
        </svg>
    `;
    wave.style.position = 'absolute';
    wave.style.left = '15%';
    wave.style.bottom = '30%';
    wave.style.zIndex = '1';
    document.querySelector('.hero').appendChild(wave);
    
    // Create dots pattern
    const dots = document.createElement('div');
    dots.style.position = 'absolute';
    dots.style.top = '20%';
    dots.style.left = '5%';
    dots.style.width = '100px';
    dots.style.height = '100px';
    dots.style.backgroundImage = 'radial-gradient(#ff6b6b 2px, transparent 2px)';
    dots.style.backgroundSize = '15px 15px';
    dots.style.zIndex = '1';
    document.querySelector('.hero').appendChild(dots);
    
    // Create star shape
    const star = document.createElement('div');
    star.innerHTML = `
        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25 0L32.7 17.6L50 20.2L37.5 33.8L40.5 50L25 42.5L9.5 50L12.5 33.8L0 20.2L17.3 17.6L25 0Z" fill="#9c88ff"/>
        </svg>
    `;
    star.style.position = 'absolute';
    star.style.top = '20%';
    star.style.right = '10%';
    star.style.zIndex = '1';
    document.querySelector('.hero').appendChild(star);
    
    // Create circle shape
    const circle = document.createElement('div');
    circle.style.position = 'absolute';
    circle.style.bottom = '20%';
    circle.style.right = '20%';
    circle.style.width = '80px';
    circle.style.height = '80px';
    circle.style.border = '3px solid #ff6b6b';
    circle.style.borderRadius = '50%';
    circle.style.zIndex = '1';
    document.querySelector('.hero').appendChild(circle);
}

// Email validation helper function
function isValidEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

// Add animation to form elements on scroll
const observerOptions = {
    threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

document.querySelectorAll('.form-group, .info-item').forEach(item => {
    observer.observe(item);
});

// Add animation class for CSS
const style = document.createElement('style');
style.textContent = `
    .form-group, .info-item {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }
    
    .form-group.animate, .info-item.animate {
        opacity: 1;
        transform: translateY(0);
    }
    
    .nav-links.active {
        display: flex;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: white;
        padding: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
`;
document.head.appendChild(style);