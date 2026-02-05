<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher extends Component
{
    public $currentLocale;

    public function mount()
    {
        $this->currentLocale = App::getLocale();
    }

    public function switchLocale($locale)
    {
        if (in_array($locale, ['en', 'fa'])) {
            Session::put('locale', $locale);
            App::setLocale($locale);
            $this->currentLocale = $locale;
            
            return $this->redirect(request()->header('Referer'), navigate: true); 
        }
    }

    public function render()
    {
        return view('livewire.language-switcher');
    }
}