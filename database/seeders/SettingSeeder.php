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
                'key' => 'corousel',
                'label' => 'Corousel',
                'value' => null,
                'type' => 'image',
                'image' => null,
            ],
            [
                'key' => 'sambutan_text',
                'label' => 'Selamat Datang di Website Resmi SDN Bandarharjo 01',
                'value' => 'Assalamualaikum wr. wb.
                            Selamat datang di website resmi SDN Bandarharjo 01
                            Dengan penuh rasa syukur dan bangga, kami mempersembahkan website ini sebagai salah satu wadah untuk memperkenalkan dan berbagi informasi mengenai sekolah kita tercinta. Melalui media digital ini, kami berharap dapat menjangkau seluruh keluarga besar SDN Bandarharjo 01, mulai dari siswa, orang tua, hingga alumni, serta masyarakat luas.

                            Website ini dirancang dengan tujuan untuk memberikan kemudahan akses informasi mengenai kegiatan akademik, jadwal sekolah, berita terbaru, dan berbagai aktivitas lainnya yang berlangsung di sekolah kita. Selain itu, kami juga menyediakan berbagai sumber daya yang bermanfaat bagi siswa, orang tua, dan tenaga pendidik dalam mendukung proses belajar mengajar.

                            Kami percaya bahwa komunikasi yang baik antara sekolah, siswa, dan orang tua merupakan kunci kesuksesan pendidikan. Oleh karena itu, kami berharap website ini dapat menjadi sarana yang efektif untuk memperkuat hubungan tersebut, serta mempermudah dalam menyampaikan berbagai informasi penting.
                            Wassalamualaikum wr. wb',
                'type' => 'longtext',
                'image' => null,
            ],
            [
                'key' => 'visi',
                'label' => 'Visi',
                'value' => 'Terwujudnya Peserta Didik yang Bertaqwa, Santun, Terampil, Cerdas, Berprestasi, Ramah serta Berwawasan Budaya Lingkungan',
                'type' => 'longtext',
                'image' => null,
            ],
            [
                'key' => 'misi',
                'label' => 'Misi',
                'value' => 'Melaksanakan pendidikan dan pembelajaran untuk mengembangkan ketakwaan terhadap Tuhan Yang Maha Esa
                            Menumbuhkan budaya tertib, disiplin, santun dalam ucapan, sopan dalam perilaku terhadap sesama berdasarkan iman dan taqwa
                            Menumbuhkan kreativitas dan inovasi di bidang akademik, prestasi dan keterampilan
                            Menumbuhkan semangat berprestasi dan budaya kompetitif yang jujur, sportif bagi seluruh warga sekolah dalam berlomba meraih prestasi
                            Melaksanakan pendidikan dan pembelajaran yang ramah
                            Melaksanakan pendidikan dan pembelajaran yang berwawasan budaya lingkungan',
                'type' => 'longtext',
                'image' => null,
            ],
            [
                'key' => 'sejarah_text',
                'label' => 'Sejarah Singkat - Text',
                'value' => 'Secara administrasi Sekolah Dasar (SD) Negeri Bandarharjo 01 beralamat di Jalan Cumi-cumi Raya No. 2, Kelurahan Bandarharjo, Kecamatan Semarang Utara, Kota Semarang, Provinsi Jawa Tengah. Untuk menunjang proses Kegiatan Belajar Mengajar, sekolah mempunyai fasilitas sebagai berikut: - 6 Ruang Kelas - 1 ruang Kepala Sekolah menyatu dengan: (1 ruang tamu Kepala Sekolah - 1 ruang tata usaha, 1 ruang Guru) - 1 ruang Guru - 1 ruang Perpustakaan menyatu dengan ruang komputer - 1 ruang UKS - 1 ruang ibadah - 2 kamar mandi guru - 3 toilet Siswa - 2 Kantin sekolah SDN Bandarharjo 01 berdiri sejak tahun 1973 dan berdasarkan Surat Wali kota Nomor : 030/1301 tanggal 6 April 2006 telah dimasukan inventarisasi aset tanah Pemerintah Kota Semarang. Sejak pertama kali berdiri sudah berganti kepala sekolah sebanyak 9 kali hingga saat ini: Bu Suwarti, Bapak Soeyoto, Bu Veronika Utami, Bu Sri Lestari, Bu Rustiah, Bapak Sarpio, Bu Diah Erowati, Bu Sri Widiyati, Bu Bugiyanti. Sekolah SDN Bandarharjo 01 adalah salah satu SD awal yang pertama kali berdiri di kota semarang. Memberi pelayanan pendidikan guna meningkatakn SDM yang berkualitas dan bermartabat berdasarkan ketaqwaan dan cinta tanah air & bangsa.',
                'type' => 'longtext',
                'image' => null,
            ],
            [
                'key' => 'kurikulum_sekolah',
                'label' => 'KURIKULUM SDN BANDARHARJO 01 KOTA SEMARANG',
                'value' => 'Saat ini kami telah melaksanakan Kurikulum 2013 sejak Tahun Pelajaran 2017/2018. Prinsip Kurikulum Kurikulum SDN Bandarharjo 01 Semarang mengacu kepada Standar Nasional Pendidikan untuk mencapai tujuan pendidikan nasional. Standar Nasional Pendidikan terdiri dari:
                Standar Isi
                Standar Proses
                Standar Kompetensi Lulusan
                Standar Pendidik dan Tenaga Kependidikan
                Standar Sarana dan Prasarana
                Standar Pengelolaan
                Standar Pembiayaan
                Standar Penilaian Pendidikan
                Pengembangan Pendidikan
                Kurikulum sekolah ini disusun agar peserta didik dapat memperoleh kesempatan pembelajaran yang:
                Memungkinkan peserta didik belajar sesuai dengan potensi, minat, dan bakatnya.
                Mengintegrasikan pendidikan karakter dan nilai-nilai luhur yang berakar dari Pancasila.
                Mengembangkan keterampilan abad 21 untuk berbagai aspek kehidupan.',
                'type' => 'longtext',
                'image' => null,
            ],
            [
                'key' => 'contact_alamat',
                'label' => 'Alamat',
                'value' => 'Jalan Cumi-Cumi Raya No 2, Bandarharjo, Kec. Semarang Utara, Kota Semarang, Provinsi Jawa Tengah',
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
                'type' => 'longtext',
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
