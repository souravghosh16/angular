<?php
namespace App\ms;
use Illuminate\Database\Eloquent\Model;

class Cart_details extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ='cart_details';
	public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */   
}
