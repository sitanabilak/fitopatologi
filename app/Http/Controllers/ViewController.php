<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Isolat;
use App\Species;
use App\Location;
use App\Photo;
use App\Storage;
use App\Updating;

class ViewController extends Controller
{
	public function detail(Request $request)
    {
    	$isolat = DB::table('isolat_cendawan')
    				->leftJoin('species', 'isolat_cendawan.species_id', '=', 'species.id_species')
    				->leftJoin('location', 'isolat_cendawan.location_id', '=', 'location.id_location')
    				->leftJoin('photo', 'isolat_cendawan.photo_id', '=', 'photo.id_photo')
    				->leftJoin('storage', 'isolat_cendawan.storage_id', '=', 'storage.id_storage')
    				->leftJoin('updateting', 'isolat_cendawan.updating_id', '=', 'updateting.id_updating')
    				->select('name_cendawan')
    				->get();

        return view('user/fungi-detail', ['isolat'=>$isolat]);
    }
    public function view(Request $request)
    {
    	$id_isolat = $request->id;
    	$isolat_cendawan = Isolat::where('id_cendawan', $id_isolat)->first();
    	$species = Species::where('id_species', $isolat_cendawan->species_id)->first();
    	$location = Location::where('id_location', $isolat_cendawan->location_id)->first();
    	$photo = Photo::where('id_photo', $isolat_cendawan->photo_id)->first();
    	$storage = Storage::where('id_storage', $isolat_cendawan->storage_id)->first();
    	$updating = Updating::where('id_updating', $isolat_cendawan->updating_id)->first();

        return view('admin/fungi-view', ['isolat_cendawan' => $isolat_cendawan, 'species' => $species, 'location' => $location, 'photo' => $photo,'storage' => $storage, 'updating' => $updating,]);
    }
}
