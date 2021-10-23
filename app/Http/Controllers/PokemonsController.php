<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    // public function default()
    // {
    //     return view('home');
    // }


    public function home()
    {
        $result = DB::select("SELECT * FROM pokemons");
        $res = array_map(function ($value) {
            return (array)$value;
        }, $result);

        return view('home', compact('res'));
    }

    public function search(Request $request)
    {
        $search = $request->cari;
        $result = DB::select("SELECT * FROM pokemons WHERE name LIKE '%$search%'");
        $res = array_map(function ($value) {
            return (array)$value;
        }, $result);
        return view('home', compact('res'));
    }


    public function lowtohigh()
    {
        $result = DB::select("SELECT * FROM pokemons ORDER BY id ASC");
        $res = array_map(function ($value) {
            return (array)$value;
        }, $result);

        return view('home', compact('res'));
    }

    public function hightolow()
    {
        $result = DB::select("SELECT * FROM pokemons ORDER BY id DESC");
        $res = array_map(function ($value) {
            return (array)$value;
        }, $result);

        return view('home', compact('res'));
    }

    public function az()
    {
        $result = DB::select("SELECT * FROM pokemons ORDER BY name ASC");
        $res = array_map(function ($value) {
            return (array)$value;
        }, $result);

        return view('home', compact('res'));
    }

    public function za()
    {
        $result = DB::select("SELECT * FROM pokemons ORDER BY name DESC");
        $res = array_map(function ($value) {
            return (array)$value;
        }, $result);

        return view('home', compact('res'));
    }

    public function arrayrandom()
    {
        $result = DB::select("SELECT * FROM pokemons ORDER BY RAND()");
        $res = array_map(function ($value) {
            return (array)$value;
        }, $result);

        return view('home', compact('res'));
    }

    public function data($id = "")
    {
        $result = DB::select("SELECT * FROM pokemons where id = $id");
        $aresult = DB::select("SELECT * FROM pokemons");
        return view('detail')->with('pokemons', $result)->with('allpokemons', $aresult);
    }
}
