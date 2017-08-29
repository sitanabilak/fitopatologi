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
use App\Ordo;
use App\Family;
use App\Genus;
// use App\City;
// use App\District;
use App\Isolat;
use App\Location;
// use App\Photo;
// use App\Province;
// use App\Raiser;
use App\Species;
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
        $states = State::orderBy('name_state', 'asc')->get();

        return view('admin/fungi-add', ['states' => $states]);
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



        $error_msg = "";

        if ($request->isMethod('post')) {


            $isolate = new Isolat;

            if($isolate->validate($input)) {
                try {
                    $isolate = new Isolat;
                    $isolate->code_cendawan = $input["code_cendawan"];
                    $isolate->name_cendawan = $input["name_cendawan"];
                    $isolate->quantity_cendawan = $input["quantity_cendawan"];
                    $isolate->label_cendawan = $input["label_cendawan"];
                    $isolate->utilization = $input["utilization"];


                    $location = new Location;
                    $location->latitude = $input["latitude"];
                    $location->longitude = $input["longitude"];
                    $location->atitude = $input["atitude"];
                    $location->district_id = $input["id_district"];
                    $location->save();

                    

                    $substrat = new Substrat;
                    $substrat->name_substrat = $input["name_substrat"];
                    $substrat->ecology = $input["ecology"];
                    $substrat->biology = $input["biology"];
                    $substrat->physiology = $input["physiology"];
                    $substrat->mycotoxin = $input["mycotoxin"];
                    $substrat->save();

                    $species = new Species;
                    $species->name_species = $input["name_cendawan"];
                    $species->description_species = $input["description_species"];
                    $species->substrat_id = $substrat->id_substrat;

                    if(!isset($input['name_genus'])) $species->genus_id = $input["id_genus"];
                    else {
                        $genus = new Genus;
                        $genus->name_genus = $input["name_genus"];
                        if(!isset($input['name_family'])) $genus->family_id = $input["id_family"];
                        else {
                            $family = new Family;
                            $family->name_family = $input["name_family"];
                            if(!isset($input['name_ordo'])) $family->ordo_id = $input["id_ordo"];
                            else {
                                $ordo = new Ordo;
                                $ordo->name_ordo = $input["name_ordo"];
                                if(!isset($input['name_class'])) $ordo->class_id = $input["id_class"];
                                else {
                                    $class = new Classes;
                                    $class->name_class = $input["name_class"];
                                    if(!isset($input['name_divisi'])) $class->divisi_id = $input["id_divisi"];
                                    else {
                                        $divisi = new Divisi;
                                        $divisi->name_divisi = $input["name_divisi"];
                                        $divisi->save();
                                        $class->divisi_id = $divisi->id_divisi;
                                    }
                                    $class->save();
                                    $ordo->class_id = $class->id_class;

                                }
                                $ordo->save();
                                $family->ordo_id = $ordo->id_ordo;

                            }
                            $family->save();
                            $genus->family_id = $family->id_family;
                        }
                        $genus->save();
                        $species->genus_id = $genus->id_genus;
                    }

                    $species->save();

                    $isolate->species_id = $species->id_species;



                    $isolate->location_id = $location->id_location;
                    $isolate->save();


                    return redirect('fungi-add');
                }
                catch(\Exception $e){
                   // do task when error
                   $error_msg = $e->getMessage();   // insert query
                }
            }
            else $error_msg = $isolate->v->messages()->first(); 

        }


        // $substrat = new Substrat;       

        // if($substrat->validate($input)) {

        //     try {
        //         $substrat = new Substrat;
        //         $substrat->name_substrat = $input["name_substrat"];
        //         $substrat->ecology = $input["ecology"];
        //         $substrat->biology = $input["biology"];
        //         $substrat->physiology = $input["physiology"];
        //         $substrat->mycotoxin = $input["mycotoxin"];
        //         $substrat->save();
        //         return redirect('form-add')->withInput(['tab'=>'substrat']);
        //     }
        //     catch(\Exception $e){
        //        // do task when error
        //        $error_msg = $e->getMessage();   // insert query
        //     }
        // }
        // else $error_msg = $substrat->v->messages()->first(); 

        // $isolator = new Isolator;       

        // if($isolator->validate($input)) {

        //     try {
        //         $isolator = new Isolator;
        //         $isolator->name_isolator = $input["name_isolator"];
        //         $isolator->instansi_isolator = $input["instansi_isolator"];
        //         $isolator->expertise_isolator = $input["expertise_isolator"];
        //         $isolator->date_isolator = date('Y-m-d H:i:s', strtotime($input["date_isolator"]));
        //         $isolator->save();
        //         return redirect('form-add')->withInput(['tab'=>'isolator']);
        //     }
        //     catch(\Exception $e){
        //        // do task when error
        //        $error_msg = $e->getMessage();   // insert query
        //     }
        // }
        // else $error_msg = $isolator->v->messages()->first(); 

        // $raiser = new Raiser;       

        // if($raiser->validate($input)) {

        //     try {
        //         $raiser = new Raiser;
        //         $raiser->name_raiser = $input["name_raiser"];
        //         $raiser->instansi_raiser = $input["instansi_raiser"];
        //         $raiser->expertise_raiser = $input["expertise_raiser"];
        //         $raiser->save();
        //         return redirect('form-add')->withInput(['tab'=>'raiser']);
        //     }
        //     catch(\Exception $e){
        //        // do task when error
        //        $error_msg = $e->getMessage();   // insert query
        //     }
        // }
        // else $error_msg = $raiser->v->messages()->first(); 

        // $storage = new Storage;       

        // if($storage->validate($input)) {

        //     try {
        //         $storage = new Storage;
        //         $storage->no_tube = $input["no_tube"];
        //         $storage->rack = $input["rack"];
        //         $storage->save();
        //         return redirect('form-add')->withInput(['tab'=>'storage']);
        //     }
        //     catch(\Exception $e){
        //        // do task when error
        //        $error_msg = $e->getMessage();   // insert query
        //     }
        // }
        // else $error_msg = $storage->v->messages()->first(); 

        // $location = new Location;       

        // if($storage->validate($input)) {

        //     try {
        //         $location = new Location;
        //         $location->latitude = $input["latitude"];
        //         $location->longitude = $input["longitude"];
        //         $location->atitude = $input["atitude"];
        //         $location->save();
        //         return redirect('form-add')->withInput(['tab'=>'location']);
        //     }
        //     catch(\Exception $e){
        //        // do task when error
        //        $error_msg = $e->getMessage();   // insert query
        //     }
        // }
        // else $error_msg = $location->v->messages()->first(); 


        $states = State::orderBy('name_state', 'asc')->get();

        return view('admin/fungi-add', ['input' => $input, 'error_msg' => $error_msg, 'states' => $states]);
    }




    public function state()
    {
        $states = State::orderBy('name_state', 'asc')->get();

        return view('add-location', ['states' => $states]);
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
        $data = District::select('name_district', 'id_district')->where('id_city', $request->id)->get();

        return response()->json($data);
    }

    public function divisi()
    {
        $divisi = Divisi::orderBy('name_divisi', 'asc')->get();

         return response()->json($divisi);
    }
    public function findClass(Request $request)
    {
        $data = Classes::select('name_class', 'id_class')->where('divisi_id', $request->id)->get();

        return response()->json($data);
    }
    public function findOrdo(Request $request)
    {
        $data = Ordo::select('name_ordo', 'id_ordo')->where('class_id', $request->id)->get();

        return response()->json($data);
    }
    public function findFamily(Request $request)
    {
        $data = Family::select('name_family', 'id_family')->where('ordo_id', $request->id)->get();

        return response()->json($data);
    }
    public function findGenus(Request $request)
    {
        $data = Genus::select('name_genus', 'id_genus')->where('family_id', $request->id)->get();

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