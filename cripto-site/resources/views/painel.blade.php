{{-- resources/views/dashboard.blade.php --}}
@extends('layout.dashboard')

@section('title', 'Painel')

@section('content')
<div class="container-fluid py-4">
  <h2 class="fw-bold mb-4">Painel</h2>

  <h5 class="mb-3">Visão Geral</h5>
  <div class="row mb-5">
    <div class="col-md-4">
      <div class="bg-secondary text-white p-4 rounded">
        <h6 class="text-uppercase">Valor Total</h6>
        <h3 class="fw-bold">$12,345.67</h3>
        <small class="text-success">+12%</small>
      </div>
    </div>
    <div class="col-md-4">
      <div class="bg-secondary text-white p-4 rounded">
        <h6 class="text-uppercase">Lucro/Perda Realizado</h6>
        <h3 class="fw-bold">$890.12</h3>
        <small class="text-danger">-5%</small>
      </div>
    </div>
    <div class="col-md-4">
      <div class="bg-secondary text-white p-4 rounded">
        <h6 class="text-uppercase">Lucro/Perda Não Realizado</h6>
        <h3 class="fw-bold">$345.67</h3>
        <small class="text-success">+2%</small>
      </div>
    </div>
  </div>

  <h5 class="mb-3">Ativos</h5>
  <div class="table-responsive">
    <table class="table table-dark table-bordered rounded">
      <thead>
        <tr>
          <th>Ativo</th>
          <th>Quantidade</th>
          <th>Valor Atual</th>
          <th>Valor Total</th>
          <th>Lucro/Perda</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Bitcoin</td><td>1.234</td><td>$25,000</td><td>$30,850</td><td class="text-success">+$5,850</td></tr>
        <tr><td>Ethereum</td><td>10.5</td><td>$1,800</td><td>$18,900</td><td class="text-success">+$3,900</td></tr>
        <tr><td>Litecoin</td><td>50</td><td>$100</td><td>$5,000</td><td class="text-danger">-$500</td></tr>
        <tr><td>Ripple</td><td>1000</td><td>$0.50</td><td>$500</td><td class="text-danger">-$100</td></tr>
        <tr><td>Cardano</td><td>500</td><td>$0.40</td><td>$200</td><td class="text-danger">-$50</td></tr>
      </tbody>
    </table>
  </div>
</div>
@endsection