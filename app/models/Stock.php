<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;

class Stock extends Eloquent  {

    protected $table = 'stock';
     protected $dates = ['date'];
}