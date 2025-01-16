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
    .container-register {
        display: flex;
        height: 100vh;
    }

    /* Left section for image */
    .left-section {
        flex: 1;
        background: url('/images/foto_untuk_tugas_Laravel_Register.png') no-repeat center center/cover;
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

    /* Right section for the register form */
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
</style>

<div class="container-register">
    <!-- Left Section -->
    <div class="left-section">
        <div class="content">
            <h1>Selamat Datang di Cemal-Cemil</h1>
            <p>Daftar sekarang untuk mulai menikmati berbagai cemilan dengan rasa terbaik!</p>
        </div>
    </div>

    <!-- Right Section -->
    <div class="right-section">
        <div class="card">
            <div class="card-header">Register</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="email">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    <button type="submit" class="btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
