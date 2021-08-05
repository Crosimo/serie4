<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index(){
        $data = Fruit::all();
        return view('fruit', compact('data'));
    }
}
