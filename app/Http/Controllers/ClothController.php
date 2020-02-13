<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothe;

class ClothController extends Controller
{
    public function index() {
        $clothes = Clothe::all();
        return view('home', ['vestiti' => $clothes]);
    }
}
