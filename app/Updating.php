<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Updating extends Model
{
    protected $table = 'updateting';
    public $timestamps = false;

     private $rules = array(
        'date_updating' => 'required',
        'cendawan_id'  => 'required',
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