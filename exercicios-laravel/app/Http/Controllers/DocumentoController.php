<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStoreDocumentoRequest;
use App\Models\Documento;
use Illuminate\Support\Facades\Log;

class DocumentoController extends Controller
{
    public function listagemDoc()
    {
        $documentos = Documento::all();
        Log::channel('documentos')->info('Documentos consultados com sucesso');

        return view('documentos.listagemDoc', compact('documentos'));
    }

    public function exibeDoc($id)
    {
        $documento = Documento::find($id);
        Log::channel('documentos')->info('Documento exibido com sucesso');

        return view('documentos.exibeDoc', compact('documento'));
    }

    public function novoDoc()
    {
        return view('documentos.novoDoc');
    }

    public function insereDoc(UpdateStoreDocumentoRequest $request)
    {
        Documento::create($request->all());
        Log::channel('documentos')->info('Documento criado com sucesso');


        return redirect()->route('listagemDoc')->with('success', 'Documento criado com sucesso');
    }

    public function removeDoc($id)
    {
        Documento::find($id)->delete();
        Log::channel('documentos')->info('Documento removido com sucesso');

        return redirect()->route('listagemDoc')->with('success', 'Documento removido com sucesso');
    }
}
