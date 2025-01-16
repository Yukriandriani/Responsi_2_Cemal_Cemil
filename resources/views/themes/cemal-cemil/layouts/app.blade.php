<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <title>Cemal-Cemil: Official Site</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'],'resource/css/themes/main.css')
    </head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top py-4 shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Cemal<span class="text-primary">Cemil</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="badge text-bg-warning rounded-circle position-absolute">2</span>
                            <i class="bx bx-cart"></i>
                        </a>
                    </li>
                </ul>
                <form class="d-flex ms-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Mau cari apa?" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5 pt-5">
        @yield('content')
    </div>

    <!-- Best Seller Section -->
    <section class="py-5 mt-5">
        <h2 class="fw-bold text-center mb-4">Best Seller</h2>
        <div class="container">
            <div class="row g-4">
                <!-- Best Seller Item 1 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                    <img src="{{ asset('images/tahu_walik_bestseller.jpg') }}" class="card-img-top" alt="Tahu Walik">
                        <div class="card-body">
                            <h5 class="card-title">Tahu Walik</h5>
                            <p class="card-text">Renyah, Gurih, Istimewa.</p>
                            <p class="fw-bold">10.000</p>
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <!-- Best Seller Item 2 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                    <img src="{{ asset('images/kentang-goreng_bestseller.jpg') }}" class="card-img-top" alt="Kentang">
                        <div class="card-body">
                            <h5 class="card-title">Kentang Goreng</h5>
                            <p class="card-text">Golden, Crispy, Memuaskan.</p>
                            <p class="fw-bold">11.000</p>
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <!-- Best Seller Item 3 -->
                <div class="col-md-4">
                            <div class="card shadow-sm">
                            <img src="{{ asset('images/donat-bestseller.jpg') }}" class="card-img-top" alt="Donut">
                            <div class="card-body">
                            <h5 class="card-title">Donat</h5>
                            <p class="card-text">lembut,Empuk, Manis.</p>
                            <p class="fw-bold">8.000</p>
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light text-center py-4">
        <p>&copy; 2025 Cemal-Cemil. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
