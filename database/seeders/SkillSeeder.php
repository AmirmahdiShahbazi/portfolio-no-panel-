<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('skills')->truncate();

        $skills = [
            // Backend & Frameworks
            ['name' => 'PHP', 'icon' => 'fab fa-php', 'level' => 95, 'cat_en' => 'Backend', 'cat_fa' => 'بک‌اند'],
            ['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'level' => 95, 'cat_en' => 'Framework', 'cat_fa' => 'فریم‌ورک'],
            ['name' => 'Livewire', 'icon' => 'fas fa-bolt', 'level' => 90, 'cat_en' => 'Framework', 'cat_fa' => 'فریم‌ورک'],
            
            // Databases & Caching
            ['name' => 'MySQL', 'icon' => 'fas fa-database', 'level' => 90, 'cat_en' => 'Database', 'cat_fa' => 'پایگاه داده'],
            ['name' => 'PostgreSQL', 'icon' => 'fas fa-database', 'level' => 85, 'cat_en' => 'Database', 'cat_fa' => 'پایگاه داده'],
            ['name' => 'Redis', 'icon' => 'fas fa-layer-group', 'level' => 80, 'cat_en' => 'Caching', 'cat_fa' => 'ذخیره‌سازی'],

            // DevOps & Tools
            ['name' => 'Docker', 'icon' => 'fab fa-docker', 'level' => 85, 'cat_en' => 'DevOps', 'cat_fa' => 'دواپس'],
            ['name' => 'Linux', 'icon' => 'fab fa-linux', 'level' => 80, 'cat_en' => 'OS', 'cat_fa' => 'سیستم عامل'],
            ['name' => 'Nginx', 'icon' => 'fas fa-server', 'level' => 75, 'cat_en' => 'Web Server', 'cat_fa' => 'وب سرور'],

            // Frontend
            ['name' => 'Vue.js', 'icon' => 'fab fa-vuejs', 'level' => 80, 'cat_en' => 'Frontend', 'cat_fa' => 'فرانت‌اند'],
            ['name' => 'jQuery', 'icon' => 'fas fa-code', 'level' => 90, 'cat_en' => 'Frontend', 'cat_fa' => 'فرانت‌اند'],
            ['name' => 'Bootstrap', 'icon' => 'fab fa-bootstrap', 'level' => 95, 'cat_en' => 'Frontend', 'cat_fa' => 'فرانت‌اند'],
            ['name' => 'HTML5', 'icon' => 'fab fa-html5', 'level' => 100, 'cat_en' => 'Frontend', 'cat_fa' => 'فرانت‌اند'],
            ['name' => 'CSS3', 'icon' => 'fab fa-css3-alt', 'level' => 90, 'cat_en' => 'Frontend', 'cat_fa' => 'فرانت‌اند'],
        ];

        foreach ($skills as $s) {
            // Seed English Version
            Skill::create([
                'lang' => 'en',
                'name' => $s['name'],
                'icon_class' => $s['icon'],
                'proficiency' => $s['level'],
                'category' => $s['cat_en'],
            ]);

            // Seed Farsi Version
            Skill::create([
                'lang' => 'fa',
                'name' => $s['name'], // Technical names usually stay English
                'icon_class' => $s['icon'],
                'proficiency' => $s['level'],
                'category' => $s['cat_fa'],
            ]);
        }
    }
}