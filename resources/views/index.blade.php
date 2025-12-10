@extends('layouts.app')

@section('title', 'SinBarTIK - Beranda')

@push('styles')
<style>
    :root {
        --sinbar-blue: #4A90E2;
        --sinbar-light-blue: #E3F2FD;
        --sinbar-dark-blue: #2171B5;
        --sinbar-black: #333333;
        --sinbar-gray: rgb(231, 231, 231);
        --sinbar-card: rgb(219, 237, 255);
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

    .dashboard-container {
        max-width: 1200px;
        margin: 50px auto;
        padding: 20px;
    }

    .main-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
    }

    .dashboard-title {
        text-align: center;
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 40px;
        letter-spacing: 1px;
    }

    .subject-card {
        background: rgb(219, 237, 255);
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 20px;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid transparent;
        height: 180px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .subject-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        border-color: #007bff;
    }

    .subject-icon {
        font-size: 3rem;
        color: #007bff;
        margin-bottom: 15px;
    }

    .subject-title {
        font-size: 1.1rem;
        font-weight: 450;
        color: #007bff;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .subject-card {
            height: 160px;
            padding: 15px;
        }
        
        .subject-icon {
            font-size: 2.5rem;
        }
        
        .subject-title {
            font-size: 1rem;
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
                <h1 class="hero-title">Selamat Datang di Website SinBarTIK</h1>
                <p class="hero-subtitle">Website untuk Mempelajari Informatika</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="d-flex justify-content-center">
                    <div style="width: fit-content;">
                        <img class="img-fluid" src="{{ asset('assets/content/maskot-materi.png') }}" alt="Maskot SinBar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Peringkat Section -->
@include('partials.peringkat')

<!-- Materi Section -->
<div class="dashboard-container">
    <div class="main-card">
        <h1 class="dashboard-title">MATERI SINBAR</h1>

        <div class="container-fluid">
            <div class="row">
                <!-- Berpikir Komputasi -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="subject-card">
                        <div class="text-center">
                            <div class="subject-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <h3 class="subject-title">Berpikir Komputasi</h3>
                        </div>
                    </div>
                </div>

                <!-- Teknologi Informasi dan Komunikasi -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="subject-card">
                        <div class="text-center">
                            <div class="subject-icon">
                                <i class="fas fa-signal"></i>
                            </div>
                            <h3 class="subject-title">Teknologi Informasi dan Komunikasi</h3>
                        </div>
                    </div>
                </div>

                <!-- Sistem Komputer -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="subject-card">
                        <div class="text-center">
                            <div class="subject-icon">
                                <i class="fas fa-desktop"></i>
                            </div>
                            <h3 class="subject-title">Sistem Komputer</h3>
                        </div>
                    </div>
                </div>

                <!-- Jaringan Komputer dan Internet -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="subject-card">
                        <div class="text-center">
                            <div class="subject-icon">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <h3 class="subject-title">Jaringan Komputer dan Internet</h3>
                        </div>
                    </div>
                </div>

                <!-- Algoritma Pemrograman -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="subject-card">
                        <div class="text-center">
                            <div class="subject-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <h3 class="subject-title">Algoritma Pemrograman dan Praktik Lintas Bidang</h3>
                        </div>
                    </div>
                </div>

                <!-- Analisis Data -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="subject-card">
                        <div class="text-center">
                            <div class="subject-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <h3 class="subject-title">Analisis Data dan Dampak Sosial Informatika</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
// Animasi masuk untuk kartu-kartu
window.addEventListener('load', function() {
    const cards = document.querySelectorAll('.subject-card');
    cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';

        setTimeout(() => {
            card.style.transition = 'all 0.5s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });
});
</script>
@endpush