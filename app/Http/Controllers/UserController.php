<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($email = "paashaas@lente.nl"){
    
        $user = \App\Models\User::where("email", '=', $email)-> first();

        return view('welcome',['user' => $user]);
    }

    public function products($email){
        $products = \App\Models\User::where("email","=",$email)->first()->myProducts;
        return view('products', ['products' => $products]);
    }
}
