<?php

use Illuminate\Database\Seeder;
use App\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Slider::create([
    		'image'			=> 'lp/images/sliders/2.jpg',
    		'title' 		=> 'MAN 2 PATI Bersahaja',
    		'description'   => 'Kuota peserta didik kelas Reguler ada 280 (Apabila Kuota Sudah Terpenuhi Maka Pendaftaran Akan Di Tutup) untuk tahun pelajaran 2021-2022',
    		'linkTitle'		=> 'Pendaftaran',
    		'is_link' 		=> '/registration'
    	]);
    	
    	Slider::create([
    		'image'			=> 'lp/images/sliders/1.jpg',
    		'title' 		=> 'PPDB MAN 2 PATI',
    		'description'   => 'Kuota peserta didik kelas Reguler ada 280 (Apabila Kuota Sudah Terpenuhi Maka Pendaftaran Akan Di Tutup) untuk tahun pelajaran 2021-2022',
    		'linkTitle'		=> 'Pendaftaran',
    		'is_link' 		=> '/registration'
    	]);

    }
}
