<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listar()
    {
     $categories = \App\Models\Category::all();
     return view('categorias', ['categories' => $categories] );
    }

    public function create()
    {
     $produtos = \App\Models\Product::all();
     return view('produtos', ['produtos' => $produtos] );
    }
 
    public function update()
    {
     $produtos = \App\Models\Product::all();
     return view('produtos', ['produtos' => $produtos] );
    }
 
    public function delete()
    {
     $produtos = \App\Models\Product::all();
     return view('produtos', ['produtos' => $produtos] );
    }
}
