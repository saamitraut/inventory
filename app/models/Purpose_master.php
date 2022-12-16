<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;

class Purpose_master extends Eloquent  {

    protected $table = 'purpose_master';
    static function list()
    {
        $purposes = Purpose_master::all()->toArray();        
        $res=array();
        foreach ($purposes as $purpose) {
          $res[$purpose['id']]=$purpose;
        }
        return $res;
    }
}
