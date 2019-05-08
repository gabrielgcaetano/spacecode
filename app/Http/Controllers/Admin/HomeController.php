<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index()
    {
    dd("aqui");
        $param = false;
        return view('principal', compact('param'));
    }
}
