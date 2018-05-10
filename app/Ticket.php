<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
	protected $table = 'msticket';
	public $primaryKey = 'TicketID';
	public $timestamps = false;
    //
}
