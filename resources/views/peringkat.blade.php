@extends('layouts.app')

@section('title', 'SinBarTIK - Peringkat')

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

    .peringkat-section {
        padding: 80px 0;
        background: white;
    }

    .peringkat-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--sinbar-black);
        text-align: center;
        margin-bottom: 50px;
        letter-spacing: 2px;
    }

    .peringkat-container {
        border-radius: 20px;
        padding: 40px;
        position: relative;
        overflow: hidden;
    }

    .podium-container {
        display: flex;
        justify-content: center;
        align-items: flex-end;
        margin-bottom: 40px;
        height: 250px;
        gap: 10px;
    }

    .podium-step {
        min-width: 100px;
        max-width: 150px;
        flex: 1;
        background: var(--sinbar-blue);
        border-radius: 10px 10px 0 0;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 16px;
        box-shadow: 0 10px 30px rgba(12, 38, 68, 0.3);
        text-align: center;
        padding: 10px 5px;
        word-wrap: break-word;
        hyphens: auto;
    }

    .podium-step.second {
        height: 140px;
    }

    .podium-step.first {
        height: 180px;
        background: #FFD700;
        color: #333;
    }

    .podium-step.third {
        height: 100px;
    }

    .podium-step::before {
        content: '';
        position: absolute;
        top: -25px;
        left: 50%;
        transform: translateX(-50%);
        width: 35px;
        height: 35px;
        background: var(--sinbar-blue);
        border-radius: 50%;
        border: 3px solid white;
    }

    .podium-step.first::before {
        background: #FFD700;
    }

    .podium-step::after {
        position: absolute;
        top: -18px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 14px;
        font-weight: bold;
        color: white;
    }

    .podium-step.first::after {
        content: '1';
        color: #333;
    }

    .podium-step.second::after {
        content: '2';
    }

    .podium-step.third::after {
        content: '3';
    }

    .peringkat-info {
        text-align: center;
    }

    .peringkat-subtitle {
        font-size: 1.1rem;
        color: var(--sinbar-black);
        margin-bottom: 20px;
        font-weight: 600;
    }

    .table-container {
        background-color: #e3f2fd;
        border-radius: 8px;
        margin: 20px auto;
        max-width: 1100px;
        margin-top: -45px;
    }

    .table thead th {
        background-color: #e3f2fd;
        color: #333;
        font-weight: 600;
        border: none;
        padding: 15px 12px;
    }

    .table tbody td {
        background-color: #ffffff;
        border: none;
        padding: 15px 12px;
        vertical-align: middle;
    }

    .table tbody tr {
        border-bottom: none;
    }

    .table th:first-child,
    .table td:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .table th:last-child,
    .table td:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    .table-responsive {
        border-radius: 8px;
        overflow: hidden;
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

        .peringkat-title {
            font-size: 2rem;
        }

        .podium-container {
            height: 200px;
            gap: 5px;
        }

        .podium-step {
            min-width: 80px;
            max-width: 120px;
            font-size: 14px;
        }

        .table-container {
            padding: 10px;
            margin: 10px;
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
                <h1 class="hero-title">Peringkat Murid SinBarTIK</h1>
                <p class="hero-subtitle">Peringkat SinBar berdasarkan Skor Sinbar</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="d-flex justify-content-center">
                    <div style="width: fit-content;">
                        <img class="img-fluid" src="{{ asset('assets/content/maskot-peringkat.png') }}" alt="Maskot Peringkat">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Peringkat Podium -->
<div class="peringkat-section">
    <h2 class="peringkat-title">PERINGKAT SINBAR</h2>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="peringkat-container">
                <div class="podium-container">
                    <div class="podium-step second">Muhammad Rafli Al-Farisi</div>
                    <div class="podium-step first">Izan</div>
                    <div class="podium-step third">Cipunkkkk Apalah</div>
                </div>
                <div class="peringkat-info">
                    <p class="peringkat-subtitle">PERINGKAT SINBAR SEMESTER INI BERDASARKAN TOTAL SKOR</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tabel Peringkat -->
<div class="container-fluid">
    <div class="table-container">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" style="width: 5%;">No</th>
                        <th scope="col" style="width: 40%;">Nama</th>
                        <th scope="col" style="width: 20%;">Kelas</th>
                        <th scope="col" style="width: 17.5%;">Rata-Rata Skor</th>
                        <th scope="col" style="width: 17.5%;">Total Skor</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $students = [
                        ['Adinda Ryka Mayandra', 91.5, 549],
                        ['Ainiya Naufalia Riskyani', 91.2, 547],
                        ['Aji Surya Putra Utama', 90.8, 545],
                        ['Alfa Dimas Sastranegara', 90.5, 543],
                        ['Aqela Fakhrunnisa', 90.2, 541],
                        ['Auni Hamizan', 89.8, 539],
                        ['Ayu Nur Hamida', 89.5, 537],
                        ['Bima Satriyo Wicaksono', 89.2, 535],
                        ['Denniysa Adelita Nurlaka', 88.5, 531],
                        ['Dzulqarnain Zaliananda Amansyah', 88.2, 529]
                    ];
                    @endphp

                    @foreach($students as $index => $student)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $student[0] }}</td>
                        <td>X RPL B</td>
                        <td>{{ $student[1] }}</td>
                        <td>{{ $student[2] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
                        <div class="text-center">
                            <img src="{{ asset('assets/content/buku.png') }}" 
                                 alt="Tumpukan Buku" 
                                 style="max-width: 200px; width: 100%; filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.2));">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-4 col-sm-12 text-center mb-4 mb-md-0">
                        <div class="main-text">Sudah Membaca Peringkat?</div>
                        <div class="sub-text">Jika Sudah, Ayo Kumpulkan</div>
                        <div class="sub-text mb-4">Tugas-Tugas Teknik Informatika</div>
                        <button class="btn btn-danger btn-custom">Kumpulkan Tugas</button>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="text-center">
                            <img src="{{ asset('assets/content/maskot-peringkat.png') }}" 
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