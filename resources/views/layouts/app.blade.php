<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jatiya Vidyalaya | Sonari Chapari</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Mahee:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome.css">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Styles -->
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
    <!-- added by nayan on 19-03-2025 -->
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/about-us.css')}}">
    <link rel="stylesheet" href="{{asset('css/teacher.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact-us.css')}}">
    <link rel="stylesheet" href="{{asset('css/academics.css')}}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @yield('css')

</head>

<body class="antialiased">
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-bar-left">
                    <a href="#"><i class="fas fa-phone"></i> +1 123 456 7890</a>

                </div>
                <div class="top-bar-right">
                    <a href="#"><i class="fas fa-envelope"></i> info@jatiyavidyalayas.com</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Section -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="{{asset('images/logo.png')}}" alt="Jatiya Vidyalaya Logo">
                <div class="logo-text"> জাতীয় বিদ্যালয়
                    <!-- <h1>Jatiya Vidyalaya | Sonari Chapari</h1>
                    <p>জাতীয় বিদ্যালয় সোণাৰি চাপৰি , ঢকুৱাখনা </p> -->
                </div>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="/" class="nav-link">Home</a></li>
                    <li><a href="/about-us" class="nav-link">About Us</a></li>
                    <li><a href="/teacher" class="nav-link">Teachers</a></li>
                    <li><a href="/academics" class="nav-link">Academics</a></li>
                    <!-- <li><a href="#" class="nav-link">Blog</a></li> -->
                    <li><a href="/contact-us" class="nav-link">Contact</a></li>
                </ul>
            </nav>
            <div class="header-buttons">
                <a href="/login" class="btn">Login</a>
                <!-- <a href="#" class="btn">Sign Up</a> -->
            </div>
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <div>
        @yield('content')
    </div>


    <!-- Footer -->
    <footer class="footer">

        <div class="container footer-main">
            <div>
                <div class="footer-logo">
                    <img src="{{asset('images/logo.png')}}" alt="Jatiya Vidyalaya Logo">
                    <div class="footer-logo-text">জাতীয় বিদ্যালয়</div>
                </div>


                <p class="footer-text">জাতীয় বিদ্যালয় সোণাৰি চাপৰি , ঢকুৱাখনা</p>
                <div class="footer-social">
                    <a href="#" class="footer-social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="footer-social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="footer-social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="footer-social-link"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div>
                <h3 class="footer-title">Our Services</h3>
                <ul class="footer-links">
                    <li><a href="#" class="nav-link">Home</a></li>
                    <li><a href="/about-us" class="nav-link">About Us</a></li>
                    <li><a href="/teacher" class="nav-link">Teachers</a></li>
                    <li><a href="" class="nav-link">Academics</a></li>
                    <!-- <li><a href="#" class="nav-link">Blog</a></li> -->
                    <li><a href="#" class="nav-link">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="footer-title">Subscribe</h3>
                <p class="footer-text">Subscribe to our newsletter to receive updates on new courses and events.</p>
                <div class="footer-subscribe">
                    <form class="footer-subscribe-form">
                        <input type="email" placeholder="Your Email" class="footer-subscribe-input">
                        <button type="submit" class="footer-subscribe-btn">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            <!-- Map View Column -->
            <div class="col-md-6 col-sm-12">
                <h3>Map View</h3>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3550.4387472968087!2d94.3463475!3d27.1424825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37412b0057c8e8c5%3A0x237893f6a03c7aa6!2sSonari%20chapari%20jatiya%20vidyalaya!5e0!3m2!1sen!2sin!4v1738045230178!5m2!1sen!2sin"
                        allowfullscreen loading="lazy"></iframe>
                </div>
            </div>

        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 জাতীয় বিদ্যালয় সোণাৰি চাপৰি ঢকুৱাখনা. &nbsp;&nbsp; All rights reserved.</p>
        </div>

    </footer>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="mobile-menu-close">
            <i class="fas fa-times"></i>
        </div>
        <ul class="mobile-menu-items">
            <li><a href="/" class="mobile-menu-link">Home</a></li>
            <li><a href="/about-us" class="mobile-menu-link">About Us</a></li>
            <li><a href="/teacher" class="mobile-menu-link">Teacher</a></li>
            <li><a href="/academics" class="mobile-menu-link">Academics</a></li>
            <!-- <li><a href="#" class="mobile-menu-link">Blog</a></li> -->
            <li><a href="#" class="mobile-menu-link">Contact</a></li>
        </ul>
    </div>
    <div class="overlay"></div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/about-us.js"></script>
    <script src="js/contact-us.js"></script>
    <script src="js/academics.js"></script>
    <script src="js/teacher.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @yield('js')

    <script>
        $(document).ready(function () {

            // Check if there's a saved active item in localStorage
            const activeItem = localStorage.getItem('activeNavItem');
            console.log(activeItem);
            if (activeItem != 'home') {
                $('#' + activeItem).addClass('active');
            }

            $('.nav-item').on('click', function () {
                // Remove the 'active' class from all nav items
                $('.nav-item').removeClass('active');

                // Add 'active' class to the clicked item
                $(this).addClass('active');

                // Save the clicked item's id in localStorage
                localStorage.setItem('activeNavItem', $(this).attr('id'));
            });
            $(".nav-toggle").click(function () {
                $(".nav-list").toggleClass("active"); // Toggle the menu visibility
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            const mobileMenuBtn = document.querySelector(".mobile-menu-btn");
            const mobileMenu = document.querySelector(".mobile-menu");
            const overlay = document.querySelector(".overlay");
            const closeBtn = document.querySelector(".mobile-menu-close");

            // Open Menu
            mobileMenuBtn.addEventListener("click", function () {
                mobileMenu.classList.add("active");
                overlay.classList.add("active");
            });

            // Close Menu
            closeBtn.addEventListener("click", function () {
                mobileMenu.classList.remove("active");
                overlay.classList.remove("active");
            });

            // Close when clicking outside the menu
            overlay.addEventListener("click", function () {
                mobileMenu.classList.remove("active");
                overlay.classList.remove("active");
            });
        });

    </script>

    <script>
        AOS.init();
    </script>
</body>

</html>