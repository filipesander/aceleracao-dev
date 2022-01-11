<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStoreAssinaturaRequest;
use App\Models\Assinatura;

class AssinaturaController extends Controller
{
    public function listagemAss()
    {
        $assinaturas = Assinatura::all();

        return view('assinaturas.listagemAss', compact('assinaturas'));
    }

    public function exibeAss($id)
    {
        $assinatura = Assinatura::find($id);

        return view('assinaturas.exibeAss', compact('assinatura'));
    }

    public function novaAss()
    {
        return view('assinaturas.novoAss');
    }

    public function insereAss(UpdateStoreAssinaturaRequest $request)
    {
        Assinatura::create($request->all());

        return redirect()->route('listagemAss')->with('success', 'Assinatura criada com sucesso!');
    }


    public function removeDoc($id)
    {
        Assinatura::find($id)->delete();

        return redirect()->route('listagemAss')->with('success', 'Assinatura removido com sucesso!');
    }
}
