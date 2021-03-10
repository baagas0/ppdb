<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Registrant extends Model
{
	protected $fillable = [
		'id_registrant',
		'name',
		'place_birth',
		'date_birth',
		'gender',
		'region',
		'phone',
		'parent_name',
		'parent_phone',
		'school_origin',
		'adress',
		'majors',
		'bing_sm3',
		'bing_sm4',
		'bing_sm5',
		'average_bing',
		'mat_sm3',
		'mat_sm4',
		'mat_sm5',
		'average_mat',
		'ips_sm3',
		'ips_sm4',
		'ips_sm5',
		'average_ips',
		'ipa_sm3',
		'ipa_sm4',
		'ipa_sm5',
		'average_ipa',
    ];


    public static function boot()
    {
    	parent::boot();

    	static::creating(function ($model) {
    		// dd($model);

    		if ($model->gender == 'L') {
    			$model->avatar = 'adm/images/male.png';
    		}else {
    			$model->avatar = 'adm/images/female.png';
    		}

    		$model->id_registrant = IdGenerator::generate(['table' => 'registrants', 'field' => 'id_registrant', 'length' => 10, 'prefix' => 'REG-'.date('Y')]);

    	});
    }

    public function getGetAttribute(){
    	if($this->gender == 'L') {
    		$data['gender'] = 'Laki - Laki';
    	}else if($this->gender == 'P'){
    		$data['gender'] = 'Perempuan';
    	}else {
    		$data['gender'] = 'Undefined Status';
    	}
    	return $data;
    }
}
