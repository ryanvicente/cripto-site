<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'CryptoTax') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
  <header class="py-3 border-bottom border-secondary">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
      <div class="fs-4 fw-bold">{{ config('app.name', 'CryptoTax') }}</div>
      <ul class="nav">
        <li class="nav-item"><a href="#como-funciona" class="nav-link text-white">Como funciona</a></li>
        <li class="nav-item"><a href="#precos" class="nav-link text-white">Preços</a></li>
        <li class="nav-item"><a href="#blog" class="nav-link text-white">Blog</a></li>
        <li class="nav-item"><a href="#ajuda" class="nav-link text-white">Ajuda</a></li>
      </ul>
      <div>
        <a href="{{ route('register') }}" class="btn btn-primary me-2">Começar</a>
        <a href="{{ route('login') }}" class="btn btn-outline-light">Entrar</a>
      </div>
    </div>
  </header>
  <p>testetestetesteteste</p>
  
  @if (session('alerta') != null)
    <div class="alert alert-primary" role="alert">
        {{ session('alerta') }}
    </div>
  @endif
  
    <p>classe logada: {{session('usuario_logado')}}</p>   
	{{--Aqui fica o conteudo --}}
	
	@yield('content')
  

    <footer class="py-4 border-top border-secondary text-center">
    <div class="container">
      <div class="mb-3">
        <a href="#" class="text-white me-3">Termos de Serviço</a>
        <a href="#" class="text-white">Política de Privacidade</a>
      </div>
      <div class="mb-3">
        <a href="#" class="text-white me-2">Twitter</a>
        <a href="#" class="text-white me-2">Instagram</a>
        <a href="#" class="text-white">GitHub</a>
      </div>
      <p class="mb-0">&copy; {{ date('Y') }} {{ config('app.name', 'CryptoTax') }}. Todos os direitos reservados.</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
