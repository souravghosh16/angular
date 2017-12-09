<?php

namespace App\ms;
use Illuminate\Database\Eloquent\Model;
class Address_book extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ='address_book';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
