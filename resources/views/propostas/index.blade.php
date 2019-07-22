@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h2>Propostas</h2>
                <a href="/proposta/export" target="_blank" class="btn btn-secondary">Exportar Propostas</a>
                <a href="/proposta/create" class="btn btn-primary">Nova Proposta</a>
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
                    @foreach ($propostas as $proposta)
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
