<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\MenuController;

class RestaurantController extends Controller
{
    public function index(Request $request){
        $items = Restaurant::all();
        return view('restaurant.index',['items' => $items]);
    }
    
    public function search(Request $request,$restaurant){
        //$restaurant = $request->session()->get('restaurant');
        $items = Restaurant::where('name','like',$restaurant.'%')->get();
        return view('restaurant.search',['items' => $items]);
    }
}
