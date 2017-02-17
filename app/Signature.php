<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
	protected $fillable = array('petition_id', 'email', 'firstname', 'lastname', 'phone', 'message');	
}
