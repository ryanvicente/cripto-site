{{-- resources/views/auth/login.blade.php --}}
@extends('layout.layout')

@section('title', 'Entrar')

@section('content')
<main class="container d-flex flex-column align-items-center justify-content-center py-5">
  <h2 class="mb-4 fw-bold text-center">Bem-vindo de volta</h2>

  <form method="POST" action="{{ route('login') }}" class="w-100" style="max-width: 400px;">
    @csrf
    <div class="mb-3">
      <input type="email" class="form-control bg-secondary text-white border-0" id="email" name="email" placeholder="Email" required autofocus>
    </div>

    <div class="mb-2">
      <input type="password" class="form-control bg-secondary text-white border-0" id="password" name="password" placeholder="Senha" required>
    </div>

    <div class="mb-3 text-start">
      {{--<a href="{{ route('password.request') }}" class="text-decoration-underline text-light small">Esqueceu sua senha?</a>--}}
    </div>

    <div class="d-grid mb-3">
      <button type="submit" class="btn btn-primary rounded-pill">Entrar</button>
    </div>

    <p class="text-center mt-3">
      <p class="text-center mt-3">Não tem uma conta? 
      <a href="{{ route('register') }}" class="text-decoration-underline text-light small">Inscreva-se</a>
    </p>
  </form>
</main>
@endsection