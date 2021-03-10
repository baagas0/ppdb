<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Registrant;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RegistrantsExport;

class RegistrantController extends Controller
{
    public function getIndex() {
    	$data['registrant'] = Registrant::all();
    	return view('admin.registrant.main', $data);
    }

    public function getDetail($id) {
    	$data['reg'] = Registrant::findOrFail($id);
    	return view('admin.registrant.detail', $data);
    }

    public function postUpdate(Request $request, $id) {
    	Registrant::findOrFail($id)->update([
        	'name'			=> $request->name ,
        	'place_birth'	=> $request->place_birth ,
        	'date_birth'	=> $request->date_birth ,
        	'gender'		=> $request->gender ,
        	'region'		=> $request->region ,
        	'phone'			=> '62'.$request->phone ,
        	'parent_name'	=> $request->parent_name ,
        	'parent_phone'	=> '62'.$request->parent_phone ,
        	'school_origin'	=> $request->school_origin ,
        	'adress'		=> $request->adress ,
        	'majors'		=> $request->majors ,
        ]);
        return redirect()->route('admin.registrant.detail', $id)->with(Alert('success', 'Update'));
    }

    public function getExportExcel() {
    	return Excel::download(new RegistrantsExport, 'Registrants.xlsx');
    }
}
