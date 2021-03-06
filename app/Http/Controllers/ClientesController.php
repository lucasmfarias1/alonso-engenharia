<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store()
    {
        $data = request()->validate([
            'razao_social'     => 'required|max:100',
            'nome_fantasia'    => 'required|max:100',
            'cnpj'             => 'required|max:100',
            'endereco'         => 'required|max:100',
            'email'            => 'required|max:100|email',
            'telefone'         => 'required|max:100',
            'nome_responsavel' => 'required|max:100',
            'cpf'              => 'required|max:100',
            'celular'          => 'required|max:100'
        ]);

        $cliente = Cliente::create($data);

        return redirect('/cliente');
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Cliente $cliente)
    {
        $data = request()->validate([
            'razao_social'     => 'required|max:100',
            'nome_fantasia'    => 'required|max:100',
            'cnpj'             => 'required|max:100',
            'endereco'         => 'required|max:100',
            'email'            => 'required|max:100|email',
            'telefone'         => 'required|max:100',
            'nome_responsavel' => 'required|max:100',
            'cpf'              => 'required|max:100',
            'celular'          => 'required|max:100'
        ]);

        $cliente = $cliente->update($data);

        return redirect('/cliente');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect('/cliente');
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }
}
