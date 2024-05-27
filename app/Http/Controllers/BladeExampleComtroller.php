<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeExampleComtroller extends Controller
{
    public function index()
    {
        $user = [
            'name' => 'Fabio Vige',
            'bio' => "<p>Simplicidade e <strong>funcionalidade</strong> caminham juntos!</p>"
        ];
        return view('index', [
            'user' => $user
        ]);
    }
}
