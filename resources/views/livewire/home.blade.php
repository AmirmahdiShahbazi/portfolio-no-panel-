<div>
    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container">
            <p class="text-uppercase mb-2" style="color: var(--neon-red); letter-spacing: 5px;">
                {{ $text['hero_subtitle'] ?? 'Backend Developer' }}
            </p>
            <h1 class="hero-title">AMIR SHAHBAZI</h1><br>
            <h1 class="hero-title" style="color: rgba(255,255,255,0.05); -webkit-text-stroke: 1px rgba(255,255,255,0.2);">
                {{ $text['hero_title'] ?? 'Laravel Specialist' }}
            </h1>
            <div class="mt-5">
                <a href="#experience" class="btn-neon">
                    {{ $text['hero_btn'] ?? 'View My Work' }}
                </a>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <h2 class="section-title">{{ $text['about_section_title'] ?? '01. About Me' }}</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about-card">
                        <p class="lead" style="color: var(--neon-red);">
                            {{ $text['about_status'] ?? 'System Status: Online.' }}
                        </p>
                        <p class="text-dim">
                            {!! nl2br(e($text['bio'] ?? '')) !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 text-center">
                    <div class="profile-pic-container">
                        <img src="{{ asset('assets/images/pfp.jpg') }}" alt="Profile" class="profile-pic">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section-padding">
        <div class="container">
            <h2 class="section-title">{{ $text['skills_section_title'] ?? '02. Core Skills' }}</h2>
            <div class="skills-grid">
                @foreach($skills as $skill)
                    <div class="skill-item">
                        <i class="{{ $skill->icon_class }}"></i>
                        <span>{{ $skill->name }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="section-padding">
        <div class="container">
            <h2 class="section-title">{{ $text['exp_section_title'] ?? '03. Work History' }}</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    @foreach($experiences as $job)
                        <div class="experience-card">
                            <span class="exp-date">
                                {{ $job->start_date->format('M Y') }} - 
                                {{ $job->is_current ? ($text['present_label'] ?? 'PRESENT') : $job->end_date->format('M Y') }}
                            </span>
                            <h3 class="exp-role">{{ $job->role }}</h3>
                            <span class="exp-company">{{ $job->company }}</span>
                            <div class="text-dim mt-3">
                                {{ $job->description }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contactMe" class="section-padding">
        <div class="container">
            <h2 class="section-title">{{ $text['contact_section_title'] ?? '04. Contact Me' }}</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Loading the Contact Form Component -->
                    <livewire:contact-form />
                </div>
            </div>
        </div>
    </section>
</div>