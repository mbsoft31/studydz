<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Section extends Model
{
	use HasMediaTrait;
    protected $fillable = [ 'name', 'title', 'description', 'data', 'section_id',];


    public function parent()
    {
    	return $this->belongsTo('App\Section', 'section_id');
    }

    public function subSections()
    {
    	return $this->hasMany('App\Section');
    }
}
