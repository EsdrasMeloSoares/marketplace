<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categorias = Category::inRandomOrder()->take(8)->get();
        return view('home.index', compact('categorias'));
    }
}
