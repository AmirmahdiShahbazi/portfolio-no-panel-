<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
      dir="{{ app()->getLocale() == 'fa' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Amir Shahbazi | Backend Developer' }}</title>
    
    <!-- CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Outfit:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/custom.css'])
    <style>
        /* 1. RESTORE ORIGINAL LOOK (Thin, Uppercase, Spaced) */
        .navbar-nav .nav-link {
            color: rgba(216, 216, 216, 0.9) !important; /* Slightly softer white */
            font-size: 0.85rem !important;               /* Original small size */
            font-weight: 400 !important;                 /* Normal/Thin weight (not bold) */
            text-transform: uppercase;                   /* Original uppercase style */
            letter-spacing: 1px;                         /* Original spacing */
        }

        /* Hover Effect from your custom.css */
        .navbar-nav .nav-link:hover {
            color: var(--neon-red, #ff003c) !important;
        }

        /* 2. KEEP THE TECHNICAL FIX (Resolves Tailwind Conflict) */
        .navbar-collapse.collapse {
            visibility: visible !important; 
        }

        /* 3. ENSURE LAYOUT WORKS ON DESKTOP */
        @media (min-width: 768px) {
            .navbar-expand-md .navbar-collapse {
                display: flex !important;
                flex-basis: auto;
            }
        }
    </style>
</head>
<body>

    <canvas id="bg-canvas" wire:ignore></canvas>

    <!-- Navigation -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top"> 
        <div class="container">
            <a class="navbar-brand" href="#">AS<span style="color:var(--neon-red, #ff003c);">_</span>TECH</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain"> 
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">
                            {{ \App\Models\Setting::getValue('nav_about', app()->getLocale()) ?? 'About' }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">
                            {{ \App\Models\Setting::getValue('nav_skills', app()->getLocale()) ?? 'Skills' }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">
                            {{ \App\Models\Setting::getValue('nav_experience', app()->getLocale()) ?? 'Experience' }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactMe">
                            {{ \App\Models\Setting::getValue('nav_contact', app()->getLocale()) ?? 'Contact Me' }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <!-- Replace the current footer in app.blade.php with this -->
    <footer class="py-5" style="border-top: 1px solid rgba(255,0,60,0.2); background: rgba(0,0,0,0.5);">
        <div class="container">
            <div class="row align-items-center">
                <!-- System Status -->
                <div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
                    <p class="small text-dim mb-0">
                        &copy; {{ date('Y') }} AMIR SHAHBAZI
                    </p>
                </div>

                <!-- Static Contact Info -->
                <div class="col-md-8 text-center text-md-end">
                    <div class="d-flex flex-column flex-md-row justify-content-md-end gap-3 gap-md-5">
                        <a href="mailto:amirmahdishahbazi1382@gmail.com" class="text-decoration-none text-dim hov-neon">
                            <i class="fas fa-envelope me-2" style="color: var(--neon-red);"></i> amirmahdishahbazi1382@gmail.com
                        </a>
                        <a href="tel:+989913067090" class="text-decoration-none text-dim hov-neon">
                            <i class="fas fa-phone me-2" style="color: var(--neon-red);"></i> +98 991 306 7090
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>