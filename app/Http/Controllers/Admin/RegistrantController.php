<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Registrant;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RegistrantsExport;
use PDF;

class RegistrantController extends Controller
{
    public function getIndex()
    {
        $data['registrant'] = Registrant::all();
        return view('admin.registrant.main', $data);
    }

    public function getDetail($id)
    {
        $data['reg'] = Registrant::findOrFail($id);
        return view('admin.registrant.detail', $data);
    }

    public function postUpdate(Request $request, $id)
    {
        Registrant::findOrFail($id)->update([
            'name'            => $request->name,
            'place_birth'    => $request->place_birth,
            'date_birth'    => $request->date_birth,
            'gender'        => $request->gender,
            'region'        => $request->region,
            'phone'            => '62' . $request->phone,
            'parent_name'    => $request->parent_name,
            'parent_phone'    => '62' . $request->parent_phone,
            'school_origin'    => $request->school_origin,
            'adress'        => $request->adress,
            'majors'        => $request->majors,
            'lane'            => $request->lane,
        ]);
        return redirect()->route('admin.registrant.detail', $id)->with(Alert('success', 'Update'));
    }

    public function getDelete($id)
    {
        Registrant::findOrFail($id)->delete();
        return redirect()->route('admin.registrant');
    }

    public function getCard($id)
    {
        $data['data'] = Registrant::findOrFail($id);
        // return view('card', $data);
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('card', $data);
        $name = 'card-' . $data['data']->id_registrant . '.pdf';
        $path = 'regist/card/';
        $pdf->setWarnings(false)->save($path . $name);

        return redirect()->route('admin.registrant');
    }

    public function getExportExcel($lane = null)
    {
        if ($lane == null) {
            $name = 'Registrants ' . date('d F Y') . '.xlsx';
        } else {
            $name = $lane . ' Registrants ' . date('d F Y') . '.xlsx';
        }
        return Excel::download(new RegistrantsExport($lane), $name);
    }

    public function getUpdateReRegister($id){
        $data = Registrant::findOrFail($id);
        if($data->re_register){
            $data->re_register = null;
        }else {
            $data->re_register = cb(null, 'Y-m-d');
        }

        $data->update();
        return redirect()->route('admin.registrant');
    }
}
