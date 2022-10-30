<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {   
        $total = DB::table('submissions')
        ->count();

        $agree = DB::table('submissions')
        ->where('status', '=', 'Setuju')
        ->count();

        $reject = DB::table('submissions')
        ->where('status', '=', 'Tolak')
        ->count();

        $new = DB::table('submissions')
        ->where('status', '=', 'Baru')
        ->count();

        return view('dashboard')
        ->with(['total' => $total]) 
        ->with(['agree' => $agree]) 
        ->with(['reject' => $reject])
        ->with(['new' => $new]);
    }
}
