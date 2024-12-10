<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StriveX Contact</title>
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blogstyling.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <a class="navbar-brand" href="{{ route('home') }}">
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
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="{{ route('yoga') }}">Yoga</a></li>
                            <li><a class="dropdown-item" href="{{ route('bootcamp') }}">Bootcamp</a></li>
                            <li><a class="dropdown-item" href="{{ route('sports-training') }}">Sports</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="contact-banner">
        <div class="banner-message">
            <h2>Let’s Have a Talk</h2>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="contact-info">
        <h3>Contact Information</h3>
        <div class="grid-container">
            <div class="grid-item">
                <img src="{{ asset('images/contact/location.png') }}" alt="Visit" class="icon">
                <h4>Visit</h4>
                <p>StriveX Wellington 6011,<br> New Zealand</p>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/contact/email.png') }}" alt="Email" class="icon">
                <h4>Email</h4>
                <p>chris.patterson@trainer.co.nz</p>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/contact/phone.png') }}" alt="Phone" class="icon">
                <h4>Phone</h4>
                <p>(123) 456-7890</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form">
        <h3>Send us a message</h3>
        <form id="contact-form" method="POST" action="{{ route('contact.submit') }}">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div>
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>

        <div id="success-message" style="display:none; color: green; font-weight: bold; margin-top: 10px;">
            Message sent successfully!
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonial-container">
        <div class="testimonial testimonial-1">
            <div class="testimonial-header">
                <div class="avatar"></div>
                <div class="testimonial-info">
                    <h3>David Ian</h3>
                    <p>2024-08-10</p>
                </div>
            </div>
            <div class="star-rating">
                ★★★★★
            </div>
            <p class="testimonial-text">
                Working with Personal Trainer Co. has been a life-changing experience. Their custom fitness programs
                helped me improve my overall health and strength in just a few months. The trainers are incredibly
                supportive and always available for advice!
            </p>
        </div>

        <div class="testimonial testimonial-2">
            <div class="testimonial-header">
                <div class="avatar"></div>
                <div class="testimonial-info">
                    <h3>Rosemary</h3>
                    <p>2024-09-21</p>
                </div>
            </div>
            <div class="star-rating">
                ★★★★★
            </div>
            <p class="testimonial-text">
                I was struggling with my fitness routine, but after joining Personal Trainer Co., I saw a remarkable
                transformation. The boot camp sessions were tough but rewarding, and the personalized attention made all
                the difference. Highly recommend this place!
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-container">
        <div class="newsletter">
            <h3>Join our Fitness Newsletter</h3>
            <form class="newsletter-form" action="#" method="post">
                <input type="email" placeholder="Enter your email" aria-label="Newsletter Signup" required>
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
                    <a href="#"><img src="{{ asset('images/home/icons8-facebook.svg') }}" alt="Facebook"></a>
                    <a href="#"><img src="{{ asset('images/home/icons8-instagram.svg') }}" alt="Instagram"></a>
                    <a href="#"><img src="{{ asset('images/home/icons8-whatsapp.svg') }}" alt="YouTube"></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-bottom">
            <span class="branding">PERSONAL TRAINING</span>
            <span>STRIVEX</span>
        </div>
    </footer>

    <script src="{{ asset('js/contact.js') }}"></script>
</body>

</html>
