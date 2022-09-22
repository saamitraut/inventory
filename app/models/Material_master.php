<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;

class Material_master extends Eloquent  {

    protected $table = 'material_master';

    static function list()
    {
        $materials=self::all()->toArray();
        $res=array();   $res['']='';
        foreach ($materials as $material) {
          $res[$material['id']]=$material['name'];
        }
        return $res;
    }

}