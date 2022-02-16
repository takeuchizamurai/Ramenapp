<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RamenController extends Controller
{
    public function index(Request $request){
        /*
        $items = DB::table('restaurants')->get();
        return view('ramen.index',['items' => $items]);
        */
        return view('ramen.index');

    }

    public function ses_get(Request $request){
        /*
        $sesdata = $request->session()->get('soup');
        $noodles = $request->session()->get('noodles');
        */
        return view('ramen.session');
    }

    public function ses_put(Request $request){
        $soup = $request->soup;
        $noodles = $request->noodles;
        $price = $request->price;
        $request->session()->put('soup',$soup);
        $request->session()->put('noodles',$noodles);
        $request->session()->put('price',$price);
        return redirect('menu/search');
    }
}
