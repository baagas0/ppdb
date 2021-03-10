<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    public function getIndex()
    {
    	$data['setting'] = Setting::all();
    	return view('admin.setting.main', $data);
    }

    public function getUpdate($id)
    {
    	$data['data'] = Setting::findOrFail($id);
    	// dd($data);
    	return view('admin.setting.form', $data);
    }

    public function postUpdate(Request $request, $id)
    {
    	$data = Setting::findOrFail($id);
    	$data->title = $request->title;
    	$data->content = $request->content;
    	$data->value = $request->value;

        if (!is_null($data->is_active)) {
        	$data->is_active = $request->has('is_active');
        }

    	$file = $request->file('file');
    	if ($file) {
	        $file_name = 'image'.time().$file->getClientOriginalName();
	        $file->move(public_path().'/lp/images/', $file_name);
	        $data->file = '/lp/images/'.$file_name;
    	}

    	if ($data->save()) {
	    	return redirect()->route('admin.setting.update', $id)->with(Alert('success', 'Update'));
    	}else{
	    	return redirect()->route('admin.setting.update', $id)->with(Alert('danger', 'Update'));

    	}
    }
}
