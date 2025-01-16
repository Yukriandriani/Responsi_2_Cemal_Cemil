<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tambahkan link CSS dari template -->
    <link rel="stylesheet" href="{{ asset('admin-lte/css/admin.css') }}">
    <!-- Tambahkan script JS dari template -->
    <script src="{{ asset('admin-lte/js/admin.js') }}" defer></script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('admin.partials.sidebar')

        <!-- Navbar -->
        @include('admin.partials.navbar')

        <!-- Main Content -->
        <div class="content-wrapper">
            <div class="content">
                @yield('content') <!-- Tempat konten berubah -->
            </div>
        </div>

        <!-- Footer -->
        @include('admin.partials.footer')
    </div>
</body>
</html>
