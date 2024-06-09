<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function addClient(string $name, int $number)
    {
        Stock::updateOrCreate(['name' => $name], [
            'number' => $number,
            'debit' => $response->json('results.0.logourl'),
            'regularMarketChange' => $response->json('results.0.regularMarketChange'),
            'regularMarketChangePercent' => $response->json('results.0.regularMarketChangePercent'),
            'regularMarketTime' => $response->json('results.0.regularMarketTime'),
            'regularMarketPrice' => $response->json('results.0.regularMarketPrice'),
            'regularMarketPreviousClose' => $response->json('results.0.regularMarketPreviousClose'),
            'regularMarketOpen' => $response->json('results.0.regularMarketOpen'),
            'amount' => $amount,
            'paid' => $paid,
        ]);

        return redirect()->route('home');
    }
}
