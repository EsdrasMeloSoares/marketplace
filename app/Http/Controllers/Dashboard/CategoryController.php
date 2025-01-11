<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Categoria';
        
        $categorys = Category::paginate(10);
        return view('dashboard.category.index', compact('title', 'categorys'));
    }

    public function create()
    {
        return view('dashboard.category.create');
    }

    public function store(Request $request)
    {
        $categoryRule = $request->validate([
            'name' => 'required|max:25',
        ]); 

        Category::create([
            'name' => $categoryRule['name'],
        ]);

        return redirect()->route('category')->with('success', 'Categoria criado com sucesso!'); 
    }
}
