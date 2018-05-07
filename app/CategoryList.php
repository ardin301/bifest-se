<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class CategoryList extends Model
{
	protected $table = 'mscategory';
    //
    public $primaryKey = 'CategoryID';
}
