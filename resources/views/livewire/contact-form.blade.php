<div class="about-card">
    @if($successMessage)
        <div class="alert alert-success mb-4" style="background: rgba(0, 255, 60, 0.1); border: 1px solid #00ff3c; color: #00ff3c;">
            <i class="fas fa-check-circle me-2"></i> {{ $successMessage }}
        </div>
    @endif

    <form wire:submit="submit">
        <div class="mb-3">
            <label class="form-label text-uppercase" style="letter-spacing: 2px; font-size: 0.8rem;">
                {{ $text['contact_name_label'] ?? 'Full Name' }}
            </label>
            <input type="text" wire:model="name" class="form-control" 
                   style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 12px;">
            @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label text-uppercase" style="letter-spacing: 2px; font-size: 0.8rem;">
                {{ $text['contact_email_label'] ?? 'Email Address' }}
            </label>
            <input type="email" wire:model="email" class="form-control" 
                   style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 12px;">
            @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="form-label text-uppercase" style="letter-spacing: 2px; font-size: 0.8rem;">
                {{ $text['contact_msg_label'] ?? 'Your Message' }}
            </label>
            <textarea wire:model="message" class="form-control" rows="5"
                      style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: white; padding: 12px;"></textarea>
            @error('message') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn-neon w-100">
            <span wire:loading.remove>{{ $text['contact_btn_label'] ?? 'Send Message' }}</span>
            <span wire:loading>{{ $text['contact_loading_label'] ?? 'Sending...' }}</span>
        </button>
    </form>
</div>