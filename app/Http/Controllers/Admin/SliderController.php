<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function getIndex() {
    	$data['slider'] = Slider::all();
    	return view('admin.slider.main', $data);
    }

    public function getAdd() {
    	return view('admin.slider.form');
    }

    public function postAdding(Request $request) {
    	$data = new Slider;

    	$image = $request->file('image');
    	if ($image) {
	        $image_name = 'image'.time().$image->getClientOriginalName();
	        $image->move(public_path().'/lp/images/sliders/', $image_name);
	        $data->image = '/lp/images/sliders/'.$image_name;
    	}


    	$data->title = $request->title;
    	$data->linkTitle = $request->linkTitle;
    	$data->is_link = $request->is_link;
    	$data->description = $request->description;
    	if ($data->save()) {
	    	return redirect()->route('admin.slider.add')->with(Alert('success', 'Added'));
    	}else{
	    	return redirect()->route('admin.slider.add')->with(Alert('danger', 'Added'));

    	}
    }

    public function getUpdate($id) {
        $data['data'] = Slider::findOrFail($id);
        return view('admin.slider.form', $data);
    }

    public function postUpdating(Request $request, $id) {
        $data = Slider::findOrFail($id);

        $image = $request->file('image');
        if ($image) {
            $image_name = 'image'.time().$image->getClientOriginalName();
            $image->move(public_path().'/lp/images/sliders/', $image_name);
            $data->image = '/lp/images/sliders/'.$image_name;
        }


        $data->title = $request->title;
        $data->linkTitle = $request->linkTitle;
        $data->is_link = $request->is_link;
        $data->description = $request->description;
        if ($data->save()) {
            return redirect()->route('admin.slider.update', $id)->with(Alert('success', 'Update'));
        }else{
            return redirect()->route('admin.slider.update', $id)->with(Alert('danger', 'Update'));

        }
    }

    public function getDelete($id) {
        $data = Slider::findOrFail($id);
        
        if ($data->delete()) {
            return redirect()->route('admin.slider')->with(Alert('success', 'Update'));
        }else{
            return redirect()->route('admin.slider')->with(Alert('danger', 'Update'));

        }
    }
}
