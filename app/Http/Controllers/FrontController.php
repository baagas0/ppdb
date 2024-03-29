<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrant;
use Carbon\Carbon;
use App\Slider;
use Illuminate\Support\Facades\Storage;
use PDF;
use setasign\Fpdi\Fpdi;
use \setasign\Fpdi\PdfParser\StreamReader;

class FrontController extends Controller
{
    public function getIndex()
    {
        $data['slider'] = Slider::get();
        return view('lp', $data);
    }

    public function getRegistration()
    {
        return view('registForm');
    }

    public function getDownloadCard($id)
    {
        $data['data'] = Registrant::findOrFail($id);
        // return view('card', $data);
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('card', $data);
        $name = 'card-' . $data['data']->id_registrant . '.pdf';
        $path = 'regist/card/';
        return $pdf->setWarnings(false)->stream($name);
    }

    public function getAge(Request $request)
    {
        $age = Carbon::parse($request->get('date_birth'))->diff(\Carbon\Carbon::now())->format('%y');
        return $age;
    }

    public function postSaveRegistration(Request $request)
    {
        if ($request->has('terms') == false) {
            return redirect()->route('..registration')->with('danger', 'Anda harus mencentang konfirmasi bahwa anda benar benar menginput nilai sesuai dengan raport saya');
        }
        $amount_bing    = $request->bing_sm3 + $request->bing_sm4 + $request->bing_sm5;
        $average_bing    = $amount_bing / 3;

        $amount_mat    = $request->mat_sm3 + $request->mat_sm4 + $request->mat_sm5;
        $average_mat    = $amount_mat / 3;

        $average_ips = 0;
        $average_ipa = 0;

        if ($request->majors == 'IPS') {
            $amount_ips    = $request->ips_sm3 + $request->ips_sm4 + $request->ips_sm5;
            $average_ips    = $amount_ips / 3;
        } else if ($request->majors == 'IPA') {
            $amount_ipa    = $request->ipa_sm3 + $request->ipa_sm4 + $request->ipa_sm5;
            $average_ipa    = $amount_ipa / 3;
        } else {
            return redirect()->route('..registration')->with('danger', 'Pastikan anda memilih jurusan dengan benar!');
        }

        $length = 5;

        $avatar_path = '';
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatar_name =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, $length) . time() . '.' . str_replace('image/', '', $avatar->getMimeType());
            $avatar_path = Storage::putFileAs('public/images', $avatar, $avatar_name);
        }

        if ($request->hasFile('file_sm_1')) {
            $file_sm_1 = $request->file('file_sm_1');
            $file_sm_1_ex = str_replace('image/', '', $file_sm_1->getMimeType());
            $file_sm_1_ex = str_replace('application/', '', $file_sm_1_ex);
            $file_sm_1_name =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, $length) . time() . '.' . $file_sm_1_ex;
            $file_sm_1_path = Storage::putFileAs('public/semester', $file_sm_1, $file_sm_1_name);
            // dd($file_sm_1_path);
        } else {
            return redirect()->route('..registration')->with('danger', 'Masukan file raport semester 3!');
        }

        if ($request->hasFile('file_sm_2')) {
            $file_sm_2 = $request->file('file_sm_2');
            $file_sm_2_ex = str_replace('image/', '', $file_sm_2->getMimeType());
            $file_sm_2_ex = str_replace('application/', '', $file_sm_2_ex);
            $file_sm_2_name =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, $length) . time() . '.' . $file_sm_2_ex;
            $file_sm_2_path = Storage::putFileAs('public/semester', $file_sm_2, $file_sm_2_name);
        } else {
            return redirect()->route('..registration')->with('danger', 'Masukan file raport semester 4!');
        }

        if ($request->hasFile('file_sm_3')) {
            $file_sm_3 = $request->file('file_sm_3');
            $file_sm_3_ex = str_replace('image/', '', $file_sm_3->getMimeType());
            $file_sm_3_ex = str_replace('application/', '', $file_sm_3_ex);
            $file_sm_3_name =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, $length) . time() . '.' . $file_sm_3_ex;
            $file_sm_3_path = Storage::putFileAs('public/semester', $file_sm_3, $file_sm_3_name);
        } else {
            return redirect()->route('..registration')->with('danger', 'Masukan file raport semester 5!');
        }

        if ($request->hasFile('file_piagam')) {
            $file_piagam = $request->file('file_piagam');
            $file_piagam_name =  substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, $length) . time() . '.' . str_replace('image/', '', $file_piagam->getMimeType());
            $file_piagam_path = Storage::putFileAs('public/semester', $file_piagam, $file_piagam_name);
        } else {
            $file_piagam_path = null;
        }

        // if (config('app.debug') == false) {
        $registrant = Registrant::create([
            'name'          => $request->name,
            'place_birth'   => $request->place_birth,
            'date_birth'    => Carbon::parse($request->date_birth)->format('Y-m-d'),
            'gender'        => $request->gender,
            'region'        => 'Islam',
            'phone'         => '62' . $request->phone,
            'parent_name'   => $request->parent_name,
            'parent_phone'  => '62' . $request->parent_phone,
            'school_origin' => $request->school_origin,
            'adress'        => $request->adress,

            'majors'        => $request->majors,
            'lane'          => $request->lane,

            'bing_sm3'      => $request->bing_sm3,
            'bing_sm4'      => $request->bing_sm4,
            'bing_sm5'      => $request->bing_sm5,
            'average_bing'  => $average_bing,
            'mat_sm3'       => $request->mat_sm3,
            'mat_sm4'       => $request->mat_sm4,
            'mat_sm5'       => $request->mat_sm5,
            'average_mat'   => $average_mat,
            'ips_sm3'       => $request->ips_sm3,
            'ips_sm4'       => $request->ips_sm4,
            'ips_sm5'       => $request->ips_sm5,
            'average_ips'   => $average_ips,
            'ipa_sm3'       => $request->ipa_sm3,
            'ipa_sm4'       => $request->ipa_sm4,
            'ipa_sm5'       => $request->ipa_sm5,
            'average_ipa'   => $average_ipa,

            'avatar'        => $avatar_path,
            'file_sm_1'     => $file_sm_1_path,
            'file_sm_2'     => $file_sm_2_path,
            'file_sm_3'     => $file_sm_3_path,
            'file_piagam'   => $file_piagam_path,
        ]);
        // } else {
        //     $registrant = Registrant::create([
        //         'name'            => 'Bagas Trying Student',
        //         'place_birth'    => 'Jepara',
        //         'date_birth'    => date('Y-m-d'),
        //         'gender'        => 'L',
        //         'region'        => 'islam',
        //         'phone'            => '089506373551',
        //         'parent_name'    => 'my Parent',
        //         'parent_phone'    => 'my Parent Phone',
        //         'school_origin'    => 'SMP 1 Donorojo',
        //         'adress'        => 'jl. benteng portugis',
        //         'majors'        => 'IPS',
        //         'lane'          => 'Regular',
        //         'bing_sm3'        => '56',
        //         'bing_sm4'        => '57',
        //         'bing_sm5'        => '58',
        //         'average_bing'    => '59',
        //         'mat_sm3'        => '56',
        //         'mat_sm4'        => '57',
        //         'mat_sm5'        => '58',
        //         'average_mat'    => '59',
        //         'ips_sm3'        => '56',
        //         'ips_sm4'        => '57',
        //         'ips_sm5'        => '58',
        //         'average_ips'    => '59',
        //         'ipa_sm3'        => '56',
        //         'ipa_sm4'        => '57',
        //         'ipa_sm5'        => '58',
        //         'average_ipa'    => '59',

        //         'avatar'        => $avatar_path,
        //         'file_sm_1'     => $file_sm_1_path,
        //         'file_sm_2'     => $file_sm_2_path,
        //         'file_sm_3'     => $file_sm_3_path,
        //         'file_piagam'   => $file_piagam_path,
        //     ]);
        // }

        // return redirect()->route('..registration')->with([
        //     'success' => 'Anda Berhasil mendaftar PPDB di Man 2 Pati lewat jalur ' . $request->lane,
        //     'custom'  => 'Download formulir pendaftaran anda di <a href="' . route('..download.formulir', $registrant->id_registrant) . '">Klik Sini</a>'
        // ]);
        return redirect()->route('..thanks')->with([
            'id_registration'   =>  $registrant->id_registrant
        ]);
    }

    public function getThanks()
    {
        return view('thanks');
    }

    public function getCetakFormulir(Request $request)
    {
        $name = $request->get('name');
        $date_birth = $request->get('date_birth');

        $data['request'] = $request->all();

        if (!$name && !$date_birth) {
            $data['registrations'] = [];
            $request->session()->flash('custom', 'Isi nama dan tanggal lahir anda untuk menemukan data pendaftaran anda!');
        } else {
            $data['registrations'] = Registrant::where('name', 'like', '%' . $name . '%')
                ->whereDate('date_birth', Carbon::parse($date_birth))
                ->get();
            $request->session()->flash('success', 'Download formulir anda lewat tombol merah <>Download Formulir<>');
        }
        return view('cetakFormulir', $data);
    }

    public function getDownloadFormulir(Request $request, $id_registrant)
    {
        $pdf = new Fpdi();
        $fileContent = file_get_contents(asset('regist/formulir9.pdf'), 'rb');

        $pdf->AddPage();
        $pdf->setSourceFile(StreamReader::createByString($fileContent));
        $tplIdx = $pdf->importPage(1);
        $pdf->useTemplate($tplIdx, 0, 0, 210);
        $pdf->SetFont('times', '', 8);

        $data = Registrant::where('id_registrant', $id_registrant)->first();

        $v = 98;
        $h = 62;
        $space = 6.3;

        if ($data->avatar) {
            $pdf->Image(asset('') . Storage::url($data->avatar), 157.8, 45.5, 24.5, 34.6);
        }

        /**
         * Tanda Tangan
         */
        $pdf->setXY(158, $v - 14.5);
        $pdf->cell(25, 3, $data->id_registrant, 0, 1, "C");

        $pdf->SetXY($h, $v);
        $pdf->Write(0, $data->name);

        $birthday_text = $data->place_birth . ', ' . cb($data->date_birth, 'd M Y');
        $pdf->SetXY($h, $v + ($space * 1));
        $pdf->Write(0, $birthday_text);

        $pdf->SetXY($h, $v + ($space * 2));
        $pdf->Write(0, $data->gender);

        $pdf->SetXY($h, $v + ($space * 3));
        $pdf->Write(0, $data->region);

        $pdf->SetXY($h, $v + ($space * 4) - 0.5);
        $pdf->Write(0, '(62) ' . $data->phone);

        $pdf->SetXY($h, $v + ($space * 5) - 0.5);
        $pdf->Write(0, $data->school_origin);

        $v = $v + 17;

        $pdf->SetXY($h, $v + ($space * 5));
        $pdf->Write(0, $data->parent_name);

        $pdf->SetXY($h, $v + ($space * 6));
        $pdf->Write(0, '(62) ' . $data->parent_phone);

        $pdf->SetXY($h, $v + ($space * 7));
        $pdf->Write(0, $data->adress);

        $v = $v + 19;

        $pdf->SetXY($h, $v + ($space * 7));
        $pdf->Write(0, $data->majors);

        $pdf->SetXY($h, $v + ($space * 8));
        $pdf->Write(0, $data->lane);

        /**
         * Bahasa Ingris
         */
        $v = 210;
        $v_space = 6;

        $h = 93.5;
        $h_space = 10.3;

        $pdf->SetXY($h, $v);
        $pdf->Write(0, $data->bing_sm3);

        $pdf->SetXY($h + ($h_space * 1), $v);
        $pdf->Write(0, $data->bing_sm4);

        $pdf->SetXY($h + ($h_space * 2), $v);
        $pdf->Write(0, $data->bing_sm5);

        $pdf->SetXY($h + ($h_space * 3), $v);
        $pdf->Write(0, $data->average_bing);
        /**
         * Matematika
         */
        $pdf->SetXY($h, $v + ($v_space * 1));
        $pdf->Write(0, $data->mat_sm3);

        $pdf->SetXY($h + ($h_space * 1), $v + ($v_space * 1));
        $pdf->Write(0, $data->mat_sm4);

        $pdf->SetXY($h + ($h_space * 2), $v + ($v_space * 1));
        $pdf->Write(0, $data->mat_sm5);

        $pdf->SetXY($h + ($h_space * 3), $v + ($v_space * 1));
        $pdf->Write(0, $data->average_mat);
        /**
         * IPS
         */
        $pdf->SetXY($h, $v + ($v_space * 2));
        $pdf->Write(0, $data->ips_sm3);

        $pdf->SetXY($h + ($h_space * 1), $v + ($v_space * 2));
        $pdf->Write(0, $data->ips_sm4);

        $pdf->SetXY($h + ($h_space * 2), $v + ($v_space * 2));
        $pdf->Write(0, $data->ips_sm5);

        $pdf->SetXY($h + ($h_space * 3), $v + ($v_space * 2));
        $pdf->Write(0, $data->average_ips);
        /**
         * IPA
         */
        $pdf->SetXY($h, $v + ($v_space * 3));
        $pdf->Write(0, $data->ipa_sm3);

        $pdf->SetXY($h + ($h_space * 1), $v + ($v_space * 3));
        $pdf->Write(0, $data->ipa_sm4);

        $pdf->SetXY($h + ($h_space * 2), $v + ($v_space * 3));
        $pdf->Write(0, $data->ipa_sm5);

        $pdf->SetXY($h + ($h_space * 3), $v + ($v_space * 3));
        $pdf->Write(0, $data->average_ipa);

        /**
         * Tanda Tangan
         */
        $pdf->setXY(142.4, 256);
        $pdf->cell(25, 3, $data->name, 0, 1, "C");

        $pdf->Output('D', 'Formulir - ' . $id_registrant . '.pdf');
    }
}
