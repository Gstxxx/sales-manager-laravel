<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function addClient(string $name, int $number)
    {
        if (Str::length($name) == 0 || is_null($number)) {
            throw "Empty name or number";
        }
        Client::updateOrCreate(['name' => $name], [
            'number' => $number,
            'debit' => 0,
        ]);

        return redirect()->route('home');
    }
}
