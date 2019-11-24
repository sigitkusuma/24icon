<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Image;
use App\Icon;
use App\Illustration;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UploadController extends Controller
{
	public function create()
	{
		$categories = Categories::all();
		$image = Image::all();
		return view('admin.upload',compact('categories','image'));
	}
    public function store(Request $request)
    {
    	if ($request->file->getMimeType() != 'image/svg') {

	    	$validator = Validator::make($request->all(), [
	    		'name'	=> 'required',
				'categories_id' => 'required',
				'file' => 'required|mimes:jpeg,jpg,png,svg,svg+xml,xml,html|max:10000',
			]);

			if ($validator->fails()) {
	            return redirect()->back()->withErrors($validator)->withInput();
	        }
        }
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
	 
		$nama_file = str_slug($file->getClientOriginalName(),'-');
	 	if (($request->file->getMimeType() == 'image/svg') or ($request->file->getMimeType() == 'image/svg+xml')) {
	 		$nama_file = $nama_file.'.svg';
	 	}
	      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'resources/image/'.$request->categories_id;
		$file->move($tujuan_upload,$nama_file);
	 
	 
		Image::create([
			'file' => $nama_file,
			'name' => $request->name,
			'categories_id' => $request->categories_id,
		]);

		$message = 'New Pict added successfully.';
        return redirect()->route('create.image')
                        ->with('success',$message);
    }
    public function desatroy($id)
    {
    	$gallery = Image::find($id);
    	File::delete('resources/image/'.$gallery->program->id.'/'.$gallery->file);
    	$gallery->delete();

    	$message = 'Picture deleted successfully.';
        return redirect()->route('create.gallery')
                        ->with('success',$message);
    }
}
