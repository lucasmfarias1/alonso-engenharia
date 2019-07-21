@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2>Clientes</h2>
                <a href="/cliente/create" class="btn btn-primary">Novo Cliente</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Razão Social</th>
                        <th>Nome Fantasia</th>
                        <th>CNPJ</th>
                        <th>Endereço</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Nome do Responsável</th>
                        <th>CPF</th>
                        <th>Celular</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->razao_social }}</td>
                            <td>{{ $cliente->nome_fantasia }}</td>
                            <td>{{ $cliente->cnpj }}</td>
                            <td>{{ $cliente->endereco }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->telefone }}</td>
                            <td>{{ $cliente->nome_responsavel }}</td>
                            <td>{{ $cliente->cpf }}</td>
                            <td>{{ $cliente->celular }}</td>
                            <td>
                                <a href="/cliente/edit/{{ $cliente->id }}">
                                    <strong>E</strong>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
