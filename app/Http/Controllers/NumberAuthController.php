<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;


class NumberAuthController extends Controller
{

	public function index(){
		Cache::forget('phone_number');
		return view('otp.check-otp');
	}
 
	public function send(Request $request){
		
		$this->validate($request,[
			'phone_number'=>'required',
		]);

		$cek = $request->phone_number;
		$member = DB::table('members')->where('phone_number', $cek)->first();

		 
		if ($member == null) {
			return view('otp.check-otp')->with(['warning' => 'Pesan Warning']);
		} else {
			$phone_number = Cache::rememberForever('phone_number', function () use ($cek) {
				return $cek;
			});
			return view('otp.send-otp',compact('phone_number'));
		}

	}
}
