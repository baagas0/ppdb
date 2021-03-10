<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Setting::create([
    		'slug' 		=> 'title',
    		'title' 	=> 'PPDB Man 2 Pati Bersahaja',
    		'content' 	=> '',
    		'file' 		=> '',
    	]);

        Setting::create([
            'slug'      => 'bg-color-form',
            'title'     => '',
            'content'   => ' background: rgb(80,186,2);background: radial-gradient(circle, rgba(80,186,2,1) 0%, rgba(9,121,14,1) 82%); /* Note: Get Gradient Code From https://cssgradient.io/ */',
            'file'      => '',
        ]);

        Setting::create([
            'slug'      => 'custom-alert',
            'is_active' => 1,
            'title'     => '',
            'content'   => 'ini custom alert',
            'file'      => '',
        ]);

    	Setting::create([
    		'slug' 		=> 'logo',
    		'title' 	=> '',
    		'content' 	=> '',
    		'file' 		=> 'lp/images/logo/logo.png',
    	]);
    	Setting::create([
    		'slug' 		=> 'favicon',
    		'title' 	=> '',
    		'content' 	=> '',
    		'file' 		=> 'lp/images/logo/favicon.png',
    	]);

    	Setting::create([
    		'slug' 		=> 'youtube-introduction',
    		'title' 	=> 'https://www.youtube.com/watch?v=idlVoo8MZew',
    		'content' 	=> '',
    		'file' 		=> 'lp/images/about/2.jpg',
    	]);

    	Setting::create([
    		'slug' 		=> 'schoolName',
    		'title' 	=> 'MAN 2 PATI',
    		'content' 	=> '',
    		'file' 		=> '',
    	]);

        Setting::create([
            'slug'      => 'feature-image1',
            'title'     => '',
            'content'   => '',
            'file'      => 'lp/images/banners/3.jpg',
        ]);
        Setting::create([
            'slug'      => 'feature-image2',
            'title'     => '',
            'content'   => '',
            'file'      => 'lp/images/banners/9.jpg',
        ]);

    	Setting::create([
    		'slug' 		=> 'history',
    		'title' 	=> '',
    		'content' 	=> '<p class="heading__desc">SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang pertama dibuka pada saat itu adalah sekretaris dengan jumlah hanya 34 siswa.</p>',
    		'file' 		=> '',
    	]);

    	Setting::create([
    		'slug' 		=> 'feature',
    		'title' 	=> 'Sarana Lengkap',
    		'content' 	=> '',
    		'file' 		=> '',
    	]);

    	Setting::create([
    		'slug' 		=> 'feature',
    		'title' 	=> 'Prasarana Memadai',
    		'content' 	=> '',
    		'file' 		=> '',
    	]);

    	Setting::create([
    		'slug' 		=> 'feature',
    		'title' 	=> 'Program Beasiswa',
    		'content' 	=> '',
    		'file' 		=> '',
    	]);
    	Setting::create([
    		'slug' 		=> 'feature',
    		'title' 	=> 'Guru Yang Berkompeten',
    		'content' 	=> '',
    		'file' 		=> '',
    	]);
    	Setting::create([
    		'slug' 		=> 'feature',
    		'title' 	=> 'SPP Murah Perbulan',
    		'content' 	=> '',
    		'file' 		=> '',
    	]);
    	Setting::create([
    		'slug' 		=> 'feature',
    		'title' 	=> 'Lingkungan Go Green',
    		'content' 	=> '',
    		'file' 		=> '',
    	]);
    	Setting::create([
    		'slug' 		=> 'feature',
    		'title' 	=> 'Tenaga Pendidik Yang Memadai',
    		'content' 	=> '',
    		'file' 		=> '',
    	]);
    	Setting::create([
    		'slug' 		=> 'feature',
    		'title' 	=> 'Mengutamakan Karakter',
    		'content' 	=> '',
    		'file' 		=> '',
    	]);

    	Setting::create([
    		'slug' 		=> 'teacherCount',
    		'title' 	=> '',
    		'content' 	=> '',
    		'value' 	=> 85,
    		'file' 		=> '',
    	]);
    	Setting::create([
    		'slug' 		=> 'studentCount',
    		'title' 	=> '',
    		'content' 	=> '',
    		'value' 	=> 473,
    		'file' 		=> '',
    	]);
    	Setting::create([
    		'slug' 		=> 'alumniCount',
    		'title' 	=> '',
    		'content' 	=> '',
    		'value' 	=> 1250,
    		'file' 		=> '',
    	]);

    	Setting::create([
    		'slug' 		=> 'adress',
    		'title' 	=> 'Jl. Ratu Kalinyamat Gg. Melati II Tayu Kabupaten Pati',
    		'content' 	=> '',
    		'file' 		=> '',
    	]);
    	Setting::create([
    		'slug' 		=> 'email',
    		'title' 	=> 'man2pati@yahoo.com',
    		'content' 	=> '',
    		'file' 		=> '',
    	]);
    	Setting::create([
    		'slug' 		=> 'phone',
    		'title' 	=> '(0295) 452635',
    		'content' 	=> '',
    		'file' 		=> '',
    	]);
    	Setting::create([
    		'slug' 		=> 'brochure',
    		'title' 	=> '',
    		'content' 	=> '',
    		'file' 		=> 'lp/images/about/brochure.jpeg',
    	]);

    	Setting::create([
    		'slug' 		=> 'head-master',
    		'title' 	=> '',
    		'content' 	=> 'Semangat Pagi <br><br>
    		Selamat datang di situs resmi SMK Wikrama 1 Jepara. Semoga Anda mendapatkan informasi yang Anda inginkan. Kalimat dari saya, Tetap kobarkan semangat Pemuda Indonesia untuk masa depan yang lebih cerah. Wikrama! Untuk Indonesia!',
    		'file' 		=> 'lp/images/about/master-head.jpg',
    	]);
    	Setting::create([
    		'slug' 		=> 'head-master-signature',
    		'title' 	=> '',
    		'content' 	=> '',
    		'file' 		=> 'lp/images/about/singnture.png',
    	]);
    }
}
