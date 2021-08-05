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


    public function create(){

        return view('createFruit');
    }

    public function store(Request $request){
        $validateDate = $request->validate([
            "name"=>"required|min:5|max:255",
            "quantité"=>"required"
        ]);
        return redirect()->back();
    }

    public function show(Fruit $id){
        $membre = $id;
        return view('showFruit', compact('membre'));
    }
}
