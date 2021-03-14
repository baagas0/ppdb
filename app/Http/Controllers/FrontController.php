<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrant;
use App\Slider;
use PDF;

class FrontController extends Controller
{
	public function getIndex() {
		$data['slider'] = Slider::get();
		return view('lp', $data);
	}

	public function getRegistration() {
		return view('registForm');
	}

	public function getDownloadCard($id) {
		$data['data'] = Registrant::findOrFail($id);
        // return view('card', $data);
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('card', $data);
        $name = 'card-'.$data['data']->id_registrant.'.pdf';
        $path = 'regist/card/';
        return $pdf->setWarnings(false)->stream($name);
	}

	public function postSaveRegistration(Request $request) {
		if ($request->has('terms') == false) {
			return redirect()->route('..registration')->with('danger', 'Anda harus mencentang konfirmasi bahwa anda benar benar menginput nilai sesuai dengan raport saya');
		}
		$amount_bing	= $request->bing_sm3 + $request->bing_sm4 + $request->bing_sm5;
		$average_bing	= $amount_bing / 3;

		$amount_mat	= $request->mat_sm3 + $request->mat_sm4 + $request->mat_sm5;
		$average_mat	= $amount_mat / 3;

		$amount_ips	= $request->ips_sm3 + $request->ips_sm4 + $request->ips_sm5;
		$average_ips	= $amount_ips / 3;

		$amount_ipa	= $request->ipa_sm3 + $request->ipa_sm4 + $request->ipa_sm5;
		$average_ipa	= $amount_ipa / 3;
		if (config('app.debug') == false) {
			$registrant = Registrant::create([
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
				'bing_sm3'		=> $request->bing_sm3 ,
				'bing_sm4'		=> $request->bing_sm4 ,
				'bing_sm5'		=> $request->bing_sm5 ,
				'average_bing'	=> $average_bing ,
				'mat_sm3'		=> $request->mat_sm3 ,
				'mat_sm4'		=> $request->mat_sm4 ,
				'mat_sm5'		=> $request->mat_sm5 ,
				'average_mat'	=> $average_mat ,
				'ips_sm3'		=> $request->ips_sm3 ,
				'ips_sm4'		=> $request->ips_sm4 ,
				'ips_sm5'		=> $request->ips_sm5 ,
				'average_ips'	=> $average_ips ,
				'ipa_sm3'		=> $request->ipa_sm3 ,
				'ipa_sm4'		=> $request->ipa_sm4 ,
				'ipa_sm5'		=> $request->ipa_sm5 ,
				'average_ipa'	=> $average_ipa ,
			]);
		}else {
			$registrant = Registrant::create([
				'name'			=> 'Bagas Trying Student',
				'place_birth'	=> 'Jepara',
				'date_birth'	=> date('Y-m-d'),
				'gender'		=> 'L',
				'region'		=> 'islam',
				'phone'			=> '089506373551',
				'parent_name'	=> 'my Parent',
				'parent_phone'	=> 'my Parent Phone',
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
		}

		

		return redirect()->route('..registration')->with(['success' => 'Anda Berhasil mendaftar PPDB di Man 2 Pati lewat jalur regular', 'custom' => 'Download kartu peserta anda di <a href="'.route("..download.card", $registrant->id).'">Klik Sini</a>']);
	}
}
