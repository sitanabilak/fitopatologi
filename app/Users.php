<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Users extends Model
{
    protected $table = 'users';
    public $timestamps = false;

     private $rules = array(
        'lengthName' => 'required',
        'instansi_user'  => 'required',
        'email'  => 'required',
        'username'  => 'required',
        'password'  => 'required',
        'instansi_user'  => 'required',
        'id_usertype'  => 'required',
    );

    public function validate($data)
    {
        // make a new validator object
        $v = Validator::make($data, $this->rules);
        $result = $v->passes();
        $this->v = $v;
        // return the result
        return $result;
    }

    public function get_validataion_msg() {
    	return $this->v->messages();
    }
}
