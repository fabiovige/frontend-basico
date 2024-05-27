<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeExampleComtroller extends Controller
{
    public function index()
    {
        $user = [
            'id' => 2,
            'admin' => false,
            'name' => 'Fabio Vige',
            'sobrenome' => '',
            'bio' => "<p>Simplicidade e <strong>funcionalidade</strong> caminham juntos!</p>"
        ];
        return view('index', [
            'user' => $user
        ]);
    }
}
