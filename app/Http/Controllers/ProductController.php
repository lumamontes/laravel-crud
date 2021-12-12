<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
     $produtos = \App\Models\Product::all();
     return view('produtos', ['produtos' => $produtos] );
    } 

   public function listar()
   {
    $produtos = \App\Models\Product::all();
    return view('produtos', ['produtos' => $produtos] );
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
