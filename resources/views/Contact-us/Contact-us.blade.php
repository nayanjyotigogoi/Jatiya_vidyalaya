@extends('layouts.app')
@section('content')
    <section class="hero">
        <div class="shape shape-dots"></div>
        <div class="shape shape-wave"></div>
        <div class="shape shape-star"></div>
        <div class="shape shape-circle"></div>
        <div class="about-section-container">
            <div class="about-hero-content">
                <div class="about-breadcrumb">
                    <a href="/">Home</a> > <span>Contact Us</span>
                </div>
                <h1>Contact Us</h1>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-container">
                <div class="contact-info">
                    <h2>Get in Touch</h2>
                    <p>Suspendisse ultrice gravida dictum fusce placerat ultricies integer</p>
                    
                    <div class="info-box">
                        <div class="info-item">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <h4>Our Address</h4>
                                <p>1564 Goosetown Drive</p>
                                <p>Matthews, NC 28105</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="content">
                                <h4>Hours Of Operation</h4>
                                <p>Mon - Fri: 9.00am to 5.00pm</p>
                                <p class="small">(2nd Sat Holiday)</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <h4>Contact</h4>
                                <p>+99- 35895-4565</p>
                                <p>supportyou@info.com</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="customer-care">
                        <div class="care-icon">
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <span>Customer Care</span>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Name<span class="required">*</span></label>
                            <input type="text" id="name" name="name" placeholder="Name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address<span class="required">*</span></label>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone<span class="required">*</span></label>
                            <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject<span class="required">*</span></label>
                            <input type="text" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5"></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection


