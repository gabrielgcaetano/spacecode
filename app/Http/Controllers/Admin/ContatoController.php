<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContatoController extends Controller
{
    function index()
    {
        return view('contato');
    }

    function enviaAvisoContato(Request $request)
    {
        Mail::to('contato@spacecode.tech')
            ->send(new SendMailUser($request->all()));
        echo 'Enviado com Sucesso!';
    }
}
