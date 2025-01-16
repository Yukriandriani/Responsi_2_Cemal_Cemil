@extends('themes.cemal-cemil.layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cemal-Cemil - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
@section('content')
    <section class="hero-section position-relative">
        <img src="{{ asset('images/foto_untuk_tugas_Laravel_Login.png') }}" class="img-fluid w-100" alt="Welcome Image" style="height: 400px; object-fit: cover;">
        <div class="hero-overlay position-absolute top-50 start-50 translate-middle text-black text-center">
            <h1 class="display-4 fw-bold">selamat datang di cemal cemil</h1>
            <p class="lead">kami menyediakan berbagai makanan dari manis dan asin.</p>
            <a href="#" class="btn btn-warning btn-lg mt-3">lihat menu kita</a>
            <a href="/shop" class="btn btn-primary btn-lg mt-3">Shop Now</a>
        </div>
    </section>
@endsection

    <!-- Features Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Kenapa memilih Cemal-Cemil?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm">
                        <h5 class="fw-bold">bahannya segar</h5>
                        <p class="text-muted">bahan kami fresh.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm">
                        <h5 class="fw-bold">banyak rasa</h5>
                        <p class="text-muted">dari manis, asin gurih dan lainnya.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm">
                        <h5 class="fw-bold">prosesnya cepat</h5>
                        <p class="text-muted">tidak perlu menunggu lama.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
