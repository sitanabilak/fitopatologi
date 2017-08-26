<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Isolator;
use App\Substrat;
use App\Raiser;
use App\Storage;
use App\Divisi;
use App\Classes;
use App\State;
use App\Province;
use App\City;
use App\District;
// use App\Ordo;
// use App\Family;
// use App\Genus;
// use App\City;
// use App\District;
// use App\Isolat;
// use App\Location;
// use App\Photo;
// use App\Province;
// use App\Raiser;
// use App\Species;
// use App\State;
// use App\Storage;
// use App\Updating;
use Validator;

class FungiController extends Controller
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
    public function entri()
    {
        return view('admin/fungi-edit');
    }
    public function entri2()
    {
        return view('admin/fungi-add');
    }
    public function divisi()
    {
        $divisi= Divisi::orderBy('name_divisi', 'asc')->get();
        return view('db-mng', ['divisi' =>$divisi]);
    }
    public function divforclass(Request $request)
    {
        $data= Classes::select('name_class', 'id_class')->where('divisi_id', $request->id)->get();
        return response()->json($data);
    }

    public function index2()
    {
        // $form_substrat = set_include_path('form_substrat');

        $states = State::orderBy('name_state', 'asc')->get();
        return view('admin/db-mng', ['states' => $states]);
    }

    public function postEntri2(Request $request)
    {  
        $input = $request->all();

        $substrat = new Substrat;       

        if($substrat->validate($input)) {

            try {
                $substrat = new Substrat;
                $substrat->name_substrat = $input["name_substrat"];
                $substrat->ecology = $input["ecology"];
                $substrat->biology = $input["biology"];
                $substrat->physiology = $input["physiology"];
                $substrat->mycotoxin = $input["mycotoxin"];
                $substrat->save();
                return redirect('db-mng')->withInput(['tab'=>'substrat']);
            }
            catch(\Exception $e){
               // do task when error
               $error_msg = $e->getMessage();   // insert query
            }
        }
        else $error_msg = $substrat->v->messages()->first(); 

        $isolator = new Isolator;       

        if($isolator->validate($input)) {

            try {
                $isolator = new Isolator;
                $isolator->name_isolator = $input["name_isolator"];
                $isolator->instansi_isolator = $input["instansi_isolator"];
                $isolator->expertise_isolator = $input["expertise_isolator"];
                $isolator->date_isolator = date('Y-m-d H:i:s', strtotime($input["date_isolator"]));
                $isolator->save();
                return redirect('db-mng')->withInput(['tab'=>'isolator']);
            }
            catch(\Exception $e){
               // do task when error
               $error_msg = $e->getMessage();   // insert query
            }
        }
        else $error_msg = $isolator->v->messages()->first(); 

        $raiser = new Raiser;       

        if($raiser->validate($input)) {

            try {
                $raiser = new Raiser;
                $raiser->name_raiser = $input["name_raiser"];
                $raiser->instansi_raiser = $input["instansi_raiser"];
                $raiser->expertise_raiser = $input["expertise_raiser"];
                $raiser->save();
                return redirect('db-mng')->withInput(['tab'=>'raiser']);
            }
            catch(\Exception $e){
               // do task when error
               $error_msg = $e->getMessage();   // insert query
            }
        }
        else $error_msg = $raiser->v->messages()->first(); 

        $storage = new Storage;       

        if($storage->validate($input)) {

            try {
                $storage = new Storage;
                $storage->no_tube = $input["no_tube"];
                $storage->rack = $input["rack"];
                $storage->save();
                return redirect('db-mng')->withInput(['tab'=>'storage']);
            }
            catch(\Exception $e){
               // do task when error
               $error_msg = $e->getMessage();   // insert query
            }
        }
        else $error_msg = $storage->v->messages()->first(); 


        return view('admin/db-mng', ['input' => $input, 'error_msg' => $error_msg]);
    }


    public function state()
    {
        $states = State::orderBy('name_state', 'asc')->get();

        return view('post-location', ['states' => $states]);
    }
    public function findProv(Request $request)
    {
        $data = Province::select('name_province', 'id_province')->where('state_id', $request->id)->get();

        return response()->json($data);
    }
    public function findCity(Request $request)
    {
        $data = City::select('name_city', 'id_city')->where('province_id', $request->id)->get();

        return response()->json($data);
    }
    public function findDistrict(Request $request)
    {
        $data = District::select('name_district', 'id_district')->where('city_id', $request->id)->get();

        return response()->json($data);
    }
    public function orderform()
    {
        return view('customer/order-form');
    }


    public function postEntri3(Request $request)
    {
        $fungi = new Fungi;
    }
    
}

// public function destination(){
//         $state = State::orderBy('name', 'asc')->get();   
//         return view('herbarium.weedherba.createAuthor', ['state' => $state]);
//     }

//     public function findProv(Request $request)
//     {
//         $data= Province::select('name', 'id_prov')->where('state_id', $request->id)->get();
//         return response()->json($data);
//     }