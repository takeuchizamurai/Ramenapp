<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request){
        $sort = $request->sort;
        //$items = Menu::all();
        $items = Menu::simplePaginate(10);
        $param = ['items' => $items, 'sort' => $sort];
        return view('menu.table',$param);
    }

    public function search(Request $request){
        $soup = $request->session()->get('soup');
        $noodles = $request->session()->get('noodles');
        $price = $request->session()->get('price');
        /*
        $items = Menu::where('soup','like',$soup.'%')
            ->where('noodles','like','%'.$noodles.'%')
            ->where('price','<=',$price)->get();
        */
        $sort = $request->sort;

        if($price==NULL||$price<0){
            $price=999999;
        }
        

        $items = Menu::where('soup','like',$soup.'%')
            ->where('noodles','like','%'.$noodles.'%')
            ->where('price','<=',$price)
            ->orderBy($sort,'asc')
            ->simplePaginate(10);
            
        $param = ['items' => $items, 'sort' => $sort];
        //return view('menu.index',$param);

        return view('menu.table',$param);
    }

    public function res_put(Request $request){
        $restaurant = $request->$item->getData();
        $request->session()->put('restaurant',$restaurant);
        return redirect('restaurant/search');
    }
}
