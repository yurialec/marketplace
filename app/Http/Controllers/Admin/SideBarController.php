<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SideBarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dashboard = [
            'nome' => 'dashboard',
            'label' => 'Dashboard',
            'url' => route('admin.dashboard'),
            'icone' => 'fa-solid fa-gauge-high',
        ];

        $usuarios = [
            [
                'nome' => 'usuarios',
                'label' => 'Usuários',
                'url' => '#',
                'icone' => 'fa-solid fa-users',
                'filhos' => [
                    [
                        'nome' => 'usuarios-admin',
                        'label' => 'Usuários Admin',
                        'url' => route('admin.usuarios.index'),
                        'icone' => '',
                    ],
                    [
                        'nome' => 'clientes',
                        'label' => 'Clientes',
                        'url' => route('admin.clients.index'),
                        'icone' => '',
                    ]
                ]
            ]
        ];

        $sair = [
            'nome' => 'sair',
            'label' => 'Sair',
            'url' => route('admin.logout'),
            'icone' => 'fa fa-sign-out',
        ];

        return [
            $dashboard,
            ...$usuarios,
            $sair,
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
