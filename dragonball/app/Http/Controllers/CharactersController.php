<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class CharactersController extends Controller
{
    public $API_URL = "https://dragonball-api.com/api/";

    function index($page = 1){
        $response = Http::get("{$this->API_URL}characters?page={$page}");

        return view("fooldal", [
            "items" => $response->json()["items"],
            "next" => [Str::length($response->json()["links"]["next"])>0, $page+1],
            "previous" => [Str::length($response->json()["links"]["previous"])>0, $page-1]
        ]);
    }
}
