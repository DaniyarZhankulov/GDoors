<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use \App\interior;

class InteriorController extends Controller
{
	public function index() {
		$interiors = \App\interior::all();
	    return view('interior', compact('interiors'));
	}
	public function show($id) {
		$interior = \App\interior::find($id);
	    return view('interior', compact('interior'));
	}
	public function create() {
		$interior = \App\interior::find($record->id);
	    $input = Input::get();
		$interior->image_link = $input['image_link'];
		$interior->save();
	    return view('/');
	}
	public function delete($id) {
		$interior = \App\interior::find($id);
		$interior->delete();
	    return view('/');
	}
}
