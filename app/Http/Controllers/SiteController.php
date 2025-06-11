<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homePage()
    {
        return view('site.home.index');
    }

    public function detalhesProduto()
    {
        return view('site.products.show');
    }
}
