<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
	protected $table = 'barang';

    protected $fillable = ['id','nama', 'satuan','berat'];

    protected $hidden = ['created_at','updated_at'];

   
}