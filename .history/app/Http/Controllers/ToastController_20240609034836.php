<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToastController extends Controller
{
    public function success($message)
    {
        return view('components.toast', ['slot' => $message]);
    }
}
