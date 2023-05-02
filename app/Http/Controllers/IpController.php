<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Larinfo;

class IpController extends Controller
{
    //
    public function index()
    {
        $larinfo = Larinfo::getInfo();
        //dd($larinfo["host"]["ip"]);
        return response()->json([
            "Ip-address"=> $larinfo["host"]["ip"]
        ],201);
        //return "this is a api";
    }
}
