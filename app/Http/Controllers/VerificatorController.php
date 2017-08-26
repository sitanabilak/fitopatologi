<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VerificatorController extends Controller
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
    public function index()
    {
        $fungi_list= DB::table('isolat_cendawan')->orderBy('name_cendawan')->where('status_verifiedData', 0)->get();
        return view('verificator/base', ['fungi_list' => $fungi_list]);
    }
    public function view()
    {
        return view('verificator/view');
    }
    
}
