<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Storage extends Model
{
    protected $table = 'storage';
    public $timestamps = false;

     private $rules = array(
        'no_tube' => 'required',
        'rack'  => 'required',
        'isolator_id'  => 'required',
        'raiser_id'  => 'required',
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
