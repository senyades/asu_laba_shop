<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pages = [
            'contact' => 'Контакты',
            'about' => 'О нас',
        ];

        $message = session('message');
        // Передача массива в представление
        return view('home', ['pages' => $pages], ['message' => $message]);
    }

    public function about()
    {
        // Краткая информация о магазине
        $storeInfo = "Наш магазин предоставляет разнообразные товары высокого качества.";

        // Передача информации в представление
        return view('about', ['storeInfo' => $storeInfo]);
    }

    public function contact()
    {
        // Получение сообщения из сессии (если есть)
        $message = session('message');

        // Логика для отображения страницы с контактной информацией
        return view('contact', ['message' => $message]);
    }

    public function submitContactForm(Request $request)
    {
        // Обработка данных формы
        $message = substr($request->input('message'), 0, 160);
        $phone = preg_replace('/[^0-9]/', '', $request->input('phone'));

        // Сохранение сообщения в сессии
        $request->session()->flash('message', "Сообщение: $message, Номер телефона: $phone");

        // Возврат на главную страницу
        return redirect('/');
    }
}
