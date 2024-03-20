<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function erro()
    {
        return view('pages.telaDeErro');
    }

    public function cadastro()
    {
        return view('pages.cadastro');
    }

    public function login()
    {
        return view('pages.logn');
    }

    public function inicio()
    {
        return view('pages.telaDeInicio');
    }

    public function contatos()
    {
        return view('pages.contatos');
    }

    public function produto()
    {
        return view('pages.produto');
    }

    public function produtobone()
    {
        return view('pages.produtobone');
    }
}
