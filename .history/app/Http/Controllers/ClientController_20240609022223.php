<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function addClient(string $name, int $number)
    {
        Client::updateOrCreate(['name' => $name], [
            'number' => $number,
            'debit' => 0,
        ]);

        return redirect()->route('home');
    }
}
