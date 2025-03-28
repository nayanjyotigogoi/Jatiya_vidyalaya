 // Mobile Menu Toggle
 const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
 const mobileMenu = document.querySelector('.mobile-menu');
 const mobileMenuClose = document.querySelector('.mobile-menu-close');
 const overlay = document.querySelector('.overlay');

 mobileMenuBtn.addEventListener('click', () => {
     mobileMenu.classList.add('active');
     overlay.classList.add('active');
 });

 mobileMenuClose.addEventListener('click', () => {
     mobileMenu.classList.remove('active');
     overlay.classList.remove('active');
 });

 overlay.addEventListener('click', () => {
     mobileMenu.classList.remove('active');
     overlay.classList.remove('active');
 });

 // Scroll Animation
 window.addEventListener('scroll', () => {
     const header = document.querySelector('header');
     if (window.scrollY > 50) {
         header.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
     } else {
         header.style.boxShadow = 'none';
     }
 });

 document.addEventListener("DOMContentLoaded", function () {
     const teamGrid = document.getElementById("teamGrid");
     const prevBtn = document.getElementById("prevBtn");
     const nextBtn = document.getElementById("nextBtn");

     let currentIndex = 0;
     const cardWidth = document.querySelector(".team-card").offsetWidth + 40; // Card width + gap
     const visibleCards = Math.floor(document.querySelector(".team-wrapper").offsetWidth / cardWidth);
     const totalCards = document.querySelectorAll(".team-card").length;

     function updateNavigation() {
         if (currentIndex <= 0) {
             prevBtn.style.opacity = "0.5";
             prevBtn.style.pointerEvents = "none";
         } else {
             prevBtn.style.opacity = "1";
             prevBtn.style.pointerEvents = "auto";
         }

         if (currentIndex >= totalCards - visibleCards) {
             nextBtn.style.opacity = "0.5";
             nextBtn.style.pointerEvents = "none";
         } else {
             nextBtn.style.opacity = "1";
             nextBtn.style.pointerEvents = "auto";
         }
     }

     nextBtn.addEventListener("click", function () {
         if (currentIndex < totalCards - visibleCards) {
             currentIndex++;
             teamGrid.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
         }
         updateNavigation();
     });

     prevBtn.addEventListener("click", function () {
         if (currentIndex > 0) {
             currentIndex--;
             teamGrid.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
         }
         updateNavigation();
     });

     updateNavigation();
 });

 document.addEventListener("DOMContentLoaded", function () {
     let currentTestimonial = 0;
     const testimonials = document.querySelectorAll('.testimonial-card');
     const totalTestimonials = testimonials.length;
     const prevBtn = document.getElementById("testimonialPrev");
     const nextBtn = document.getElementById("testimonialNext");

     function showTestimonial(index) {
         testimonials.forEach(slide => slide.classList.remove('active'));
         testimonials[index].classList.add('active');
     }

     function changeTestimonialSlide(direction) {
         currentTestimonial = (currentTestimonial + direction + totalTestimonials) % totalTestimonials;
         showTestimonial(currentTestimonial);
     }

     // Add event listeners to buttons
     if (prevBtn && nextBtn) {
         prevBtn.addEventListener("click", function () {
             changeTestimonialSlide(-1);
         });

         nextBtn.addEventListener("click", function () {
             changeTestimonialSlide(1);
         });
     }

     // Initial Display
     showTestimonial(currentTestimonial);
 });