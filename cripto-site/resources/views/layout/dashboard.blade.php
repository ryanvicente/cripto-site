{{-- resources/views/layouts/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Painel') - CoinTracker</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <style>
    body {
      background-color: #111418;
      color: #f8f9fa;
    }
    .sidebar {
      background-color: #1c1f23;
      height: 100vh;
      padding-top: 1rem;
    }
    .sidebar a {
      color: #adb5bd;
      text-decoration: none;
      display: block;
      padding: 0.75rem 1rem;
      border-radius: 0.5rem;
    }
    .sidebar a.active, .sidebar a:hover {
      background-color: #2a2d32;
      color: #fff;
    }
    .content {
      padding: 2rem;
    }
    .card-dark {
      background-color: #1f2227;
      border: none;
      border-radius: 0.75rem;
      padding: 1.5rem;
      color: #fff;
    }
    .table-dark-custom th,
    .table-dark-custom td {
      background-color: #1f2227;
      border-color: #2a2d32;
      color: #dee2e6;
    }
  </style>
</head>
<body>
  <div class="d-flex">
    <nav class="sidebar d-flex flex-column p-3">
      <div class="mb-4 text-center">
        <img src="https://via.placeholder.com/48" class="rounded-circle mb-2" alt="User Icon">
        <p>Bem vindo(a) {{session('usuario_logado.name')}}</p>
        <h5>CoinTracker</h5>
      </div>
      <a href="{{ route('painel') }}" class="{{ request()->routeIs('painel') ? 'active' : '' }}"><i class="bi bi-house-door me-2"></i>Painel</a>
      <a href="{{ route('carteira') }}" class="{{ request()->routeIs('carteira') ? 'active' : '' }}"><i class="bi bi-wallet2 me-2"></i>Carteiras</a>
      <a href="{{ route('transacao') }}" class="{{ request()->routeIs('transacao') ? 'active' : '' }}"><i class="bi bi-arrow-left-right me-2"></i>Transações</a>
      <a href="{{ route('relatorio') }}" class="{{ request()->routeIs('relatorios') ? 'active' : '' }}"><i class="bi bi-file-earmark-text me-2"></i>Relatórios</a>
      <a href="{{ route('configuracoes') }}" class="{{ request()->routeIs('configuracoes') ? 'active' : '' }}"><i class="bi bi-gear me-2"></i>Configurações</a>
    </nav>

    <div class="content flex-grow-1 content-overflow ">
      <p>classe logada: {{session('usuario_logado')}}</p>   
      @yield('content')
    </div>
  </div>
</body>
</html>
