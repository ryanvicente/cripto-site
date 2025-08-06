@extends('layout.layout')
@section('content')

<div class="container">
    <h2>Vincular sua Conta Binance</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('binance_saveKeys') }}">
        @csrf

        <div class="mb-3">
            <label>API Key</label>
            <input type="text" name="api_key" class="form-control" value="{{ old('api_key', $user->binance_api_key ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label>Secret Key</label>
            <input type="text" name="secret_key" class="form-control" value="{{ old('secret_key', $user->binance_secret_key ?? '') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar e Buscar Dados</button>
    </form>
</div>
@endsection