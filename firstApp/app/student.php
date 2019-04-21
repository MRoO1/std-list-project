<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable=[
    	'std_name',
    	'std_roll',
        'std_address',
        'email'];
}
