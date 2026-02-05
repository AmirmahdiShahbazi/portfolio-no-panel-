<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Setting;
use Illuminate\Support\Facades\App;

class Home extends Component
{
    public function render()
    {
        $lang = App::getLocale();

        $settings = Setting::where('lang', $lang)->pluck('value', 'key')->toArray();

        return view('livewire.home', [
            'text'        => $settings, // We pass this array to the view
            'skills'      => Skill::language($lang)->get(),
            'experiences' => Experience::language($lang)->ordered()->get(),
            'lang'        => $lang
        ]);
    }
}