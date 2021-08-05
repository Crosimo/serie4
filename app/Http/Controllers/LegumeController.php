<?php

namespace App\Http\Controllers;

use App\Models\Legume;
use Illuminate\Http\Request;

class LegumeController extends Controller
{
    public function index(){
        $data = Legume::all();
        return view('legume', compact('data'));
    }

    public function create(){

        return view('createLegume');
    }
    // public function store(){

    //     return view('createLegume');
    // }
    public function show(Legume $id){
        $membre = $id;
        return view('showLegume', compact('membre'));
    }
}
