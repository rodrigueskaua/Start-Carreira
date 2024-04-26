@extends('layouts.main')
@section('title', 'Criar Curriculo')
@section('current-page-name', 'Criar Curriculo')
@section('content')
<section class="gerador">
  <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="titulo mb-5">Gerador De Currículo</h1>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-12 col-lg-2 mb-2">
          <label class="picture" for="picture-input">
              <span class="picture-image">
                <img src="/assets/img/icons/defaultCurriculo.svg" class="picture-image">
              </span>
          </label>
          <input required type="file" accept="image/*" name="picture-input" id="picture-input" />
      </div>
 
      <div class="col-12 col-lg-10 mb-2">
        <div class="form-floating mb-2">
          <input type="text" class="form-control" id="nome" name="nome" placeholder="">
          <label for="nome">Nome</label>
        </div>
        <div class="form-floating mb-2">
          <input type="text" class="form-control" id="titulo" name="titulo" placeholder="">
          <label for="titulo">Título</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control" id="email" name="email" placeholder="">
          <label for="email">Email</label>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-12 mb-2">
        <div class="form-floating mb-2">
          <input type="text" class="form-control" id="telefone" name="telefone" placeholder="">
          <label for="telefone">Telefone</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="idade" name="idade" placeholder="">
          <label for="idade">Idade</label>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-12 col-lg-3 mb-2">
        <div class="form-floating">
          <input type="text" class="form-control" id="cep" name="cep" placeholder="">
          <label for="cep">CEP</label>
        </div>
      </div>
      
      <div class="col-12 col-lg-3 mb-2">
        <div class="form-floating">
          <input type="text" class="form-control" id="estado" name="estado" placeholder="">
          <label for="estado">Estado</label>
        </div>
      </div>
      
      <div class="col-12 col-lg-3 mb-2">
        <div class="form-floating">
          <input type="text" class="form-control" id="cidade" name="cidade" placeholder="">
          <label for="cidade">Cidade</label>
        </div>
      </div>
      
      <div class="col-12 col-lg-3 mb-2">
        <div class="form-floating">
          <input type="text" class="form-control" id="bairro" name="bairro" placeholder="">
          <label for="bairro">Bairro</label>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-12 mb-2">
        <div class="form-floating mb-2">
          <textarea class="form-control" id="tecnologiascampo" name="tecnologias" placeholder=""></textarea>
          <label for="tecnologias">Habilidades</label>
        </div>
      
        <div class="form-floating mb-2">
          <textarea class="form-control" id="formacao" name="formacao" placeholder=""></textarea>
          <label for="formacao">Formação Acadêmica</label>
        </div>
      
        <div class="form-floating">
          <textarea class="form-control" id="resumo-profissional" name="resumo-profissional" placeholder=""></textarea>
          <label for="resumo-profissional">Resumo Profissional</label>
        </div>          
      </div>
    </div>
    
    <div class="row mb-4">
      <div class="col-12 mb-2">
        <div class="form-floating mb-2">
          <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="">
          <label for="linkedin">LinkedIn</label>
        </div>
        
        <div class="form-floating mb-2">
          <input type="text" class="form-control" id="github" name="github" placeholder="">
          <label for="github">GitHub</label>
        </div>
        
        <div class="form-floating mb-2">
          <input type="text" class="form-control" id="informacoes-complementares" name="informacoes-complementares" placeholder="">
          <label for="informacoes-complementares">Informações Complementares</label>
        </div>
      </div>
    </div>
    
    <div class="row btn-group-lg">
      <div class="col-12 col-lg-6 mb-3">
        <a class="btn btn-secondary w-100">Gerar Currículo</a>
      </div>
      <div class="col-12 col-lg-6 mb-2">
        <a class="btn btn-primary w-100">Baixar PDF</a>
      </div>
    </div> 
  </div>
</section>
@endsection
