<?php

namespace App\ms;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="states";
   
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */ 
	 public $timestamps = false;
}
