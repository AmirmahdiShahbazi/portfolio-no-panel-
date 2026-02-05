<div class="dropdown">
    <button class="btn-neon dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 5px 15px; font-size: 0.8rem;">
        <i class="fas fa-globe me-2"></i> {{ strtoupper($currentLocale) }}
    </button>
    <ul class="dropdown-menu dropdown-menu-dark" style="background: rgba(10, 10, 10, 0.95); border: 1px solid var(--neon-red);">
        <li>
            <a class="dropdown-item" href="#" wire:click.prevent="switchLocale('en')" style="color: #fff;">
                🇺🇸 English
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="#" wire:click.prevent="switchLocale('fa')" style="color: #fff;">
                🇮🇷 Farsi
            </a>
        </li>
    </ul>
</div>