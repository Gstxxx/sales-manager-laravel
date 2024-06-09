<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function addClient(string $name, int $number)
    {
        if (Str::length($name) > 0)
            Client::updateOrCreate(['name' => $name], [
                'number' => $number,
                'debit' => 0,
            ]);

        return redirect()->route('home');
    }
}
