<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
	protected $table = 'profile';

    protected $fillable = ['id','nama'];

    protected $hidden = ['created_at','updated_at'];

   
}