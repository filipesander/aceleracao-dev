<?php

namespace App\Http\Controllers;

use App\User;
use App\Documento;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $documents = Documento::all();

        return view('exibirUsuario',[
            'users' => $users,
            'documents' => $documents
        ]);
    }

}
