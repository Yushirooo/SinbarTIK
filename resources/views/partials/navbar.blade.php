<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <!-- Brand/Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <div class="logo-icon">
                <img src="{{ asset('assets/icons/logo.svg') }}" alt="SinBar Logo">
            </div>
            <span>SinBarTIK</span>
        </a>

        <!-- Mobile Menu Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ph ph-list"></i>
        </button>

        <!-- Navbar Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" 
                       href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('materi') ? 'active' : '' }}" 
                       href="{{ route('materi') }}">MATERI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('peringkat') ? 'active' : '' }}" 
                       href="{{ route('peringkat') }}">PERINGKAT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('kontak') ? 'active' : '' }}" 
                       href="{{ route('kontak') }}">KONTAK</a>
                </li>
            </ul>

            <!-- Account Buttons -->
            <div class="account-buttons d-lg-flex">
                <a href="#" class="btn-register">GABUNG</a>
                <a href="#" class="btn-login">MASUK</a>
            </div>
        </div>
    </div>
</nav>

@push('scripts')
<script>
// Close mobile menu when clicking on nav links
document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    link.addEventListener('click', () => {
        const navbarCollapse = document.querySelector('.navbar-collapse');
        const navbarToggler = document.querySelector('.navbar-toggler');
        
        if (navbarCollapse.classList.contains('show') && window.innerWidth < 992) {
            navbarToggler.click();
        }
    });
});
</script>
@endpush