<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use \App\Purchase;

class PurchaseController extends Controller
{
	public function index() {
		$purchase = \App\purchase::all();
	    return view('purchase', compact('purchases'));
	}
	public function show($id) {
		$purchase = \App\purchase::find($id);
	    return view('purchase', compact('purchases'));
	}
	public function create() {
	    $input = Input::get(); 
		$purchase = new \App\purchase;
		$purchase->name = $input['name'];
		$purchase->number = $input['phone'];
		$purchase->comment = $input['comment'];
		$purchase->save();
	    return view('finish');
	}
	public function delete($id) {
		$purchase = \App\purchase::find($id);
		$purchase->delete();
	    return view('/');
	}
}

		/*
	    $input = Input::only('name','phone','comment'); 
		$purchase = new \App\purchase;
		$purchase->name = $input['name'];
		$purchase->name = $input['phone'];
		$purchase->name = $input['comment'];
		$purchase->save();
	    return view('finish');*/
        /*
	    $input = Input::only('name','phone','comment'); 
		$purchase = new \App\purchase;
        dd($input);
	    return view('/');
        $purchase = $input;
		$purchase->save();
		dd($purchase);
	    $user = new User;
	    $user->name = $input['name'];
	    $user->email = $input['email'];
	    $user->password = Hash::make($input['password']);
	    $user->save();*/