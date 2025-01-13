<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;


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
        $title = "Criar categoria";
        return view('dashboard.category.create', compact('title'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image_1' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:10240', 
        ]);

        $imagePath = null;
        if ($request->hasFile('image_1') && $request->file('image_1')->isValid()) {
            $imagePath = $request->file('image_1')->store('categories', 'public');
        }

        $category = Category::create([
            'name' => $validatedData['name'],  
        ]);

        if ($request->hasFile('image_1') && $request->file('image_1')->isValid()) {
            $imagePath = $request->file('image_1')->store('categories', 'public');
    
            ProductImage::create([
                'category_id' => $category->id,  
                'image_path' => str_replace('public/', '', $imagePath), 
            ]);
        }

        return redirect()->route('category')->with('success', 'Categoria criada com sucesso!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $imagePaths = $category->images->pluck('image_path')->toArray();

        foreach ($imagePaths as $imagePath) {
            if (Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }
        }
        $directory = 'public/images/category/' . $category->id; 
        if (Storage::exists($directory) && count(Storage::files($directory)) == 0) {
            Storage::deleteDirectory($directory);
        }

        $category->delete();

        return redirect()->route('category')->with('success', 'Categoria deletada com sucesso!');
    }
}
