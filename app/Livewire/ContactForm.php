<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactMessage;
use App\Models\Setting;
use Illuminate\Support\Facades\App;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public $successMessage = '';

    protected $rules = [
        'name'    => 'required|min:2',
        'email'   => 'required|email',
        'message' => 'required|min:5',
    ];

    public function submit()
    {
        $this->validate();

        ContactMessage::create([
            'name'    => $this->name,
            'email'   => $this->email,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'email', 'message']);
        
        // You could also make this success message dynamic from DB if you want
        $this->successMessage = Setting::getValue('contact_success_msg', App::getLocale()) 
            ?? "Transmission Received.";
    }

    public function render()
    {
        $lang = App::getLocale();
        // Fetch specific contact form settings
        $settings = Setting::where('lang', $lang)
                           ->where('key', 'like', 'contact_%')
                           ->pluck('value', 'key')
                           ->toArray();

        return view('livewire.contact-form', [
            'text' => $settings
        ]);
    }
}