<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- Header Icon --}}
    <link rel="icon" href="/assets/img/brand/favicon.svg">
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <!-- Main CSS -->
    {{-- CSS Main--}}
    <link rel="stylesheet" href="/css/main.css">
    {{-- Box Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- AOS  --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    {{-- Script CDN SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
  <body>

    <div class="container-fluid main-login">
      <div class="row min-vh-100">
        <div class="col-lg-12 d-flex justify-content-center align-items-center">
          <div class="card-login-register @yield('card-class')">
            <div class="brand mb-4 d-flex justify-content-center align-items-center">
              <img src="/assets/img/brand/favicon.svg">
              <h3>Start Carreira</h3>
            </div>

            <form action="@yield('form-action')" method="post" class="form">
                @csrf

              @yield('content')

            </form>
            <div class="@yield('sign-class') text-center">
              <p>@yield('sign-question-text')</p>
              <a href="@yield('sign-link')">@yield('sign-link-text')</a>
            </div>
          </div>
        </div>
      </div>
      </div>
      {{-- Script CDN Bootstrap --}}
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
  </body>
</html>
