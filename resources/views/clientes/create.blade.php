@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <h2>Novo Cliente</h2>
            <form action="/cliente" method="post">
                @csrf

                <div class="form-group">
                    <label for="razao_social">Razão Social</label>
                    <input
                        type="text" name="razao_social"
                        id="razao_social" class="form-control"
                        value="{{ old('razao_social') }}" required
                        autocomplete=off>
                    @error('razao_social')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nome_fantasia">Nome Fantasia</label>
                    <input
                        type="text" name="nome_fantasia"
                        id="nome_fantasia" class="form-control"
                        value="{{ old('nome_fantasia') }}" required
                        autocomplete=off>
                    @error('nome_fantasia')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="cnpj">CNPJ</label>
                    <input
                        type="text" name="cnpj"
                        id="cnpj" class="form-control"
                        value="{{ old('cnpj') }}" required
                        autocomplete=off>
                    @error('cnpj')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input
                        type="text" name="endereco"
                        id="endereco" class="form-control"
                        value="{{ old('endereco') }}" required
                        autocomplete=off>
                    @error('endereco')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="email" name="email"
                        id="email" class="form-control"
                        value="{{ old('email') }}" required
                        autocomplete=off>
                    @error('email')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input
                        type="tel" name="telefone"
                        id="telefone" class="form-control"
                        value="{{ old('telefone') }}" required
                        autocomplete=off>
                    @error('telefone')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nome_responsavel">Nome do Responsável</label>
                    <input
                        type="text" name="nome_responsavel"
                        id="nome_responsavel" class="form-control"
                        value="{{ old('nome_responsavel') }}" required
                        autocomplete=off>
                    @error('nome_responsavel')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input
                        type="text" name="cpf"
                        id="cpf" class="form-control"
                        value="{{ old('cpf') }}" required
                        autocomplete=off>
                    @error('cpf')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input
                        type="tel" name="celular"
                        id="celular" class="form-control"
                        value="{{ old('celular') }}" required
                        autocomplete=off>
                    @error('celular')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <input type="submit" value="Enviar" class="btn btn-primary">

            </form>
        </div>
    </div>
</div>
@endsection
