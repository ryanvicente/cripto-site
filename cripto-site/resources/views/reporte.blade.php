@extends('layout.dashboard')

@section('content')
<div class="p-8 text-white">
    <h1 class="text-3xl font-bold mb-2">Relatórios fiscais</h1>
    <p class="text-gray-400 mb-6">Selecione um ano fiscal para gerar um relatório fiscal para suas atividades com criptomoedas.</p>

    <div class="max-w-sm">
        <label for="anoFiscal" class="block text-white font-medium mb-2">Ano Fiscal</label>
          <select id="anoFiscal" name="anoFiscal" class="w-full form-select align-self-center">
                <option value="">Selecione um ano</option>
                <option value="2024">2024</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
              </select>
            </div>
        
                <div class="mt-6 flex space-x-4">
                    <button class="btn btn-outline-light rounded-pill px-4 py-2">Gerar relatório</button>
                    <button class="btn btn-outline-light rounded-pill px-4 py-2">Baixar relatório</button>
                </div>
            </div>
</div>
@endsection
