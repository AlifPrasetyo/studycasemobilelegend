<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperController extends Controller
{
    public function mobilelegendshero()
    {
        $json = Http::get('https://api.dazelpro.com/mobile-legends/hero')->json();
        return response()->json($json);
    }
    public function mobilelegendsspecially(){
        $json = Http::get('https://api.dazelpro.com/mobile-legends/specially')->json();
        return response()->json($json);
    }
    public function mobilelegendsrole(){
        $json = Http::get('https://api.dazelpro.com/mobile-legends/role')->json();
        return response()->json($json);
    }
    public function mobilelegendsherorolename(){
        $json = Http::get('https://api.dazelpro.com/mobile-legends/role?roleName=Marksman')->json();
        return response()->json($json);
    }
    public function mobilelegendsspeciallydamage(){
        $json = Http::get('https://api.dazelpro.com/mobile-legends/specially?speciallyName=Damage')->json();
        return response()->json($json);
    }
}