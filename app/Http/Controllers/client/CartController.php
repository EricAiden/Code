<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $viewcart = DB::table('viewcart')->get();
        //$danhmucs = DB::table('danhmucsanphams')->paginate(5);
        return view('front.cart.ViewCart', [
            'viewcart' => $viewcart,
        ]);
    }
}