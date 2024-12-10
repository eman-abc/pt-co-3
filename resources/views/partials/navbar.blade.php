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
                    <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ url('yoga') }}">Yoga</a></li>
                        <li><a class="dropdown-item" href="{{ url('bootcamp') }}">Bootcamp</a></li>
                        <li><a class="dropdown-item" href="{{ url('sports-training') }}">Sports</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>