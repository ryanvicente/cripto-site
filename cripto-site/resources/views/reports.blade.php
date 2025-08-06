@extends('layouts.dashboard')

@section('title', 'Relatórios Fiscais')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Relatórios fiscais</h1>
    <p class="text-gray-700 dark:text-gray-300 mb-8">
        Selecione um ano fiscal para gerar um relatório fiscal para suas atividades com criptomoedas.
    </p>

    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 max-w-lg">
        <form action="{{ route('fiscal_reports.generate') }}" method="POST" class="mb-4">
            @csrf
            <label for="fiscal_year" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Ano Fiscal:
            </label>
            <div class="relative mb-6">
                <select id="fiscal_year" name="fiscal_year" class="block w-full py-2 px-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-gray-900 dark:text-white">
                    @foreach ($fiscalYears as $year)
                        <option value="{{ $year }}" @if($year == date('Y')) selected @endif>{{ $year }}</option>
                    @endforeach
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 dark:text-gray-300">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <div class="flex space-x-4">
                <button type="submit" class="px-6 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-indigo-700 dark:hover:bg-indigo-800">
                    Gerar relatório
                </button>
            </div>
        </form>

        {{-- Formulário separado para download, para evitar conflitos de submissão --}}
    <form action="{{ route('fiscal_reports.download') }}" method="POST">
            @csrf
            {{-- Pode-se ter um select hidden ou um input para passar o ano,
                 ou o download pode ser baseado no último gerado.
                 Para simplicidade, vamos usar o mesmo ano selecionado. --}}
            <input type="hidden" name="fiscal_year_download" id="fiscal_year_download" value="{{ date('Y') }}">
            <button type="submit" class="px-6 py-2 border border-gray-300 dark:border-gray-600 text-base font-medium rounded-md text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Baixar relatório
            </button>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // Atualiza o input hidden para o download quando o ano fiscal é alterado
    document.getElementById('fiscal_year').addEventListener('change', function() {
        document.getElementById('fiscal_year_download').value = this.value;
    });
</script>
@endpush