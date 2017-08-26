<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Users;
use App\Role;

class AdminController extends Controller
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
    public function dashboard()
    {

        $fungi_list= DB::table('isolat_cendawan')->orderBy('name_cendawan')->get();
        $users= DB::table('users')->orderBy('lengthName')->get();
        $count1 = DB::table('users')->where('typeuser_id', '!=', 4)->get();
        $count2 = DB::table('users')->where('typeuser_id', 4)->get();
        return view('admin/dashboard',  ['fungi_list' => $fungi_list, 'users' => $users, 'count1' => $count1, 'count2' => $count2]);
    }
    public function index()
    {

        $isolat_cendawan = DB::table('isolat_cendawan')->get();
        return view('admin/fungi-mng', compact('isolat_cendawan'));
    }
    
    
     public function adduser(Request $request)
    {  
        $input = $request->all();

        $users = new Users;       
        $error_msg = "";
        if($users->validate($input)) {

            try {
                $users = new Users;
                $users->lengthName = $input["lengthName"];
                $users->instansi_user = $input["instansi_user"];
                $users->email = $input["email"];
                $users->username = $input["username"];
                $users->password = $input["password"];
                $users->id_usertype = $input["id_usertype"];
                $users->save();
            }
            catch(\Exception $e){
               // do task when error
               $error_msg = $e->getMessage();   // insert query
            }
        }
        else $error_msg = $users->v->messages()->first(); 
        $users_data= DB::table('users')->orderBy('lengthName')->get();

        return view('admin/user-mng',['input' => $input, 'error_msg' => $error_msg, 'users_data' => $users_data]);
    }
    public function indexuser()
    {

        $users_data= DB::table('users')->orderBy('lengthName')->get();
        return view('admin/user-mng',  ['users_data' => $users_data, 'error_msg' => '']);
    }
    public function userrole()
    {
        $roles= DB::table('user_type')->get();

        // $roles = new Role;
        // return response()->json($roles);
        return view('admin/user-mng', ['roles' => $roles]);
    }
    
    public function indexorder()
    {
        return view('admin/order-mng');
    }
    public function indexinvoice()
    {
        return view('admin/detail-order');
    }
    
}
