@extends('layouts.main')
@section('title', 'Inicio')
@section('current-page-name', 'Página Inicial')
@section('content')
<section class="pagina-desenvolvimento">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="mb-5 opacity-25">Página inicial em Desenvolvimento</h2>
        <div class="mt-4">
          <a href="{{ route('curriculo') }}" class="btn btn-lg btn-primary">Página de Currículos</a>
          <a href="{{ route('vagas') }}" class="btn btn-lg btn-secondary">Página de Vagas</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
