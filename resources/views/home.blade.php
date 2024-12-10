<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StriveX</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <!-- Font Roboto Condensed -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img id="logoID" src="{{ asset('images/home/logo.png') }}" alt="Business Logo" class="logo">
            </a>

            <!-- Toggle Button for Mobile View -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="{{ url('/yoga') }}">Yoga</a></li>
                            <li><a class="dropdown-item" href="{{ url('/bootcamp') }}">Bootcamp</a></li>
                            <li><a class="dropdown-item" href="{{ url('/sports-training') }}">Sports</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <video autoplay muted loop class="hero-video embed-responsive-item">
            <source src="{{ asset('videos/services/home/hero_section.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-content">
            <!-- Heading Section -->
            <div class="transition-heading">
                <h1 class="headline first-part">FITNESS THAT STICKS</h1>
                <h1 class="headline second-part">TAILORED WORKOUTS</h1>
            </div>
            <!-- New Flex Container -->
            <div class="hero-text-content">
                <p>Achieve your fitness goals with personalized training and expert guidance. Join our community
                    today!
                </p>
                <button class="cta-button">Start Your Journey Today</button>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services position-relative">
        <div class="position-relative header-container mb-0">
            <h2>Our Services</h2>
            <!-- Action Buttons for Text Style Change -->
            <div class="button-container">
                <div class="d-flex flex-column align-items-center">
                    <button id="change-text-style" class="btn btn-primary btn-sm mb-1"
                        onclick="changeTextStyle()">Change Text Style</button>
                    <button id="reset-text-style" class="btn btn-secondary btn-sm mb-0" onclick="resetTextStyle()">Reset
                        Text
                        Style</button>
                </div>
            </div>
        </div>

        <div class="service-cards mt-0">
            <div class="service-card">
                <img id="yoga-image" src="{{ asset('images/home/yoga_services.jpg') }}" alt="Yoga Services" class="service-image"
                    onmouseover="changeImage(this, '{{ asset('images/home/yoga_services_hover.jpg') }}')"
                    onmouseout="resetImage(this, '{{ asset('images/home/yoga_services.jpg') }}')">
                <h3>Yoga</h3>
                <p class="service-description">Find balance and flexibility with our expert-led yoga classes, designed
                    for all skill levels.</p>
                <a href="{{ url('/yoga') }}" class="explore-button">Explore</a>
            </div>
            <div class="service-card">
                <img id="bootcamp-image" src="{{ asset('images/home/bootcamp-services.jpeg') }}" alt="Bootcamp Services"
                    class="service-image" onmouseover="changeImage(this, '{{ asset('images/home/bootcamp-services-hover.jpg') }}')"
                    onmouseout="resetImage(this, '{{ asset('images/home/bootcamp-services.jpeg') }}')">
                <h3>Bootcamp</h3>
                <p class="service-description">Challenge yourself with our intense bootcamp workouts, designed to push
                    your limits and build strength.</p>
                <a href="{{ url('/bootcamp') }}" class="explore-button">Explore</a>
            </div>
            <div class="service-card">
                <img id="basketball-image" src="{{ asset('images/home/Basketball.jpeg') }}" alt="Basketball Services"
                    class="service-image" onmouseover="changeImage(this, '{{ asset('images/home/Basketball_hover.jpg') }}')"
                    onmouseout="resetImage(this, '{{ asset('images/home/Basketball.jpeg') }}')">
                <h3>Sports Training</h3>
                <p class="service-description">Elevate your athletic performance with personalized sports training,
                    tailored to your goals.</p>
                <a href="{{ url('/sports-training') }}" class="explore-button">Explore</a>
            </div>
        </div>
    </section>

    <!-- Rest of your sections -->

    
    <!-- Footer -->
    <footer class="footer-container">
        <div class="newsletter">
            <h3>Join our Fitness Newsletter</h3>
            <form id="newsletter-form" class="newsletter-form" action="#" method="post"
                onsubmit="return validateNewsletterForm(event)">
                <input type="email" id="email" placeholder="Enter your email" aria-label="Newsletter Signup" required>
                <span id="email-error" class="error-message"></span>
                <button type="submit">Subscribe</button>
            </form>
        </div>
        <hr>
        <div class="footer-content">
            <div class="footer-section">
                <p>Services</p>
                <ul>
                    <li><a href="#">Personal Training</a></li>
                    <li><a href="#">Nutrition Plans</a></li>
                    <li><a href="#">Online Coaching</a></li>
                    <li><a href="#">Fitness Assessments</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <p>About</p>
                <ul>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Success Stories</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            <div class="footer-section social-media">
                <p>Follow Us</p>
                <div class="social-icons">
                    <a href="#"><img src="images/home/icons8-facebook.svg" alt="Facebook"></a>
                    <a href="#"><img src="images/home/icons8-instagram.svg" alt="Instagram"></a>
                    <a href="#"><img src="images/home/icons8-whatsapp.svg" alt="YouTube"></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-bottom">
            <span class="branding">PERSONAL TRAINING</span>
            <span>STRIVEX</span>
        </div>
    </footer>
    <script src="home.js"></script>
    <script src="scripts/rollover.js"></script>

</body>

</html>