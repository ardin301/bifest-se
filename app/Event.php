<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Event extends Model
{
   protected $table = 'msevent';
   public $primaryKey = 'EventID';
   public $timestamps = false;

}
