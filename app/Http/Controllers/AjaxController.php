<?php

namespace App\Http\Controllers;

use App\Http\Requests\CallbackRequest;
use App\Http\Requests\ProductRequest;
use App\Mail\Callback;
use App\Mail\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AjaxController extends Controller
{
    public function callback(CallbackRequest $request)
    {
        $callbackMail = new Callback($request->validated());
        $callbackMail->subject('Задать вопрос');
        Mail::to('tsarkofff1500@yandex.ru')->send($callbackMail);
        return response()->json(['success' => true, 'message' => 'Ваше сообщение принято'], 200);
    }

    public function product(ProductRequest $request)
    {
        $productMail = new Product($request->validated());
        $productMail->subject('Получить консультацию');
        Mail::to('tsarkofff1500@yandex.ru')->send($productMail);
        return response()->json(['success' => true, 'message' => 'Ваше сообщение принято'], 200);

    }
}
