<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class CatalogController extends Controller
{
	public function index() {
    	$client = new Client(['base_uri' => 'http://localhost/GDoors/public/api']);
    	$doors = json_decode($client->get('api')->getBody())->doors;
	    return view('catalog', compact('doors'));	
	}
}
