@extends('layouts.auth')
@section('title', 'Login')
@section('card-class', 'card-login')
@section('form-action', '')
@section('content')
<div class="form-group mb-5">
  <label for="">Email</label><br>
  <i class="bx bx-envelope input-icon"></i>
  <input type="email" name="email" class="form-control" placeholder="Digite seu Email" required>
</div>

<div class="form-group">
  <label for="">Senha</label><br>
  <i class="bx bx-lock input-icon"></i>
  <input type="password" name="password" class="form-control" placeholder="Digite sua Senha" required>
</div>

<div class="mt-2 d-flex justify-content-between align-content-center">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" name="remember" id="remember">
    <label class="form-check-label" for="remember">
      Lembrar
    </label>
  </div>

  <div class="forgot-password">
    <a href="/">Esqueceu sua senha?</a>
  </div>
</div>

<div class="form-buttons mb-4">
  <button class="btn-login">Login</button>
  <div class="divider">
    <hr>
  </div>
  <button class="btn-google d-flex justify-content-center align-items-center"><img
      src="/assets/img/icons/google-favicon.svg" alt="" srcset="">Continue com o google</button>
</div>

@section('sign-class', 'sign-up')
@section('sign-question-text', 'Não possui uma conta?')
@section('sign-link', '')
@section('sign-link-text', 'Cadastre-se')

@endsection