{{-- resources/views/transactions/index.blade.php --}}
@extends('layout.dashboard')

@section('title', 'Transações')

@section('content')
<main class="container mx-auto py-10 px-4">
  <h1 class="text-3xl font-bold mb-2 text-white">Transações</h1>
  <p class="text-gray-400 mb-6">Veja e gerencie suas transações de criptomoedas.</p>

  <div class="flex space-x-4 mb-4">
    <button class="btn btn-outline-light rounded-pill px-4 py-2">Todas</button>
    <button class="btn btn-outline-light rounded-pill px-4 py-2">Importadas</button>
  </div>

  <div class="overflow-x-auto rounded-xl bg-gray-900">
    <table class="min-w-full table-auto text-sm text-left text-gray-300">
      <thead class="text-xs uppercase text-gray-400 border-b border-gray-700">
        <tr>
          <th scope="col" class="px-6 py-4">Data</th>
          <th scope="col" class="px-6 py-4">Cripto</th>
          <th scope="col" class="px-6 py-4">Tipo</th>
          <th scope="col" class="px-6 py-4">Quantidade</th>
          <th scope="col" class="px-6 py-4">Valor (USD)</th>
          <th scope="col" class="px-6 py-4">Taxa (USD)</th>
          <th scope="col" class="px-6 py-4">Notas</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b border-gray-800">
          <td class="px-6 py-4 whitespace-nowrap">15/07/2024</td>
          <td class="px-6 py-4 font-semibold text-white">BTC</td>
          <td class="px-6 py-4">Compra</td>
          <td class="px-6 py-4">0.5</td>
          <td class="px-6 py-4">15,000</td>
          <td class="px-6 py-4">50</td>
          <td class="px-6 py-4">Compra na exchange A</td>
        </tr>
        <tr class="border-b border-gray-800">
          <td class="px-6 py-4 whitespace-nowrap">16/07/2024</td>
          <td class="px-6 py-4 font-semibold text-white">ETH</td>
          <td class="px-6 py-4">Venda</td>
          <td class="px-6 py-4">2</td>
          <td class="px-6 py-4">4,000</td>
          <td class="px-6 py-4">20</td>
          <td class="px-6 py-4">Venda na exchange B</td>
        </tr>
        <tr class="border-b border-gray-800">
          <td class="px-6 py-4 whitespace-nowrap">17/07/2024</td>
          <td class="px-6 py-4 font-semibold text-white">XRP</td>
          <td class="px-6 py-4">Transferência</td>
          <td class="px-6 py-4">100</td>
          <td class="px-6 py-4">50</td>
          <td class="px-6 py-4">0</td>
          <td class="px-6 py-4">Transferência para carteira pessoal</td>
        </tr>
        <tr class="border-b border-gray-800">
          <td class="px-6 py-4 whitespace-nowrap">18/07/2024</td>
          <td class="px-6 py-4 font-semibold text-white">LTC</td>
          <td class="px-6 py-4">Compra</td>
          <td class="px-6 py-4">1</td>
          <td class="px-6 py-4">100</td>
          <td class="px-6 py-4">5</td>
          <td class="px-6 py-4">Compra na exchange C</td>
        </tr>
        <tr>
          <td class="px-6 py-4 whitespace-nowrap">19/07/2024</td>
          <td class="px-6 py-4 font-semibold text-white">ADA</td>
          <td class="px-6 py-4">Venda</td>
          <td class="px-6 py-4">50</td>
          <td class="px-6 py-4">25</td>
          <td class="px-6 py-4">1</td>
          <td class="px-6 py-4">Venda na exchange D</td>
        </tr>
      </tbody>
    </table>
  </div>
</main>
@endsection