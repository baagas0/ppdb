<?php

use Illuminate\Database\Seeder;
use App\Registrant;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class RegistrantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Registrant::create([
        	'name'			=> 'Bagas Trying Student',
        	'place_birth'	=> 'Jepara',
        	'date_birth'	=> date('Y-m-d'),
        	'gender'		=> 'L',
        	'region'		=> 'islam',
        	'phone'			=> '89506373551',
        	'parent_name'	=> 'my Parent',
        	'parent_phone'	=> '89507363478',
        	'school_origin'	=> 'SMP 1 Donorojo',
        	'adress'		=> 'jl. benteng portugis',
        	'majors'		=> 'IPS',
        	'bing_sm3'		=> '56',
        	'bing_sm4'		=> '57',
        	'bing_sm5'		=> '58',
        	'average_bing'	=> '59',
        	'mat_sm3'		=> '56',
        	'mat_sm4'		=> '57',
        	'mat_sm5'		=> '58',
        	'average_mat'	=> '59',
        	'ips_sm3'		=> '56',
        	'ips_sm4'		=> '57',
        	'ips_sm5'		=> '58',
        	'average_ips'	=> '59',
        	'ipa_sm3'		=> '56',
        	'ipa_sm4'		=> '57',
        	'ipa_sm5'		=> '58',
        	'average_ipa'	=> '59',
        ]);
        Registrant::create([
            'name'          => 'Bagas Trying Student',
            'place_birth'   => 'Jepara',
            'date_birth'    => date('Y-m-d'),
            'gender'        => 'P',
            'region'        => 'islam',
            'phone'         => '89506373551',
            'parent_name'   => 'my Parent',
            'parent_phone'  => '89507363478',
            'school_origin' => 'SMP 1 Donorojo',
            'adress'        => 'jl. benteng portugis',
            'majors'        => 'IPS',
            'bing_sm3'      => '56',
            'bing_sm4'      => '57',
            'bing_sm5'      => '58',
            'average_bing'  => '59',
            'mat_sm3'       => '56',
            'mat_sm4'       => '57',
            'mat_sm5'       => '58',
            'average_mat'   => '59',
            'ips_sm3'       => '56',
            'ips_sm4'       => '57',
            'ips_sm5'       => '58',
            'average_ips'   => '59',
            'ipa_sm3'       => '56',
            'ipa_sm4'       => '57',
            'ipa_sm5'       => '58',
            'average_ipa'   => '59',
        ]);
    }
}
