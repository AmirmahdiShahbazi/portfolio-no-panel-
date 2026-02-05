<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('experiences')->truncate();

        // Job 1: Datees.net
        $commonId1 = (string) Str::uuid();
        $this->seedExperience([
            'common_id' => $commonId1,
            'lang' => 'en',
            'company' => 'Datees.net',
            'role' => 'Backend Developer',
            'description' => "Developed robust RESTful APIs to facilitate seamless integration between mobile applications and frontend platforms. Engineered full-stack solutions using Blade templates, while implementing critical security patches and performance optimizations to improve system response times.",
            'start_date' => '2025-05-10',
            'end_date' => '2026-01-22',
            'is_current' => false,
        ]);

        $this->seedExperience([
            'common_id' => $commonId1,
            'lang' => 'fa',
            'company' => 'Datees.net',
            'role' => 'توسعه‌دهنده بک‌اند',
            'description' => "توسعه APIهای قدرتمند و بهینه برای یکپارچه‌سازی میان اپلیکیشن‌های موبایل و فرانت‌اند. طراحی و پیاده‌سازی راهکارهای Full-stack با استفاده از Blade، به همراه تمرکز ویژه بر بهبود امنیت سیستم و ارتقای پرفورمنس برای افزایش سرعت پاسخ‌دهی.",
            'start_date' => '2025-05-10',
            'end_date' => '2026-01-22',
            'is_current' => false,
        ]);

        // Job 2: Matin International Group
        $commonId2 = (string) Str::uuid();
        $this->seedExperience([
            'common_id' => $commonId2,
            'lang' => 'en',
            'company' => 'Matin International Group',
            'role' => 'Backend Developer',
            'description' => "Spearheaded the development of a microservices-based product, optimizing performance across multiple services. Delivered high-impact features and architectural enhancements that significantly improved service reliability and scalability.",
            'start_date' => '2023-09-23',
            'end_date' => '2025-03-19',
            'is_current' => false,
        ]);

        $this->seedExperience([
            'common_id' => $commonId2,
            'lang' => 'fa',
            'company' => 'گروه بین‌المللی متین',
            'role' => 'توسعه‌دهنده بک‌اند',
            'description' => "مشارکت کلیدی در توسعه محصول مبتنی بر میکروسرویس. بهینه‌سازی پرفورمنس سرویس‌های متعدد و پیاده‌سازی قابلیت‌های جدید که منجر به افزایش پایداری و مقیاس‌پذیری سیستم در محیط‌های پر ترافیک شد.",
            'start_date' => '2023-09-23',
            'end_date' => '2025-03-19',
            'is_current' => false,
        ]);
    }

    private function seedExperience(array $data)
    {
        Experience::create($data);
    }
}