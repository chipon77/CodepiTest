<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\livre;
use App\categorie;


class livre extends Model
{
    protected $table = 'livre';    

    public $timestamps = false;

	public function categorie()
	{
		return $this->belongsToMany('App\categorie');
	} 

}
