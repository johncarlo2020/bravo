<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Quote;

use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function form()
    {
        return view('form');
    }

    public function quote()
    {
        $quotes = Quote::get();
        return view('quote', compact('quotes'));
    }

    public function end()
    {
        return view('end');
    }

    public function user(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return redirect()->route('quote');
    }

    public function result(Request $request)
    {
        $quote = $request->selected_quote;

        return view('result', compact('quote'));
    }
}
