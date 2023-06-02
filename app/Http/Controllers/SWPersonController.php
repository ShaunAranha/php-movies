<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SWPersonController extends Controller
{


    public function index(Request $request)
    {
        $response = Http::get('https://swapi.dev/api/people/');
        $responseBody = json_decode($response->getBody());
        $characters = $responseBody->results;
        $search = $request['search'] ?? "";

        if ($search == "") {
            $response = Http::get('https://swapi.dev/api/people/1');
            $responseBody = json_decode($response->getBody());
        }


        foreach ($characters as $character) {
            if ($search == $character->name) {
                $response = Http::get($character->url);
                $responseBody = json_decode($response->getBody());
                return view('starwars', compact('search', 'responseBody'));
            } else {
                $responseBody = "";
            }
        }



        //dd($responseBody->results);
        return view('starwars', compact('search', 'responseBody'));
    }
}
