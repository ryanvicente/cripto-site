@extends('layout.layout')
@section('content')
{{-- resources/views/welcome.blade.php --}}
  <section class="text-center py-5 bg-secondary bg-gradient">
    <div class="container">
      <h1 class="display-5 fw-bold">Impostos de criptomoedas fáceis</h1>
      <p class="lead">Acompanhe, calcule e declare seus impostos de criptomoedas em minutos. Comece gratuitamente.</p>
      <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Começar</a>
    </div>
  </section>

  <section class="py-5">
    <div class="container text-center">
      <h2 class="mb-4">Por que escolher a CryptoTax?</h2>
      <p class="mb-5">Nossa plataforma simplifica o processo de declaração de impostos de criptomoedas, oferecendo precisão, segurança e economia de tempo.</p>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="p-4 border rounded bg-light text-dark h-100">
            <h4>Cálculos precisos</h4>
            <p>Cálculos precisos de impostos para todas as suas transações de criptomoedas.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 border rounded bg-light text-dark h-100">
            <h4>Segurança de dados</h4>
            <p>Seus dados são protegidos com criptografia de ponta a ponta.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 border rounded bg-light text-dark h-100">
            <h4>Economia de tempo</h4>
            <p>Gere seus relatórios fiscais em minutos, não em horas.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-secondary" id="como-funciona">
    <div class="container text-center">
      <h2 class="mb-4">Como funciona</h2>
      <p class="mb-5">A CryptoTax simplifica o processo de declaração de impostos de criptomoedas em três etapas fáceis.</p>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="p-4 bg-light text-dark rounded h-100">
            <h5>Conecte suas carteiras e exchanges</h5>
            <p>Conecte suas carteiras e exchanges para importar automaticamente suas transações.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 bg-light text-dark rounded h-100">
            <h5>Revise suas transações</h5>
            <p>Revise suas transações e corrija quaisquer erros ou omissões.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 bg-light text-dark rounded h-100">
            <h5>Gere seus relatórios fiscais</h5>
            <p>Gere seus relatórios fiscais em minutos e declare seus impostos com confiança.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
