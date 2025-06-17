<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class PainelClienteController extends Controller
{
    public function index()
    {
        return view('clientes.painel.index');
    }
    public function pedidos()
    {
        return 'PEDIDOS';
    }
    public function perfil()
    {
        return 'PERFIL';
    }
}
