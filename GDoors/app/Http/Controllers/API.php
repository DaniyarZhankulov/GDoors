<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Door;

class API extends Controller
{
	public function showDoors() {
		$doors = \App\Door::all();
		$doors = array( 'doors' => $doors);	
		return response()->json($doors);
	}
	public function showDoor($id) {
		$doors = \App\Door::find($id);
		$doors = array( 'doors' => $doors);	
		return response()->json($doors);
	}
	public function createDoor() {
		$doors = new \App\Door;
	    $input = Input::get();
		$doors->name = $input['name'];
		$doors->price = $input['price'];
		$doors->material = $input['material'];
		$doors->height = $input['height'];
		$doors->width = $input['width'];
		$doors->description = $input['description'];
		$doors->image_link1 = $input['image_link1'];
		$doors->image_link2 = $input['image_link2'];
		$doors->image_link3 = $input['image_link3'];
		$doors->image_link4 = $input['image_link4'];
		$doors->image_link5 = $input['image_link5'];
		/* There could be MONGO DB
		$door_id = $doors->id;
		DB::insert("insert into doorImages (image1,image2,image3,image4,image5) 
			values ('".$input['image1']."','".$input['image2']."','".$input['image3']."',".$input['image4'].",".$input['image5'].")");
		DB::connection('mongodb')->collection("doorImages")->insert(['_id' => $door_id + 1, 'name' => $input['name']]);
		$url="MY URL";
		header("Location: $url");
		$doors->image_link1 = "/var/www/html/images/".$door_id."/image1";
		$doors->image_link2 = "/var/www/html/images/".$door_id."/image2";
		$doors->image_link3 = "/var/www/html/images/".$door_id."/image3";
		$doors->image_link4 = "/var/www/html/images/".$door_id."/image4";
		$doors->image_link5 = "/var/www/html/images/".$door_id."/image5";
		*/
		$doors->save();
	}
	public function updateDoor($record) {
		$doors = \App\Door::find($record->id);
		if (is_null($doors)){
			$status = 'door not found';
		}else{
		    $input = Input::get();
			$doors->name = $input['name'];
			$doors->price = $input['price'];
			$doors->material = $input['material'];
			$doors->height = $input['height'];
			$doors->width = $input['width'];
			$doors->description = $input['description'];
			$doors->image_link1 = $input['image_link1'];
			$doors->image_link2 = $input['image_link2'];
			$doors->image_link3 = $input['image_link3'];
			$doors->image_link4 = $input['image_link4'];
			$doors->image_link5 = $input['image_link5'];
			$doors->save();
			$status = 'success';
		return response()->json($status);
		}
	}
	public function deleteDoor($id) {
		$doors = \App\Door::find($id);
		if (is_null($doors)){
			$status = 'door not found';
		}else{
			$doors->delete();
			$status = 'success';
		}
		return response()->json($status);
	}

}
