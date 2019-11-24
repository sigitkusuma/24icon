<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Illustration;
use App\Icon;
use App\Categories;

class IndexController extends Controller
{
    public function index()
    {
    	$image = Image::all();
        $illustration = Illustration::all();
        $icon = Icon::all();
        $images = collect($image)->merge($illustration)->merge($icon);
        $categories = Categories::all();
    	return view('welcome',compact('images','categories'));
    }
    public function category($category)
    {
    	$category = Categories::where('slug',$category)->first();
    	$image = $category->image;
    	$illustration = $category->illustration;
    	$icon = $category->icon;
        $images = collect($image)->merge($illustration)->merge($icon);
        $categories = Categories::all();
    	return view('welcome',compact('images','categories'));
    }
    public function filter($filter)
    {
    	switch ($filter) {
    		case 'image':
    			$images = Image::all();
    			break;
    		
    		case 'icon':
    			$images = Icon::all();
    			break;
    		
    		case 'illustration':
    			$images = Illustration::all();
    			break;
    		
    		default:
    			return redirect()->route('home');
    			break;
    	}

        $categories = Categories::all();
    	return view('welcome',compact('images','categories'));
    }
}
