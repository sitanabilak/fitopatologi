<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function uindex1()
    {

        $fungi_list= DB::table('isolat_cendawan')->orderBy('name_cendawan')->where('status_verifiedData', 1)->get();
        $coba = "test";

        return view('user/fungi/base', ['fungi_list' => $fungi_list, 'coba' => $coba]);
    }
    public function uindex2()
    {
        return view('user/service/base');
    }

    public function cindex1()
    {
        return view('customer/fungi/base');
    }
    public function cindex2()
    {
        return view('customer/service/base');
    }
    
    
}
