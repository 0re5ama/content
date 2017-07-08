<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	public $timestamps = false;
	//protected $fillable = ['name', 'joined'];  //which can also be written as below inverse
	protected $guarded = [];
}
