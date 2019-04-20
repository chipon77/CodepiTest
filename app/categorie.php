<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\livre;
use App\categorie;

class categorie extends Model
{

    protected $table = 'categorie';    
    public $timestamps = false;

	public function livre()
	{
		return $this->belongsToMany('App\livre');
	} 

}
