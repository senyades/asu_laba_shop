<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Получение всех продуктов из базы данных
        $products = Products::all();

        // Передача продуктов в представление
        return view('products', ['products' => $products]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Валидация данных
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        // Создание нового продукта
        $product = new \App\Models\Products;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        // Перенаправление на страницу с созданным продуктом
        return redirect('/products')->with('success', 'Продукт успешно создан.');
    }
}
