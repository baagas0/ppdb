<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
    	'slug',
    	'title',
    	'content',
    	'value',
    	'file',
    	'is_active'
    ];

    public function getGetAttribute(){

    	if($this->is_active == '') {
            if (is_null($this->is_active)) {
        		$data['status'] = 'Auto';
            }else{
                $data['status'] = 'inActive';
            }
    	}else if($this->is_active == true){
    		$data['status'] = 'Active';
    	}else {
    		$data['status'] = 'inActive';
    	}
    	return $data;
    }
}
