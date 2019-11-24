<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    protected $table = 'icon';
    protected $fillable = [
        'name','categories_id','file'
    ];
    public function category()
    {
    	return $this->belongsTo(Categories::class,'categories_id');
    }
}
