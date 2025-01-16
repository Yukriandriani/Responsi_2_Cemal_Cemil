@extends('layouts.app')

@section('content')
<style>
    /* Reset default styles */
    body, html {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        height: 100%;
    }

    /* Full-screen container */
    .container-login {
        display: flex;
        height: 100vh;
    }

    /* Left section for image */
    .left-section {
        flex: 1;
        background: url('/images/foto_untuk_tugas_Laravel_Login.png') no-repeat center center/cover;
        position: relative;
    }

    .left-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
        z-index: 1;
    }

    .left-section .content {
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
        color: #fff;
        text-align: center;
        padding: 20px;
    }

    .left-section h1 {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }

    .left-section p {
        font-size: 1rem;
        max-width: 80%;
    }

    /* Right section for the login form */
    .right-section {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fff;
    }

    /* Card styling */
    .card {
        width: 400px;
        padding: 20px 30px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 15px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .card-header {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 20px;
        color: #FF6347;
    }

    label {
        display: block;
        text-align: left;
        font-size: 0.9rem;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: #fff;
        font-size: 0.9rem;
    }

    .form-check {
        display: flex;
        align-items: center;
        font-size: 0.8rem;
    }

    .form-check-input {
        margin-right: 10px;
    }

    .btn-primary {
        width: 100%;
        padding: 10px;
        background: #FF6347;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn-primary:hover {
        background: #FF4500;
    }

    .btn-link {
        font-size: 0.8rem;
        color: #FF6347;
        text-decoration: none;
    }

    .btn-link:hover {
        text-decoration: underline;
    }
</style>

<div class="container-login">
    <!-- Left Section -->
    <div class="left-section">
        <div class="content">
            <h1>Selamat Datang di Cemal-Cemil</h1>
            <p>menghadirkan cemilan dengan rasa yang enak,kualitas produk terjamin dan terpenting higenis.</p>
        </div>
    </div>

    <!-- Right Section -->
    <div class="right-section">
        <div class="card">
            <div class="card-header">Login</div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <label for="email">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>

                    <button type="submit" class="btn-primary">Login</button>

                    @if (Route::has('password.request'))
                        <a class="btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
