<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;

class Requiredfor_master extends Eloquent  {

    protected $table = 'requiredfor_master';
    static function list()
    {
        $required_fors = Requiredfor_master::all()->toArray();        
        $res=array();
        foreach ($required_fors as $required_for) {
          $res[$required_for['id']]=$required_for;
        }
        return $res;
    }
}