<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
    	return view('search');
    }
    public function autocomplete(Request $request){
    	$data=Item_model::select("regions")
    	->where("name","LIKE","%($request->input('regions')}%")->get;
    	return response()->json($data);
    }
}
