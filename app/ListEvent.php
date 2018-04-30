<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListEvent extends Model
{
	protected $table = 'vw_events';
    //
    public $primaryKey = 'EventID';
}
