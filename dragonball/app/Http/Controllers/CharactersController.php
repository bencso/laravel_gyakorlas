<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class CharactersController extends Controller
{
    public $API_URL = "https://dragonball-api.com/api/";

    function index($page = 1,$limit=10){
        $page = (int) request()->query('page', 1);
        $limit = (int) request()->query('limit', 10);
        $response = Http::get("{$this->API_URL}characters?page={$page}&limit={$limit}");

        return view("fooldal", [
            "page" => $page,
            "items" => $response->json()["items"],
            "next" => [Str::length($response->json()["links"]["next"])>0, $this->responseUrl($page+1, $limit)],
            "previous" => [Str::length($response->json()["links"]["previous"])>0, $this->responseUrl($page-1, $limit)],
            "pageLimit" => $response->json()["meta"]["totalItems"]
        ]);
    }
    function responseUrl($page,$limit){
         $response_url = "/";

        if($page>1) $response_url = $response_url."?page={$page}";
        else if($limit>10) $response_url = $response_url."?limit={$limit}";
        if($limit>10)$response_url = $response_url."&limit={$limit}";

        return $response_url;
    }
}
