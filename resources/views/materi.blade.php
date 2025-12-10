@extends('layouts.app')

@section('title', 'SinBarTIK - Materi')

@push('styles')
<style>
    :root {
        --sinbar-blue: #4A90E2;
        --sinbar-light-blue: #E3F2FD;
        --sinbar-dark-blue: #2171B5;
        --sinbar-black: #333333;
    }

    .home-hero {
        background: linear-gradient(135deg, rgb(255, 255, 255) 100%);
        padding: 80px 0;
        min-height: 500px;
        display: flex;
        align-items: center;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 500;
        color: var(--sinbar-blue);
        margin-bottom: 20px;
        line-height: 1.2;
        padding-left: 20px;
    }

    .hero-subtitle {
        font-size: 1.2rem;
        color: var(--sinbar-black);
        background-color: var(--sinbar-light-blue);
        padding: 12px 24px;
        border-radius: 25px;
        display: inline-block;
        margin-bottom: 30px;
    }

    .container-custom {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
        margin-bottom: 50px;
    }

    .custom-card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        height: 100%;
    }

    .custom-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    .brain-icon {
        width: 40px;
        height: 40px;
        background-color: #4a90e2;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
    }

    .brain-icon svg {
        width: 24px;
        height: 24px;
        fill: white;
    }

    .custom-btn {
        background-color: #4a90e2;
        border: none;
        border-radius: 8px;
        color: white;
        padding: 8px 20px;
        font-size: 14px;
        font-weight: 500;
        transition: background-color 0.2s ease;
    }

    .custom-btn:hover {
        background-color: #357abd;
        color: white;
    }

    .card-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 0.75rem;
    }

    .card-text {
        color: #6c757d;
        font-size: 0.9rem;
        line-height: 1.5;
    }

    /* Banner Styles */
    .banner-container {
        background: linear-gradient(135deg, #4a90e2 0%, #2c5aa0 100%);
        min-height: 400px;
        border-radius: 15px;
        overflow: hidden;
        position: relative;
        margin-bottom: 50px;
    }

    .banner-content {
        padding: 60px 0;
        position: relative;
        z-index: 2;
        margin-top: 10px;
    }

    .book-container {
        position: relative;
        width: 100%;
        max-width: 200px;
        margin: 0 auto;
        text-align: center;
    }

    .book-image {
        width: 100%;
        height: auto;
        max-height: 180px;
        object-fit: contain;
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.2));
    }

    .main-text {
        color: white;
        font-weight: bold;
        font-size: 1.8rem;
        margin-bottom: 1rem;
    }

    .sub-text {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
    }

    .btn-custom {
        background: rgba(255, 255, 255, 0.2);
        border: 2px solid rgba(255, 255, 255, 0.3);
        color: white;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .btn-custom:hover {
        background: rgba(255, 255, 255, 0.3);
        border-color: rgba(255, 255, 255, 0.5);
        color: white;
        transform: translateY(-2px);
    }

    .decorative-circles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        animation: float 6s ease-in-out infinite;
    }

    .circle-1 {
        width: 100px;
        height: 100px;
        top: 10%;
        left: 5%;
        animation-delay: 0s;
    }

    .circle-2 {
        width: 150px;
        height: 150px;
        top: 60%;
        right: 10%;
        animation-delay: 2s;
    }

    .circle-3 {
        width: 80px;
        height: 80px;
        top: 80%;
        left: 20%;
        animation-delay: 4s;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .banner-content {
            padding: 40px 0;
        }

        .main-text {
            font-size: 1.5rem;
        }
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<div class="home-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <h1 class="hero-title">Materi Materi Teknik Informatika</h1>
                <p class="hero-subtitle">Mari Menjadi Anak yang Selalu Berpikir Kritis</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="d-flex justify-content-center">
                    <div style="width: fit-content;">
                        <img class="img-fluid" src="{{ asset('assets/content/maskot-materi.png') }}" alt="Maskot Materi">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Materi Cards -->
<div class="container-custom">
    <div class="row g-4">
        @for($i = 0; $i < 6; $i++)
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card custom-card">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="brain-icon">
                            <svg viewBox="0 0 24 24">
                                <path d="M12,2A3,3 0 0,1 15,5V11A3,3 0 0,1 12,14A3,3 0 0,1 9,11V5A3,3 0 0,1 12,2M19,11C19,11.5 18.9,12 18.7,12.4L21.8,15.5C22.3,16 22.3,16.7 21.8,17.2L17.2,21.8C16.7,22.3 16,22.3 15.5,21.8L12.4,18.7C12,18.9 11.5,19 11,19H5A3,3 0 0,1 2,16V8A3,3 0 0,1 5,5H11C11.5,5 12,5.1 12.4,5.3L15.5,2.2C16,1.7 16.7,1.7 17.2,2.2L21.8,6.8C22.3,7.3 22.3,8 21.8,8.5L18.7,11.6C18.9,11 19,10.5 19,11Z" />
                            </svg>
                        </div>
                        <button class="btn btn-primary custom-btn">Selengkapnya</button>
                    </div>
                    <h5 class="card-title">Berpikir Komputasi</h5>
                    <p class="card-text">
                        Berpikir komputasional adalah sebuah proses pemikiran yang digunakan untuk menyelesaikan masalah, baik dengan atau tanpa menggunakan komputer.
                    </p>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

<!-- Banner Tugas -->
<div class="container-fluid py-4">
    <div class="banner-container">
        <div class="decorative-circles">
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
        </div>

        <div class="banner-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-12 mb-4 mb-md-0">
                        <div class="book-container">
                            <img src="{{ asset('assets/content/buku.png') }}" alt="Tumpukan Buku" class="book-image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-4 col-sm-12 text-center mb-4 mb-md-0">
                        <div class="main-text">Sudah Membaca Materi?</div>
                        <div class="sub-text">Jika Sudah, Ayo Kumpulkan</div>
                        <div class="sub-text mb-4">Tugas-Tugas Teknik Informatika</div>
                        <button class="btn btn-danger btn-custom">Kumpulkan Tugas</button>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="text-center">
                            <img src="{{ asset('assets/content/maskot-materi.png') }}" 
                                 alt="Maskot" 
                                 style="width: 70%; height: auto;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection