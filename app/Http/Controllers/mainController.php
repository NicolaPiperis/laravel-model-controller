<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class mainController extends Controller
{
    public function index() {
        $movies = Movie :: all();

        return view('welcome', compact('movies'));
    }
}
