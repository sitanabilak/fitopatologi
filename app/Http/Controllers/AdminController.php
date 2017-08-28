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
        $customer= DB::table('customer')->orderBy('name_customer')->get();
        $unverified= DB::table('isolat_cendawan')->where('status_verifiedData', 0)->get();
        return view('admin/dashboard',  ['fungi_list' => $fungi_list, 'users' => $users, 'customer' => $customer, 'unverified' => $unverified]);
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
        if(isset($input["id_users"]))  $input["password"] = "password";
        if($users->validate($input)) {

            try { 
                if(isset($input["id_users"])){
                    $users = Users::where('id_users', $input['id_users'])->first(); 
                    $input["password"] = $users->password;
                }
                else{
                    $users = new Users;
                }   
                $users->lengthName = $input["lengthName"];
                $users->instansi_user = $input["instansi_user"];
                $users->email = $input["email"];
                $users->username = $input["username"];
                $users->password = $input["password"];
                $users->id_usertype = $input["id_usertype"];
                $users->save();
                // $users->id_users;
                $input = [];
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

    public function destroy($id_users)
    {
        $delete = Users::where('id_users', $id_users);
        if($delete == null || count($delete) == 0)
        {
            return redirect()->intended('/user-mng');
        }
        $delete->delete();

        return redirect()->intended('/user-mng')->with(['message' => 'Successfuly deleted!']);
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
