<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StriveX Blog</title>

    <!-- Linking CSS files using Laravel's asset() function -->
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blogstyling.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');
    </style>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

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
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
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
                            <li><a class="dropdown-item" href="{{ route('sports') }}">Sports</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Full-Screen Video Section -->
    <div class="video-section">
        <video class="fullscreen-video" autoplay muted loop>
            <source src="{{ asset('videos/blogs/blog-video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div>
        <div class="overlay-text">
            <h2>Stay up-to-date</h2>
        </div>
    </div>

    <!-- Blog Section -->
    <section class="blog" id="blog">
        <div class="container">
            <div class="title">
                <h2>Latest Blogs</h2>
            </div>
            <div class="style-buttons">
                <button id="changeStyleBtn">Change Text Style</button>
                <button id="resetStyleBtn">Reset Text Style</button>
            </div>
            <div class="blog-content">
                <!-- start item -->
                <div class="blog-item">
                    <div class="blog-image">

                        <img id="blogImage1" src="images/blogimage1.jpeg" alt="the mental health">
                        <!-- <span class="blog-like"><i class="far fa-heart"></i> </span> -->
                    </div>
                    <div class="blog-text">
                        <span class="blog-card-meta"> 28 february,2022 By Lawrence Robinson</span>
                        <h2 class="blog-card-title">The Mental Health Benefits of Exercise</h2>
                        <a href="mentalhealth.html" class="blog-card-btn">Read More</a>
                    </div>
                </div>
                <!-- end item -->
                <!-- start item -->
                <div class="blog-item">
                    <div class="blog-image">
                        <img id="blogImage2" src="images/blogimage2.jpg" alt="teens">
                        <!-- <span class="blog-like"><i class="far fa-heart"></i> </span> -->
                    </div>
                    <div class="blog-text">
                        <span class="blog-card-meta"> 07 january,2023 By Mary L. Gavin</span>
                        <h2 class="blog-card-title">Why Exercise Is Wise for teens</h2>
                        <a href="exerciseteens.html" class="blog-card-btn">Read More</a>
                    </div>
                </div>
                <!-- end item -->
                <!-- start item -->
                <div class="blog-item">
                    <div class="blog-image">
                        <img id="blogImage3" src="images/blogimage3.jpg" alt="physical activity">
                        <!-- <span class="blog-like"><i class="far fa-heart"></i> </span> -->
                    </div>
                    <div class="blog-text">
                        <span class="blog-card-meta"> 26 august,2023 By MayoClinic staff</span>
                        <h2 class="blog-card-title">Exercise: 7 benefits of regular physical activity</h2>
                        <a href="physicalactivity.html" class="blog-card-btn">Read More</a>
                    </div>
                </div>
                <!-- end item -->
                <!-- start item -->
                <div class="blog-item">
                    <div class="blog-image">
                        <img id="blogImage4" src="images/blogimage4.jpg" alt="stress manage">
                        <!-- <span class="blog-like"><i class="far fa-heart"></i> </span> -->
                    </div>
                    <div class="blog-text">
                        <span class="blog-card-meta"> 03 august,2022 By MayoClinic staff</span>
                        <h2 class="blog-card-title">Get moving to manage stress</h2>
                        <a href="stressmanage.html" class="blog-card-btn">Read More</a>
                    </div>
                </div>
                <!-- end item -->
                <!-- start item -->
                <div class="blog-item">
                    <div class="blog-image">
                        <img id="blogImage5" src="images/blogimage5.jpg" alt="regular exercise">
                        <!-- <span class="blog-like"><i class="far fa-heart"></i> </span> -->
                    </div>
                    <div class="blog-text">
                        <span class="blog-card-meta"> 04 january,2024 By Madeline Holcombe, CNN</span>
                        <h2 class="blog-card-title">Getting regular exercise in 2024 </h2>
                        <a href="regularexercise.html" class="blog-card-btn">Read More</a>
                    </div>
                </div>
                <!-- end item -->
                <!-- start item -->
                <div class="blog-item">
                    <div class="blog-image">

                        <img id="blogImage6" src="images/blogimage6.webp" alt="top nutrition">
                        <!-- <span class="blog-like"><i class="far fa-heart"></i> </span> -->
                    </div>
                    <div class="blog-text">
                        <span class="blog-card-meta"> 19 february,2024 By Sarah Davis</span>
                        <h2 class="blog-card-title">Top Nutrition And Fitness Trends In 2024</h2>
                        <a href="topnutrition.html" class="blog-card-btn">Read More</a>
                                  
                    </div>
                    <!-- end item -->
                </div>
            </div>
    </section>

    <!-- Footer -->
    <footer class="footer-container">
        <div class="newsletter">
            <h3>Join our Fitness Newsletter</h3>
            <form class="newsletter-form" action="#" method="post">
                @csrf
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

    <script src="{{ asset('js/blogjsscript.js') }}"></script>
    <script src="{{ asset('js/rollover.js') }}"></script>

</body>

</html>