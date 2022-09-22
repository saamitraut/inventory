<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;

class Unit_master extends Eloquent  {

    protected $table = 'unit_master';

    static function list()
    {
        $units=self::all()->toArray();
        $res=array();$res['']='';
        foreach ($units as $unit) {
          $res[$unit['id']]=$unit['name'];
        }
        return $res;
    }

}