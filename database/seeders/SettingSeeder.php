<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing settings to prevent duplicates
        DB::table('settings')->truncate();

        $settings = [
            // ==========================================
            // ENGLISH (en)
            // ==========================================
            
            // Hero Section
            ['lang' => 'en', 'key' => 'hero_subtitle', 'value' => 'Backend Developer'],
            ['lang' => 'en', 'key' => 'hero_title', 'value' => 'Laravel Specialist'],
            ['lang' => 'en', 'key' => 'hero_btn', 'value' => 'View My Work'],

            // About Section
            ['lang' => 'en', 'key' => 'about_section_title', 'value' => '01. About Me'],
            ['lang' => 'en', 'key' => 'about_status', 'value' => 'Status: Open to Work'],
            ['lang' => 'en', 'key' => 'bio', 'value' => "Backend Developer with 3 years of experience building scalable web applications. \n\nI specialize in PHP and Laravel, with a strong command of the full stack including Vue.js, Docker, and Redis. I have a proven track record of collaborating effectively with frontend and mobile developers to deliver robust solutions.\n\nI am passionate about clean code and constantly learning new technologies to optimize system performance."],

            // Section Headers
            ['lang' => 'en', 'key' => 'skills_section_title', 'value' => '02. Core Skills'],
            ['lang' => 'en', 'key' => 'exp_section_title', 'value' => '03. Work History'],
            ['lang' => 'en', 'key' => 'contact_section_title', 'value' => '04. Contact Me'],

            // Contact Form Labels
            ['lang' => 'en', 'key' => 'contact_name_label', 'value' => 'Full Name'],
            ['lang' => 'en', 'key' => 'contact_email_label', 'value' => 'Email Address'],
            ['lang' => 'en', 'key' => 'contact_msg_label', 'value' => 'Your Message'],
            ['lang' => 'en', 'key' => 'contact_btn_label', 'value' => 'Send Message'],
            ['lang' => 'en', 'key' => 'contact_loading_label', 'value' => 'Sending...'],

            // ==========================================
            // FARSI (fa)
            // ==========================================

            // Hero Section
            ['lang' => 'fa', 'key' => 'hero_subtitle', 'value' => 'توسعه‌دهنده بک‌اند'],
            ['lang' => 'fa', 'key' => 'hero_title', 'value' => 'متخصص لاراول'],
            ['lang' => 'fa', 'key' => 'hero_btn', 'value' => 'مشاهده نمونه‌کارها'],

            // About Section
            ['lang' => 'fa', 'key' => 'about_section_title', 'value' => '۰۱. درباره من'],
            ['lang' => 'fa', 'key' => 'about_status', 'value' => 'وضعیت: آماده همکاری'],
            ['lang' => 'fa', 'key' => 'bio', 'value' => "توسعه‌دهنده بک‌اند با ۳ سال تجربه در ساخت وب‌اپلیکیشن‌های مقیاس‌پذیر.\n\nتخصص اصلی من PHP و فریم‌ورک Laravel است و تسلط کامل بر ابزارهایی مانند Docker، Redis و Vue.js دارم. من تجربه گسترده‌ای در همکاری با تیم‌های فرانت‌اند و موبایل برای ارائه راهکارهای نرم‌افزاری پایدار دارم.\n\nمن عاشق کدنویسی تمیز هستم و همیشه در حال یادگیری تکنولوژی‌های جدید برای بهبود عملکرد سیستم‌ها می‌باشم."],

            // Section Headers
            ['lang' => 'fa', 'key' => 'skills_section_title', 'value' => '۰۲. مهارت‌های اصلی'],
            ['lang' => 'fa', 'key' => 'exp_section_title', 'value' => '۰۳. سوابق کاری'],
            ['lang' => 'fa', 'key' => 'contact_section_title', 'value' => '۰۴. تماس با من'],

            // Contact Form Labels
            ['lang' => 'fa', 'key' => 'contact_name_label', 'value' => 'نام کامل'],
            ['lang' => 'fa', 'key' => 'contact_email_label', 'value' => 'آدرس ایمیل'],
            ['lang' => 'fa', 'key' => 'contact_msg_label', 'value' => 'متن پیام'],
            ['lang' => 'fa', 'key' => 'contact_btn_label', 'value' => 'ارسال پیام'],
            ['lang' => 'fa', 'key' => 'contact_loading_label', 'value' => 'در حال ارسال...'],

            // English
            ['lang' => 'en', 'key' => 'nav_about', 'value' => 'About'],
            ['lang' => 'en', 'key' => 'nav_skills', 'value' => 'Skills'],
            ['lang' => 'en', 'key' => 'nav_experience', 'value' => 'Experience'],
            ['lang' => 'en', 'key' => 'footer_status', 'value' => 'SYSTEM STATUS: STABLE'],

            // Farsi
            ['lang' => 'fa', 'key' => 'nav_about', 'value' => 'درباره من'],
            ['lang' => 'fa', 'key' => 'nav_skills', 'value' => 'مهارت‌ها'],
            ['lang' => 'fa', 'key' => 'nav_experience', 'value' => 'سوابق کاری'],
            ['lang' => 'fa', 'key' => 'footer_status', 'value' => 'وضعیت سیستم: پایدار'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}