<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Isolat;
use App\Species;
use App\Location;
use App\Photo;
use App\Storage;
use App\Updating;
use App\Substrat;

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
        $isolat_cendawan= DB::table('isolat_cendawan')->orderBy('name_cendawan')->where('status_verifiedData', 0)->get();
        return view('verificator/base', ['isolat_cendawan' => $isolat_cendawan]);
    }
    public function view(Request $request)
    {
        $id_isolat = $request->id;
        $isolat_cendawan = Isolat::where('id_cendawan', $id_isolat)->first();
        if ($request->isMethod('post')) {
            $isolat_cendawan->status_verifiedData=1;
            $isolat_cendawan->save();
        }


        $species = Species::where('id_species', $isolat_cendawan->species_id)->first();
        $substrat = Substrat::where('id_substrat', $species->substrat_id)->first();
        $location = Location::where('id_location', $isolat_cendawan->location_id)->first();
        $photo = Photo::where('id_photo', $isolat_cendawan->photo_id)->first();
        $storage = Storage::where('id_storage', $isolat_cendawan->storage_id)->first();
        $updating = Updating::where('id_updating', $isolat_cendawan->updating_id)->first();

        return view('verificator/view', ['isolat_cendawan' => $isolat_cendawan, 'species' => $species, 'location' => $location, 'photo' => $photo,'storage' => $storage, 'updating' => $updating, 'substrat' => $substrat]);
    }
}
