<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- Header Icon --}}
    <link rel="icon" href="/assets/img/brand/favicon.svg">
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- CSS Main--}}
    <link rel="stylesheet" href="/css/main.css">
    {{-- Box Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- AOS  --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    {{-- Script CDN SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Script Dependency Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <body>
    <div class="start-page">
      <header class="header">
        <div class="header-container">
            {{-- <a href="{{  route('home') }}"  class="nav-link" href="">Voltar</a> --}}
          <span class="current-page">@yield('current-page-name')</span>
          <div class="header-toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
          </div>
        </div>
      </header>
      <div class="sidebar" id="navbar">
        <nav class="nav-container">
          <div>
            <div class="nav-link nav-logo">
              <img class="nav-brand" src="/assets/img/brand/favicon.svg">
              <span class="nav-logo-name">Start Carreira</span>
            </div>
            <div class="nav-list">
              <div class="nav-items">
                <h3 class="nav-subtitle">Navegação</h3>
                <a href="" class="nav-link">
                  <i class='bx bx-home nav-icon'></i>
                  <span class="nav-name">Início</span>
                </a>
                <a href="" class="nav-link ">
                  <i class='bx bx-edit nav-icon'></i>
                  <span class="nav-name">Criar Curriculo</span>
                </a>
                <a href="" class="nav-link ">
                  <i class='bx bx-briefcase-alt-2 nav-icon'></i>
                  <span class="nav-name">Vagas</span>
                </a>
                <a href="" class="nav-link ">
                  <i class='bx bx-book-bookmark nav-icon'></i>
                  <span class="nav-name">FAQ</span>
                </a>
              </div>

              <div class="nav-items">
                <h3 class="nav-subtitle">Tema</h3>
                <div id="darkModeToggle" class="nav-dark-mode-toggle  nav-link">
                  <i id="darkModeIcon" class='bx bx-sun nav-icon'></i>
                  <span id="darkModeName" class="nav-name">Modo Claro</span>
                </div>
              </div>
            </div>
          </div>
          <div class="nav-items nav-items-end">
            <a href="{{ route('auth.logout') }}" class="nav-link nav-logout">
              <i class='bx bx-exit bx-rotate-180 nav-icon'></i>
              <span class="nav-name">Sair</span>
            </a>
          </div>
        </nav>
      </div>
      <div class="container-fluid main-page">
        <div class="row">
          @yield('content')
        </div>
      </div>
    </div>
    {{-- Script CDN Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
    {{-- Script SideBar --}}
	  <script src="/js/sidebar.js"></script>
  </body>
</html>
