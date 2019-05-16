<?php

namespace App\Http\Controllers\Admin;

use App\Mail\SendMailUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    function index()
    {
        $param = false;
        return view('contato', compact('param'));
    }

    function planos()
    {
        $param = false;
        return view('contatoplanos', compact('param'));
    }

    function enviaAvisoContato(Request $request)
    {
        Mail::to('contato@spacecode.tech')
            ->send(new SendMailUser($request->all()));
        $param = true;
        return view('home', compact('param'));
    }

    function enviaAvisoContato2(Request $request)
    {
        Mail::to('contato@spacecode.tech')
            ->send(new SendMailUser($request->all()));
        $param = true;
        return view('contato', compact('param'));
    }
}
