<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
	protected $fillable = array('id', 'user_id', 'petition_key', 'summary', 'private');	
}