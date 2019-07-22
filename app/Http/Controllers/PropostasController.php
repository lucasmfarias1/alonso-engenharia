<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Proposta;
use App\Exports\PropostasExport;
use \Maatwebsite\Excel\Facades\Excel;

class PropostasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $propostas = Proposta::all();
        return view('propostas.index', compact('propostas'));
    }

    public function create()
    {
        $clientes = \App\Cliente::all();
        return view('propostas.create', compact('clientes'));
    }

    public function store()
    {
        $data = request()->validate([
            'cliente_id'          => 'required|exists:clientes,id',
            'endereco_obra'       => 'required|max:100',
            'vl_total'            => 'required|numeric',
            'sinal'               => 'required|max:100',
            'qt_parcelas'         => 'required|numeric',
            'vl_parcelas'         => 'required|numeric',
            'dt_inicio_pagamento' => 'required|date',
            'dt_parcelas'         => 'required|date',
            'arquivo'             => 'required',
            'status'              => 'required|boolean'
        ]);

        $filePath = request('arquivo')->store('uploads', 'public');
        $fileArray= ['arquivo' => $filePath];

        $cliente = \App\Cliente::find(request('cliente_id'));

        $cliente->propostas()->create(array_merge(
            $data,
            $fileArray
        ));

        return redirect('/proposta');
    }

    public function edit(Proposta $proposta)
    {
        $clientes = \App\Cliente::all();
        return view('propostas.edit', compact('proposta', 'clientes'));
    }

    public function update(Proposta $proposta)
    {
        $data = request()->validate([
            'cliente_id'          => 'required|exists:clientes,id',
            'endereco_obra'       => 'required|max:100',
            'vl_total'            => 'required|numeric',
            'sinal'               => 'required|max:100',
            'qt_parcelas'         => 'required|numeric',
            'vl_parcelas'         => 'required|numeric',
            'dt_inicio_pagamento' => 'required|date',
            'dt_parcelas'         => 'required|date',
            'arquivo'             => '',
            'status'              => 'required|boolean'
        ]);

        if (request('arquivo')) {
            $filePath = request('arquivo')->store('uploads', 'public');
            $fileArray= ['arquivo' => $filePath];
        }

        $proposta->update(array_merge(
            $data,
            $fileArray ?? []
        ));

        return redirect('/proposta');
    }

    public function destroy(Proposta $proposta)
    {
        $proposta->delete();
        return redirect('/proposta');
    }

    public function export()
    {
        return Excel::download(new PropostasExport, 'propostas.xlsx');
    }
}
