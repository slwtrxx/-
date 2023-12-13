<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function review()
    {
        $reviews = new Contact();
        return view('review', ['reviews' => $reviews->all()]);
    }

    //Нам нужно получить данные из формы
    public function review_check(Request $request)
    {
        //Указываем какие поля являются обязательными для заполнения
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500',
        ]);

        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
}
