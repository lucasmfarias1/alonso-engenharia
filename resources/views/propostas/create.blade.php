@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <h2>Nova Proposta</h2>
            <form action="/proposta" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="cliente_id">Cliente</label>
                    <select name="cliente_id" id="cliente_id"
                        class="form-control" required>
                        @foreach ($clientes as $cliente)
                            <option value="{{ $cliente->id }}">
                                {{ $cliente->nome_fantasia }}
                            </option>
                        @endforeach
                    </select>
                    @error('cliente_id')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="endereco_obra">Endereço da Obra</label>
                    <input
                        type="text" name="endereco_obra"
                        id="endereco_obra" class="form-control"
                        value="{{ old('endereco_obra') }}" required
                        autocomplete=off>
                    @error('endereco_obra')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="vl_total">Valor Total</label>
                    <input
                        type="number" step=.01 name="vl_total"
                        id="vl_total" class="form-control"
                        value="{{ old('vl_total') }}" required
                        autocomplete=off>
                    @error('vl_total')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="sinal">Sinal</label>
                    <input
                        type="text" name="sinal"
                        id="sinal" class="form-control"
                        value="{{ old('sinal') }}" required
                        autocomplete=off>
                    @error('sinal')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="qt_parcelas">Quantidade de Parcelas</label>
                    <input
                        type="number" name="qt_parcelas"
                        id="qt_parcelas" class="form-control"
                        value="{{ old('qt_parcelas') }}" required
                        autocomplete=off>
                    @error('qt_parcelas')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="vl_parcelas">Valor das Parcelas</label>
                    <input
                        type="number" step=.01 name="vl_parcelas"
                        id="vl_parcelas" class="form-control"
                        value="{{ old('vl_parcelas') }}" required
                        autocomplete=off>
                    @error('vl_parcelas')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="dt_inicio_pagamento">Data de Início do Pagamento</label>
                    <input
                        type="date" name="dt_inicio_pagamento"
                        id="dt_inicio_pagamento" class="form-control"
                        value="{{ old('dt_inicio_pagamento') }}" required
                        autocomplete=off>
                    @error('dt_inicio_pagamento')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="dt_parcelas">Data das Parcelas</label>
                    <input
                        type="date" name="dt_parcelas"
                        id="dt_parcelas" class="form-control"
                        value="{{ old('dt_parcelas') }}" required
                        autocomplete=off>
                    @error('dt_parcelas')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="arquivo">Arquivo</label>
                    <input
                        type="file" name="arquivo"
                        id="arquivo" class="form-control-file" required
                        autocomplete=off
                        accept="application/msword,application/pdf">
                    @error('arquivo')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status"
                        required class="form-control">
                        <option value=1>Em aberto</option>
                        <option value=0>Fechada</option>
                    </select>
                    @error('status')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <input type="submit" value="Enviar" class="btn btn-primary">

            </form>
        </div>
    </div>
</div>
@endsection
