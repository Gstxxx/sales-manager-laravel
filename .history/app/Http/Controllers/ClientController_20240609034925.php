<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('home', compact("clients"));
    }
    public function addClient(Request $req): RedirectResponse
    {
        $name = $req->input('name-client');
        $number = $req->input('number-client');

        if (Str::length($name) == 0 || is_null($number)) {
            throw "Empty name or number";
        }

        $uuid
            = Str::uuid();
        Client::updateOrCreate(['name' => $name], [
            'uuid' => $uuid,
            'number' => $number,
            'debit' => 0,
        ]);
        return redirect('/toast')->with('success', 'Created User');
    }

    public function updateDebit(string $name, int $debit): RedirectResponse
    {
        if (Str::length($name) == 0 || is_null($debit)) {
            throw "Empty name or debit";
        }

        Client::where('name', $name)->update(['debit' => $debit]);

        return redirect()->route('home');
    }

    public function removeClient(Request $req): RedirectResponse
    {
        $name = $req->input('name-client');
        if (Str::length($name) == 0) {
            return redirect()->route('home');
        }
        Client::where('name', $name)->delete();

        return redirect()->route('home');
    }

    public function editClient(string $name, int $number): RedirectResponse
    {
        if (Str::length($name) == 0 || is_null($number)) {
            throw "Empty name or number";
        }

        Client::where('name', $name)->update(['name' => $name, 'number' => $number]);

        return redirect()->route('home');
    }
}
