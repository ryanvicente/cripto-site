@extends('layout.layout')

@section('title', 'Criar Conta')

@section('content')
<main class="container d-flex flex-column align-items-center justify-content-center py-5">
  <h2 class="mb-4 fw-bold text-center">Crie sua conta</h2>

  <form method="POST" action="{{ route('guardar_usuario') }}" class="w-100" style="max-width: 400px;">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" class="form-control bg-secondary text-white border-0" id="name" name="name"required autofocus>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control bg-secondary text-white border-0" id="email" name="email" placeholder="seuemail@email.com" required >
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Senha</label>
      <input type="password" class="form-control bg-secondary text-white border-0" id="password" name="password" required>
    </div>

    <div class="mb-4">
      <label for="password_confirmation" class="form-label">Confirme sua senha</label>
      <input type="password" class="form-control bg-secondary text-white border-0" id="password_confirmation" name="password_confirmation" required>
    </div>

    <div class="d-grid mb-3">
      <button type="submit" class="btn btn-primary rounded-pill">Criar conta</button>
    </div>

    <p class="text-center text-muted small">
      Ao criar uma conta, você concorda com nossos <a href="#" class="text-decoration-underline text-light">Termos de Serviço</a> e <a href="#" class="text-decoration-underline text-light">Política de Privacidade</a>
    </p>

    <p class="text-center mt-3">
      Já tem uma conta? <a href="{{ route('login') }}" class="text-decoration-underline text-light">Entrar</a>
    </p>
  </form>
</main>
@endsection
