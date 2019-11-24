<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name','slug'
    ];
    public function image()
    {
    	return $this->hasMany(Image::class);
    }
    public function illustration()
    {
    	return $this->hasMany(Illustration::class);
    }
    public function icon()
    {
    	return $this->hasMany(Icon::class);
    }

}
