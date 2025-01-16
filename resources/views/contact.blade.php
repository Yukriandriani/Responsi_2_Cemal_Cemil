@extends('themes.cemal-cemil.layouts.app')

@section('content')
<div id="contact-page" class="container mt-5 pt-4 text-center">
    <h1>Contact Cemal-Cemil</h1>
    <p>Hubungi kami melalui kontak berikut:</p>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="list-group">
                <!-- Instagram -->
                <a href="cemal cemil" class="list-group-item list-group-item-action" target="_blank">
                    <i class="fab fa-instagram text-danger"></i> Instagram: @cemalcemil
                </a>

                <!-- WhatsApp -->
                <a href="https://wa.me/08123456789" class="list-group-item list-group-item-action" target="_blank">
                    <i class="fab fa-whatsapp text-success"></i> WhatsApp: +62 812-3456-7890
                </a>

                <!-- TikTok -->
                <a href="https://www.tiktok/cemalcemill" class="list-group-item list-group-item-action" target="_blank">
                    <i class="fab fa-tiktok text-dark"></i> TikTok: @cemalcemil
                </a>

                <!-- Email -->
                <a href="mailto:info@cemalcemil.com" class="list-group-item list-group-item-action">
                    <i class="fas fa-envelope text-primary"></i> Email: info@cemalcemil.com
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Pastikan Anda Memuat FontAwesome untuk Ikon -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@endsection
