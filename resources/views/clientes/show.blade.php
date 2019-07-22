@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2>{{ $cliente->nome_fantasia }}</h2>
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
                    <tr>
                        <td>
                            <a href="/cliente/{{ $cliente->id }}">
                                {{ $cliente->razao_social }}
                            </a>
                        </td>
                        <td>{{ $cliente->nome_fantasia }}</td>
                        <td>{{ $cliente->cnpj }}</td>
                        <td>{{ $cliente->endereco }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->telefone }}</td>
                        <td>{{ $cliente->nome_responsavel }}</td>
                        <td>{{ $cliente->cpf }}</td>
                        <td>{{ $cliente->celular }}</td>
                        <td>
                            <a href="/cliente/edit/{{ $cliente->id }}"
                                class="btn btn-sm btn-success">
                                <strong>Edit</strong>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <hr class="my-5">

    <div class="row">
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2>Propostas relacionadas a {{ $cliente->nome_fantasia }}</h2>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Endereço da Obra</th>
                        <th>Valor Total</th>
                        <th>Sinal</th>
                        <th>Quantidade de Parcelas</th>
                        <th>Valor das parcelas</th>
                        <th>Data de Início do Pagamento</th>
                        <th>Data das Parcelas</th>
                        <th>Arquivo</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cliente->propostas as $proposta)
                        <tr>
                            <td>{{ $proposta->cliente->nome_fantasia }}</td>
                            <td>{{ $proposta->endereco_obra }}</td>
                            <td>{{ $proposta->vl_total }}</td>
                            <td>{{ $proposta->sinal }}</td>
                            <td>{{ $proposta->qt_parcelas }}</td>
                            <td>{{ $proposta->vl_parcelas }}</td>
                            <td>{{ $proposta->dt_inicio_pagamento }}</td>
                            <td>{{ $proposta->dt_parcelas }}</td>
                            <td>
                                <a href="/storage/{{ $proposta->arquivo }}" target="_blank">
                                    Ver Arquivo
                                </a>
                            </td>
                            <td>{{ $proposta->status ? 'Em Aberto' : 'Fechado' }}</td>
                            <td>
                                <a href="/proposta/edit/{{ $proposta->id }}"
                                    class="btn btn-sm btn-success">
                                    <strong>Edit</strong>
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
