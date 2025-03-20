<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'key' => 'sambutan_text',
                'label' => 'Sambutan Kepala Sekolah - Text',
                'value' => 'Selamat datang di website SDN Bandarharjo 01. Website ini menjadi media informasi, komunikasi, dan publikasi sekolah kami kepada masyarakat luas.',
                'type' => 'longtext',
                'image' => null,
            ],
            [
                'key' => 'visi',
                'label' => 'Visi',
                'value' => 'Mewujudkan peserta didik yang beriman, berakhlak mulia, berprestasi, dan peduli lingkungan.',
                'type' => 'longtext',
                'image' => null,
            ],
            [
                'key' => 'misi',
                'label' => 'Misi',
                'value' => '1. Melaksanakan pembelajaran efektif.\n2. Menumbuhkan semangat berprestasi.\n3. Menanamkan disiplin dan kepedulian lingkungan.',
                'type' => 'longtext',
                'image' => null,
            ],
            [
                'key' => 'sejarah_text',
                'label' => 'Sejarah Singkat - Text',
                'value' => 'SDN Bandarharjo 01 berdiri sejak 1960 dan menjadi salah satu sekolah dasar tertua di Semarang.',
                'type' => 'textarea',
                'image' => null,
            ],
            [
                'key' => 'kurikulum_sekolah',
                'label' => 'Kurikulum Sekolah - Title',
                'value' => 'Kami menggunakan Kurikulum Merdeka untuk membangun karakter dan keterampilan siswa.',
                'type' => 'longtext',
                'image' => null,
            ],
            [
                'key' => 'contact_alamat',
                'label' => 'Alamat',
                'value' => 'Jl. Cumi-Cumi Raya No.2 Bandarharjo, Semarang Utara',
                'type' => 'text',
                'image' => null,
            ],
            [
                'key' => 'contact_email',
                'label' => 'Email',
                'value' => 'sdnbandarharjo01@gmail.com',
                'type' => 'text',
                'image' => null,
            ],
            [
                'key' => 'contact_telp',
                'label' => 'Telp',
                'value' => '(024) 3551189',
                'type' => 'text',
                'image' => null,
            ],
            [
                'key' => 'contact_jam_kerja',
                'label' => 'Jam Kerja',
                'value' => 'Senin - Jumat, 07.00 - 14.00 WIB',
                'type' => 'textarea',
                'image' => null,
            ],
            [
                'key' => 'contact_youtube',
                'label' => 'YouTube',
                'value' => 'https://www.youtube.com/channel/UCk0F-xx-xxxxxx',
                'type' => 'text',
                'image' => null,
            ],
            [
                'key' => 'contact_instagram',
                'label' => 'Instagram',
                'value' => 'https://www.instagram.com/sdnbandarharjo01/',
                'type' => 'text',
                'image' => null,
            ],
            [
                'key' => 'contact_facebook',
                'label' => 'Facebook',
                'value' => 'https://www.facebook.com/people/SDN-Bandarharjo-01/1000637487xxxx/',
                'type' => 'text',
                'image' => null,
            ],
            [
                'key' => 'contact_mail',
                'label' => 'Mail',
                'value' => 'sdnbandarharjo01@gmail.com',
                'type' => 'text',
                'image' => null,
            ],
            [
                'key' => 'contact_whatsapp',
                'label' => 'WhatsApp',
                'value' => 'https://wa.me/6281229xxxxx',
                'type' => 'text',
                'image' => null,
            ],
            [
                'key' => 'contact_maps',
                'label' => 'Location Maps',
                'value' => 'https://goo.gl/maps/sdnbandarharjo01',
                'type' => 'text',
                'image' => null,
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
