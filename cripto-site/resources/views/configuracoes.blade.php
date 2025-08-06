@extends('layout.dashboard')

@section('content')
<div class="min-h-screen bg-gray-900 text-white  overflow-y-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Configurações</h1>

    <div class="space-y-8">
        <!-- Geral -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Geral</h2>
            <ul class="space-y-4">
                <li class="flex justify-between">
                    <div>
                        <div class="font-medium">Nome</div>
                        <div class="text-sm text-gray-400">Atualize seu nome e sobrenome</div>
                    </div>
                    <a href="#" class="text-indigo-400 hover:underline">Editar</a>
                </li>
                <li class="flex justify-between">
                    <div>
                        <div class="font-medium">E-mail</div>
                        <div class="text-sm text-gray-400">Atualize seu endereço de e-mail</div>
                    </div>
                    <a href="#" class="text-indigo-400 hover:underline">Editar</a>
                </li>
                <li class="flex justify-between">
                    <div>
                        <div class="font-medium">Senha</div>
                        <div class="text-sm text-gray-400">Atualize sua senha</div>
                    </div>
                    <a href="#" class="text-indigo-400 hover:underline">Editar</a>
                </li>
                <li class="flex justify-between">
                    <div>
                        <div class="font-medium">Telefone</div>
                        <div class="text-sm text-gray-400">Atualize seu número de telefone</div>
                    </div>
                    <a href="#" class="text-indigo-400 hover:underline">Editar</a>
                </li>
            </ul>
        </div>

        <!-- Segurança -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Segurança</h2>
            <ul class="space-y-4">
                <li class="flex justify-between">
                    <div>
                        <div class="font-medium">Dispositivos</div>
                        <div class="text-sm text-gray-400">Gerencie seus dispositivos conectados</div>
                    </div>
                    <a href="#" class="text-indigo-400 hover:underline">Gerenciar</a>
                </li>
                <li class="flex justify-between">
                    <div>
                        <div class="font-medium">Autenticação de dois fatores</div>
                        <div class="text-sm text-gray-400">Configure a autenticação de dois fatores</div>
                    </div>
                    <a href="#" class="text-indigo-400 hover:underline">Configurar</a>
                </li>
            </ul>
        </div>

        <!-- Notificações -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Notificações</h2>
            <ul>
                <li class="flex items-center justify-between">
                    <div>
                        <div class="font-medium">Notificações por e-mail</div>
                        <div class="text-sm text-gray-400">Receba notificações por e-mail sobre atividades da conta</div>
                    </div>
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-indigo-500">
                </li>
            </ul>
        </div>

        <!-- Preferências -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Preferências</h2>
            <ul class="space-y-4">
                <li class="flex justify-between">
                    <div>
                        <div class="font-medium">Idioma</div>
                        <div class="text-sm text-gray-400">Escolha seu idioma preferido</div>
                    </div>
                    <a href="#" class="text-indigo-400 hover:underline">Editar</a>
                </li>
                <li class="flex justify-between">
                    <div>
                        <div class="font-medium">Moeda</div>
                        <div class="text-sm text-gray-400">Escolha sua moeda preferida</div>
                    </div>
                    <a href="#" class="text-indigo-400 hover:underline">Editar</a>
                </li>
            </ul>
        </div>

        <!-- Privacidade -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Privacidade</h2>
            <ul>
                <li class="flex justify-between">
                    <div>
                        <div class="font-medium">Privacidade</div>
                        <div class="text-sm text-gray-400">Gerencie suas configurações de privacidade</div>
                    </div>
                    <a href="#" class="text-indigo-400 hover:underline">Gerenciar</a>
                </li>
            </ul>
        </div>

        <!-- Sobre -->
        <div>
            <h2 class="text-xl font-semibold mb-4">Sobre</h2>
            <ul class="space-y-4">
                <li class="flex justify-between">
                    <div>
                        <div class="font-medium">Termos de serviço</div>
                        <div class="text-sm text-gray-400">Veja os termos de serviço</div>
                    </div>
                    <a href="#" class="text-indigo-400 hover:underline">Ver</a>
                </li>
                <li class="flex justify-between">
                    <div>
                        <div class="font-medium">Política de privacidade</div>
                        <div class="text-sm text-gray-400">Veja a política de privacidade</div>
                    </div>
                    <a href="#" class="text-indigo-400 hover:underline">Ver</a>
                </li>
                <li class="flex justify-between items-center">
                    <div>
                        <div class="font-medium">Versão</div>
                        <div class="text-sm text-gray-400">Veja a versão do aplicativo</div>
                    </div>
                    <div class="text-gray-400">1.0.0</div>
                </li>
            </ul>
        </div>

        <!-- Botão Sair -->
        <div class="pt-6">
            <button class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded text-white">Sair</button>
        </div>
    </div>
</div>
@endsection
