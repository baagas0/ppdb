<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Registrant;
use Carbon\Carbon;

class DashboardController extends Controller
{
	public function __construct()
    {
    	Carbon::setLocale('id');
        Carbon::setWeekStartsAt(Carbon::SUNDAY);
    	Carbon::setWeekEndsAt(Carbon::SATURDAY);
    }

    public function getIndex() {
    	$data['rThisWeek'] = Registrant::where('created_at', '>', Carbon::now()->startOfWeek())
     						 ->where('created_at', '<', Carbon::now()
     						 ->endOfWeek())->count();
		$data['rThisMonth'] = Registrant::whereMonth('created_at', Carbon::now()->month)->count();
		$data['rThisDay'] = Registrant::whereDay('created_at', Carbon::now()->day)->count();
		$data['rAll'] = Registrant::count();

		for($i=0;$i<31;$i++){
			$day = Registrant::whereMonth('created_at', Carbon::now()->month)->whereDay('created_at', $i)->count();
			$data['cMonth'][] = $day;

			$monthName = Carbon::createFromFormat('d', $i)->translatedFormat('D');
			// dd($monthName);
			$data['c30Days'][] = ['month' => (string)$i,'amount' => $day, 'monthName' => $monthName];
		}

		for($i=0;$i<8;$i++){
			// dd(Carbon::now()->startOfWeek()->addDay($i));
			$week = Registrant::whereDay('created_at', Carbon::now()->startOfWeek()->addDay($i))->count();
			$data['cWeek'][] = $week;
		}

		// dd(json_encode($data['c30Days']));

    	return view('admin.dashboard.main', $data);
    }
}
