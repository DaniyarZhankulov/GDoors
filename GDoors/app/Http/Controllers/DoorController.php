<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Door;

use GuzzleHttp\Client;

class DoorController extends Controller
{
	public function index() {
    	$client = new Client(['base_uri' => 'http://localhost/GDoors/public/api']);
    	$doors = json_decode($client->get('api/showDoors')->getBody())->doors;
	    return view('door', compact('doors'));
	}
	public function show($id) {
    	$client = new Client(['base_uri' => 'http://localhost/GDoors/public/api']);
    	$doors = json_decode($client->get('api/showDoors/' .$id)->getBody())->doors;
	    return view('door', compact('doors'));
	}
	public function create() {
	    $input = Input::get();
    	$client = new Client(['base_uri' => 'http://localhost/GDoors/public/api']);
    	$doors = json_decode($client->get('api/createDoor', $input)->getBody())->doors;
	    return view('index');
	}
	public function update($record) {
	    $input = Input::get();
    	$client = new Client(['base_uri' => 'http://localhost/GDoors/public/api']);
    	$doors = json_decode($client->get('api/updateDoor/' .$record, $input)->getBody())->doors;
	    return view('index');
	}
	public function delete($id) {
    	$client = new Client(['base_uri' => 'http://localhost/GDoors/public/api']);
    	$doors = json_decode($client->get('api/deleteDoor/' .$id)->getBody());
	    return view('index');
	}
}