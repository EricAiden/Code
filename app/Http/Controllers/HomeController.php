<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table('product')->get();
        // $products = array(1,2,3,4,5);
        return view('home', ['products'=>$products]);
    }
}
