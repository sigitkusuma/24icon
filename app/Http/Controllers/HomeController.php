<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Illustration;
use App\Icon;
use App\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $images = Image::all();
        $illustration = Illustration::all();
        $icon = Icon::all();
        $data = collect($images)->merge($illustration)->merge($icon);
        return view('admin.list',compact('data'));
    }
    public function category_index()
    {
        $categories = Categories::all();
        return view('admin.categories_index',compact('categories'));
    }
    public function category_create()
    {
        return view('admin.categories_create');
    }
    public function category_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'  => 'required|unique:categories',
        ]);
        return dd($request->all());
        $categories = Categories::create([
            'name' => $request->name,
            'slug' => str_slug($request->name)
        ]);
        $message = 'New Category '.$categories->name.' added successfully.';
        return redirect()->route('index.category')
                        ->with('success',$message);
    }
    public function category_destroy($id)
    {
        $category = Categories::find($id);
        return dd($category);
    }
}
