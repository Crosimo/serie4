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
}
