@extends('layouts.app')

@section('title', 'SinBarTIK - Hubungi Kami')

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

    .contact-hero {
        background: linear-gradient(135deg, rgb(255, 255, 255) 100%);
        padding: 80px 0;
        min-height: 400px;
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

    .contact-page-container {
        max-width: 1200px;
        margin: 50px auto;
        padding: 20px;
    }

    .contact-main-card {
        background: white;
        border-radius: 15px;
        padding: 40px;
        margin-bottom: 30px;
    }

    .contact-section-title {
        text-align: center;
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 40px;
        letter-spacing: 1px;
    }

    .social-card {
        background: var(--sinbar-card);
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 20px;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid transparent;
        text-decoration: none;
        display: block;
        height: 100%;
    }

    .social-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        border-color: var(--sinbar-blue);
        text-decoration: none;
    }

    .social-icon {
        width: 70px;
        height: 70px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 2rem;
        transition: all 0.3s ease;
    }

    .social-card:hover .social-icon {
        transform: scale(1.1);
    }

    .icon-whatsapp { color: #25D366; }
    .icon-instagram { color: #E4405F; }
    .icon-youtube { color: #FF0000; }
    .icon-tiktok { color: #000000; }

    .social-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: var(--sinbar-dark-blue);
        margin-bottom: 10px;
        text-align: center;
    }

    .social-info {
        font-size: 1rem;
        color: var(--sinbar-black);
        text-align: center;
        margin-bottom: 0;
    }

    .location-map-container {
        background: white;
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 30px;
    }

    .map-wrapper {
        border-radius: 10px;
        overflow: hidden;
        height: 450px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .map-wrapper iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }

    .contact-info-card {
        background: var(--sinbar-light-blue);
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 20px;
    }

    .contact-detail-item {
        display: flex;
        align-items: start;
        margin-bottom: 15px;
    }

    .contact-detail-item:last-child {
        margin-bottom: 0;
    }

    .contact-detail-icon {
        width: 40px;
        height: 40px;
        background: var(--sinbar-blue);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
    }

    .contact-detail-text h4 {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--sinbar-dark-blue);
        margin-bottom: 5px;
    }

    .contact-detail-text p {
        font-size: 0.95rem;
        color: var(--sinbar-black);
        margin-bottom: 0;
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            font-size: 1.8rem;
        }
        
        .social-icon {
            width: 60px;
            height: 60px;
            font-size: 1.8rem;
        }
        
        .social-title {
            font-size: 1.1rem;
        }
        
        .map-wrapper {
            height: 300px;
        }
        
        .contact-main-card {
            padding: 25px;
        }
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<div class="contact-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <h1 class="hero-title">Hubungi Kami</h1>
                <p class="hero-subtitle">Terhubung dengan SinBarTIK</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="d-flex justify-content-center">
                    <div style="width: fit-content;">
                        <img class="img-fluid" 
     src="{{ asset('assets/content/maskot-kontak.png') }}" 
     alt="Maskot SinBar"
     style="width:390px; height:auto;">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="contact-page-container">
    <!-- Social Media Cards -->
    <div class="contact-main-card">
        <h2 class="contact-section-title">MEDIA SOSIAL KAMI</h2>
        
        <div class="container-fluid">
            <div class="row">
                <!-- WhatsApp -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="https://wa.me/6281234567890" target="_blank" class="social-card">
                        <div class="social-icon icon-whatsapp">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h3 class="social-title">WhatsApp</h3>
                        <p class="social-info">+62 812-3456-7890</p>
                    </a>
                </div>

                <!-- Instagram -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="https://instagram.com/sinbartik_official" target="_blank" class="social-card">
                        <div class="social-icon icon-instagram">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <h3 class="social-title">Instagram</h3>
                        <p class="social-info">@sinbartik_official</p>
                    </a>
                </div>

                <!-- YouTube -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="https://youtube.com/@SinBarTIK" target="_blank" class="social-card">
                        <div class="social-icon icon-youtube">
                            <i class="fab fa-youtube"></i>
                        </div>
                        <h3 class="social-title">YouTube</h3>
                        <p class="social-info">SinBarTIK Channel</p>
                    </a>
                </div>

                <!-- TikTok -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="https://tiktok.com/@sinbartik" target="_blank" class="social-card">
                        <div class="social-icon icon-tiktok">
                            <i class="fab fa-tiktok"></i>
                        </div>
                        <h3 class="social-title">TikTok</h3>
                        <p class="social-info">@sinbartik</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Information -->
    <div class="contact-main-card">
        <h2 class="contact-section-title">INFORMASI KONTAK</h2>
        
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info-card">
                    <div class="contact-detail-item">
                        <div class="contact-detail-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-detail-text">
                            <h4>Alamat</h4>
                            <p>SMK Negeri 4 Malang<br>Jl. Tanimbar No. 22, Kasin<br>Kec. Klojen, Kota Malang<br>Jawa Timur 65117</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="contact-info-card">
                    <div class="contact-detail-item">
                        <div class="contact-detail-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-detail-text">
                            <h4>Email</h4>
                            <p>sinbartik@smkn4malang.sch.id</p>
                        </div>
                    </div>
                    
                    <div class="contact-detail-item mt-4">
                        <div class="contact-detail-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-detail-text">
                            <h4>Jam Operasional</h4>
                            <p>Senin - Jumat: 07.00 - 16.00 WIB<br>Sabtu: 07.00 - 13.00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="location-map-container">
        <h2 class="contact-section-title">LOKASI KAMI</h2>
        
        <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27369.51960199668!2d112.59123802185059!3d-7.989792579283028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281b75ea5485%3A0x90fd5c6fcedf6acf!2sSekolah%20Menengah%20Kejuruan%20Negeri%204%20Malang!5e1!3m2!1sen!2sid!4v1765372107528!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
// Animasi masuk untuk kartu-kartu
window.addEventListener('load', function() {
    const socialCards = document.querySelectorAll('.social-card');
    socialCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';

        setTimeout(() => {
            card.style.transition = 'all 0.5s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });

    // Animasi untuk info cards
    const infoCards = document.querySelectorAll('.contact-info-card');
    infoCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateX(-20px)';

        setTimeout(() => {
            card.style.transition = 'all 0.5s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateX(0)';
        }, 400 + (index * 100));
    });
});
</script>
@endpush