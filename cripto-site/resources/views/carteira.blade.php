{{-- resources/views/carteiras.blade.php --}}
@extends('layout.dashboard')

@section('title', 'Carteiras')
<form action="{{ route('binance_sincronizar') }}" method="GET">
    <button type="submit" class="btn btn-primary">Sincronizar Saldos</button>
</form>

@if (session('alerta'))
    <div class="alert alert-success mt-3">
        {{ session('alerta') }}
    </div>
@endif
@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
  <h2 class="fw-bold">Carteiras</h2>
  <button class="btn btn-outline-light rounded-pill px-4 py-2">Adicionar Carteira</button>
</div>

<div class="mb-5">
  <h5 class="fw-semibold mb-3">Carteiras Conectadas</h5>
  <div class="table-responsive">
    <table class="table table-dark table-borderless table-hover rounded">
      <thead class="border-bottom">
        <tr>
          <th>Nome</th>
          <th>Tipo</th>
          <th>Saldo</th>
          <th>Valor Atual</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Carteira de Hardware</td>
          <td><a href="#" class="text-decoration-none">Ledger</a></td>
          <td>1.2345 BTC</td>
          <td>R$ 250.000</td>
        </tr>
        <tr>
          <td>Carteira de Exchange</td>
          <td><a href="#" class="text-decoration-none">Binance</a></td>
          <td>0.5678 ETH</td>
          <td>R$ 15.000</td>
        </tr>
        <tr>
          <td>Carteira de Software</td>
          <td><a href="#" class="text-decoration-none">MetaMask</a></td>
          <td>0.1234 BTC</td>
          <td>R$ 25.000</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div>
  <h5 class="fw-semibold mb-3">Carteiras Desconectadas</h5>
  <div class="table-responsive">
    <table class="table table-dark table-borderless table-hover rounded">
      <thead class="border-bottom">
        <tr>
          <th>Nome</th>
          <th>Tipo</th>
          <th>Saldo</th>
          <th>Valor Atual</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Carteira de Hardware</td>
          <td><a href="#" class="text-decoration-none">Ledger</a></td>
          <td>0.0000 BTC</td>
          <td>R$ 0</td>
        </tr>
        <tr>
          <td>Carteira de Exchange</td>
          <td><a href="#" class="text-decoration-none">Coinbase</a></td>
          <td>0.0000 ETH</td>
          <td>R$ 0</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection