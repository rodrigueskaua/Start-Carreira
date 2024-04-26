<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- Header Icon --}}
    <link rel="icon" href="/assets/brand/round-favicon.svg">
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <!-- Main CSS -->
    {{-- CSS Main--}}
    <link rel="stylesheet" href="/css/main.css">
    {{-- Box Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- AOS  --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
  <body>
    <nav class="navbar navbar-expand-xl bg-dark navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="assets/img/brand/brand.svg" alt="Logo" srcset=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="#hero">Início</a>
            <a class="nav-link" href="#sobre">Sobre</a>
            <a class="nav-link" href="#recursos">Recursos</a>
            <a class="nav-link me-5" href="#atualizacoes">Atualizações</a>
          </div>
          <div class="navbar-nav">
            <a href="#footer" class="btn btn-secondary">Contate-nos</a>
          </div>
        </div>
      </div>
    </nav>
    
    <section class="hero" id="hero">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center text-group">
              <h1 class="titulo mb-3">Os primeiros passos para o <span>Start</span> da sua <span>Carreira</span></h1>
              <h2 class="subtitulo">Desenvolva suas habilidades profissionais: simule entrevistas, crie currículos impactantes<br> e explore oportunidades de carreira personalizadas para você</h2>
            </div>
            
            <div class="buttons-group mt-5 d-flex justify-content-center gap-3">
              <a href="#" class="btn btn-primary">Comece Gratuitamente</a>
              <a href="#" class="btn btn-secondary">Veja mais</a>
            </div>         
          </div>
        </div>
      </div>
    </section>
    
    <section class="mockup">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <img class="img-fluid animate__animated animate__zoomIn" src="assets/img/mockups/hero-mockup.svg" alt="">          </div>
        </div>
      </div>
    </section>
    
    <section class="sobre" id="sobre">
      <div class="container" data-aos="fade-up">
        <div class="section-head">
          <div class="row">
            <div class="col-12 col-xl-5">
            <svg class="animated" id="freepik_stories-career-progress" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><style>svg#freepik_stories-career-progress:not(.animated) .animable {opacity: 0;}svg#freepik_stories-career-progress.animated #freepik--Floor--inject-67 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideLeft;animation-delay: 0s;}svg#freepik_stories-career-progress.animated #freepik--Shadows--inject-67 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) zoomOut;animation-delay: 0s;}svg#freepik_stories-career-progress.animated #freepik--Plants--inject-67 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideLeft;animation-delay: 0s;}svg#freepik_stories-career-progress.animated #freepik--Stairs--inject-67 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) fadeIn;animation-delay: 0s;}svg#freepik_stories-career-progress.animated #freepik--Arrow--inject-67 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) fadeIn,1.5s Infinite  linear floating;animation-delay: 0s,1s;}svg#freepik_stories-career-progress.animated #freepik--Clouds--inject-67 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideDown,1.5s Infinite  linear wind;animation-delay: 0s,1s;}svg#freepik_stories-career-progress.animated #freepik--speech-bubble--inject-67 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideLeft,1.5s Infinite  linear floating;animation-delay: 0s,1s;}svg#freepik_stories-career-progress.animated #freepik--Character--inject-67 {animation: 1.3s 1 forwards ease-out lightSpeedLeft;animation-delay: 0s;}svg#freepik_stories-career-progress.animated #freepik--Chair--inject-67 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) zoomOut,1.5s Infinite  linear wind;animation-delay: 0s,1s;}            @keyframes slideLeft {                0% {                    opacity: 0;                    transform: translateX(-30px);                }                100% {                    opacity: 1;                    transform: translateX(0);                }            }                    @keyframes zoomOut {                0% {                    opacity: 0;                    transform: scale(1.5);                }                100% {                    opacity: 1;                    transform: scale(1);                }            }                    @keyframes fadeIn {                0% {                    opacity: 0;                }                100% {                    opacity: 1;                }            }                    @keyframes floating {                0% {                    opacity: 1;                    transform: translateY(0px);                }                50% {                    transform: translateY(-10px);                }                100% {                    opacity: 1;                    transform: translateY(0px);                }            }                    @keyframes slideDown {                0% {                    opacity: 0;                    transform: translateY(-30px);                }                100% {                    opacity: 1;                    transform: translateY(0);                }            }                    @keyframes wind {                0% {                    transform: rotate( 0deg );                }                25% {                    transform: rotate( 1deg );                }                75% {                    transform: rotate( -1deg );                }            }                    @keyframes lightSpeedLeft {              from {                transform: translate3d(-50%, 0, 0) skewX(20deg);                opacity: 0;              }              60% {                transform: skewX(-10deg);                opacity: 1;              }              80% {                transform: skewX(2deg);              }              to {                opacity: 1;                transform: translate3d(0, 0, 0);              }            }        </style><g id="freepik--Floor--inject-67" style="transform-origin: 250.003px 344.897px 0px;" class="animable"><path d="M412.5,250.46c-90.34-52.15-236.31-52.15-326.06,0S-2.83,387.18,87.5,439.33s236.32,52.16,326.07,0S502.83,302.62,412.5,250.46Z" style="fill: rgb(245, 245, 245); transform-origin: 250.003px 344.897px 0px;" id="elk7u4ko2z5f" class="animable"></path></g><g id="freepik--Shadows--inject-67" style="transform-origin: 249.63px 341.345px 0px;" class="animable"><polygon points="226.45 438.35 91.31 360.31 118.32 344.65 253.49 422.74 226.45 438.35" style="fill: rgb(230, 230, 230); transform-origin: 172.4px 391.5px 0px;" id="elkpp373jbvrm" class="animable"></polygon><polygon points="365.77 363.75 365.77 363.74 288.17 318.94 288.18 318.94 210.58 274.14 210.58 274.14 132.98 229.34 55.89 274.14 133.48 318.94 133.48 318.94 211.08 363.74 211.08 363.75 288.68 408.55 288.67 408.55 366.27 453.35 443.37 408.55 365.77 363.75" style="fill: rgb(230, 230, 230); transform-origin: 249.63px 341.345px 0px;" id="elmz6crgp7jg" class="animable"></polygon></g><g id="freepik--Plants--inject-67" style="transform-origin: 251.015px 312px 0px;" class="animable"><path d="M424.36,403.33l-4.62-3.8c-.29-7.28-.57-15,.64-22.15s4-14.3,9.18-19.47c2.15-2.17,4.82-4,7.86-4.36s6.42,1.18,7.47,4.05-.56,6.27-2.32,8.94c-3.74,5.69-8.21,10.88-11.88,16.62A40.44,40.44,0,0,0,424.36,403.33Z" style="fill: rgb(130, 143, 255); transform-origin: 432.356px 378.414px 0px;" id="el56ncrsqh6sf" class="animable"></path><path d="M424.36,404.32l4.62,3.8c3.42-7.21,8.13-13.9,14.64-18.52a40.92,40.92,0,0,0,6.48-5c1.86-2,3.16-4.76,2.62-7.43-.69-3.44-4.34-5.71-7.85-5.73s-6.79,1.76-9.5,4C427,382.23,422.26,393.77,424.36,404.32Z" style="fill: rgb(130, 143, 255); transform-origin: 438.354px 389.78px 0px;" id="el7yhxw19f0aq" class="animable"></path><g id="elx07xmxc7qeh"><path d="M424.36,404.32l4.62,3.8c3.42-7.21,8.13-13.9,14.64-18.52a40.92,40.92,0,0,0,6.48-5c1.86-2,3.16-4.76,2.62-7.43-.69-3.44-4.34-5.71-7.85-5.73s-6.79,1.76-9.5,4C427,382.23,422.26,393.77,424.36,404.32Z" style="opacity: 0.3; transform-origin: 438.354px 389.78px 0px;" class="animable"></path></g><path d="M421.75,401.59h0a.41.41,0,0,1-.4-.41c.19-10.8,2.62-30.76,16.74-43a.4.4,0,1,1,.53.61c-6,5.17-16,17.57-16.47,42.44A.4.4,0,0,1,421.75,401.59Z" style="fill: rgb(255, 255, 255); transform-origin: 430.055px 379.835px 0px;" id="el6ocasaktmnb" class="animable"></path><path d="M426.6,406.56h0a.4.4,0,0,1-.36-.44c.94-9.71,5.18-23.09,20-31.66a.41.41,0,0,1,.55.15.4.4,0,0,1-.15.55c-14.52,8.39-18.68,21.51-19.61,31A.39.39,0,0,1,426.6,406.56Z" style="fill: rgb(255, 255, 255); transform-origin: 436.541px 390.486px 0px;" id="elukd161vuld" class="animable"></path><path d="M62.16,227.57c-1.81-1.73-3.88-3.62-4-6.12a5.5,5.5,0,0,1,3.6-5.13,8.33,8.33,0,0,1,6.5.49,17.69,17.69,0,0,1,5.2,4.16,41.65,41.65,0,0,1,9.81,36.4A3,3,0,0,1,82,259.55c-1.21.64-2.59-.49-3.41-1.58a24.85,24.85,0,0,1-4-8c-.73-2.43-.4-5.1-1.31-7.39C71.05,237,66.47,231.69,62.16,227.57Z" style="fill: rgb(130, 143, 255); transform-origin: 71.1572px 237.808px 0px;" id="elda1mxmvzhij" class="animable"></path><path d="M81,256.27h0a.47.47,0,0,1-.48-.48,47.34,47.34,0,0,0-17.72-36.53.48.48,0,0,1-.08-.68.47.47,0,0,1,.67-.08,48.26,48.26,0,0,1,18.09,37.29A.47.47,0,0,1,81,256.27Z" style="fill: rgb(255, 255, 255); transform-origin: 72.0471px 237.333px 0px;" id="elkt48qilrml" class="animable"></path><path d="M75.05,275.47c-3,1-6.88.34-8.64-2.33-2.08-3.14-.78-8-3.56-10.52-1.55-1.42-3.84-1.56-5.9-2s-4.36-1.56-4.66-3.65c-.41-2.76,3-5.05,2.51-7.81s-4.22-3.56-5.33-6.08c-1-2.29.78-5.07,3.14-5.93s5-.27,7.34.61,4.64,2,7.13,2.33,5.58-.19,7.49,1.59c2.54,2.38,1.09,6.92,3.05,9.79,1.32,1.93,3.81,2.6,5.71,4a9.12,9.12,0,0,1,3.77,7.49c-.06,3.17-1.73,5.45-4.11,7.27C80.45,272.13,78.18,274.46,75.05,275.47Z" style="fill: rgb(130, 143, 255); transform-origin: 68.1432px 256.321px 0px;" id="el140kucixzyv" class="animable"></path><g id="eltd14br48hv"><path d="M75.05,275.47c-3,1-6.88.34-8.64-2.33-2.08-3.14-.78-8-3.56-10.52-1.55-1.42-3.84-1.56-5.9-2s-4.36-1.56-4.66-3.65c-.41-2.76,3-5.05,2.51-7.81s-4.22-3.56-5.33-6.08c-1-2.29.78-5.07,3.14-5.93s5-.27,7.34.61,4.64,2,7.13,2.33,5.58-.19,7.49,1.59c2.54,2.38,1.09,6.92,3.05,9.79,1.32,1.93,3.81,2.6,5.71,4a9.12,9.12,0,0,1,3.77,7.49c-.06,3.17-1.73,5.45-4.11,7.27C80.45,272.13,78.18,274.46,75.05,275.47Z" style="opacity: 0.2; transform-origin: 68.1432px 256.321px 0px;" class="animable"></path></g><path d="M73.67,253.86l0-.05c-.46-.66-.93-1.31-1.43-1.94a35.07,35.07,0,0,0-17.52-11.65.47.47,0,0,0-.6.33.49.49,0,0,0,.33.6,34,34,0,0,1,17,11.33c.14.17.26.35.39.52-5.46-2-11-.86-14,1.53a.48.48,0,0,0-.07.68.46.46,0,0,0,.37.18.51.51,0,0,0,.31-.11c2.94-2.37,9-3.42,14.51-.76a34,34,0,0,1,5.85,17,.48.48,0,0,0,.48.45h0a.48.48,0,0,0,.45-.51A35,35,0,0,0,73.67,253.86Z" style="fill: rgb(255, 255, 255); transform-origin: 66.9215px 256.084px 0px;" id="elixqzbmyp5x" class="animable"></path></g><g id="freepik--Stairs--inject-67" style="transform-origin: 250.085px 325.97px 0px;" class="animable"><polygon points="134.03 208.25 70.88 244.95 70.8 275.79 134.36 312.48 197.5 275.79 197.59 244.95 134.03 208.25" style="fill: rgb(130, 143, 255); transform-origin: 134.195px 260.365px 0px;" id="elo0zfij2hjcc" class="animable"></polygon><g id="el35ux0jlwljx"><polygon points="197.59 244.95 134.03 208.25 70.88 244.95 134.44 281.64 197.59 244.95" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 134.235px 244.945px 0px;" class="animable"></polygon></g><g id="elml29ld7q7v"><polygon points="134.44 281.64 134.36 312.48 197.5 275.79 197.59 244.95 134.44 281.64" style="opacity: 0.3; transform-origin: 165.975px 278.715px 0px;" class="animable"></polygon></g><polygon points="209.48 212.41 146.33 249.11 146.25 319.35 209.81 356.05 272.96 319.35 273.04 249.11 209.48 212.41" style="fill: rgb(130, 143, 255); transform-origin: 209.645px 284.23px 0px;" id="elpkokj4np3ri" class="animable"></polygon><g id="eli6o8ek3tlvp"><polygon points="273.04 249.11 209.48 212.41 146.33 249.11 209.89 285.81 273.04 249.11" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 209.685px 249.11px 0px;" class="animable"></polygon></g><g id="el2c4hhasvulq"><polygon points="209.89 285.81 209.81 356.05 272.96 319.35 273.04 249.11 209.89 285.81" style="opacity: 0.3; transform-origin: 241.425px 302.58px 0px;" class="animable"></polygon></g><polygon points="286.75 216.88 223.6 253.57 223.52 363.76 287.08 400.46 350.22 363.76 350.31 253.57 286.75 216.88" style="fill: rgb(130, 143, 255); transform-origin: 286.915px 308.67px 0px;" id="elsyscx9gvfl" class="animable"></polygon><g id="elt7ivp6wtfq"><polygon points="350.31 253.57 286.75 216.88 223.6 253.57 287.16 290.27 350.31 253.57" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 286.955px 253.575px 0px;" class="animable"></polygon></g><g id="elqv0pw0r1w9i"><polygon points="287.16 290.27 287.08 400.46 350.22 363.76 350.31 253.57 287.16 290.27" style="opacity: 0.3; transform-origin: 318.695px 327.015px 0px;" class="animable"></polygon></g><polygon points="286.79 216.59 223.64 253.28 223.56 363.61 287.12 400.31 350.26 363.61 350.35 253.28 286.79 216.59" style="fill: rgb(130, 143, 255); transform-origin: 286.955px 308.45px 0px;" id="el55wrdl0kz0f" class="animable"></polygon><g id="el8v7zwehudxt"><polygon points="350.35 253.28 286.79 216.59 223.64 253.28 287.2 289.98 350.35 253.28" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 286.995px 253.285px 0px;" class="animable"></polygon></g><g id="elh15hqeiura"><polygon points="287.2 289.98 287.12 400.31 350.26 363.61 350.35 253.28 287.2 289.98" style="opacity: 0.3; transform-origin: 318.735px 326.795px 0px;" class="animable"></polygon></g><polygon points="365.81 205.81 302.67 242.51 302.58 409.43 366.14 446.13 429.29 409.43 429.37 242.51 365.81 205.81" style="fill: rgb(130, 143, 255); transform-origin: 365.975px 325.97px 0px;" id="elvrivkjlxgdc" class="animable"></polygon><g id="eltphipgzvzm"><polygon points="429.37 242.51 365.81 205.81 302.67 242.51 366.23 279.21 429.37 242.51" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 366.02px 242.51px 0px;" class="animable"></polygon></g><g id="el7g2xmob62pm"><polygon points="366.23 279.21 366.14 446.13 429.29 409.43 429.37 242.51 366.23 279.21" style="opacity: 0.3; transform-origin: 397.755px 344.32px 0px;" class="animable"></polygon></g></g><g id="freepik--Arrow--inject-67" style="transform-origin: 187.395px 315.887px 0px;" class="animable"><path d="M250.36,249.81,246,246.89l-32.9,66.78,4.32,2.92,19.32-11.15c-.84,31.39-9.55,47.13-18,56.17l-1.35.34-.79.18-1.58.34-.71.15-1.21.22-.89.15-1.28.2-.85.13c-.47.07-1,.12-1.43.18l-.75.1-2,.2-.21,0c-.73.07-1.47.12-2.21.17-.94.07-1.89.11-2.85.15l-.86,0-2.09,0h-.85c-1.15,0-2.31,0-3.47-.06l-.6,0c-1.08,0-2.16-.1-3.25-.17l-.55,0c-1.11-.08-2.22-.17-3.34-.29l-.8-.08c-1-.11-2-.22-3-.35l-.59-.08c-1.09-.15-2.18-.31-3.28-.49l-.79-.14c-.9-.15-1.79-.31-2.69-.48l-.84-.16c-1.07-.21-2.15-.44-3.24-.68l-.49-.11c-.93-.21-1.87-.44-2.81-.67l-1-.24-2.51-.66-.77-.21c-1.07-.3-2.15-.61-3.23-.94l-.75-.23q-1.24-.37-2.49-.78l-1-.34-2.43-.83-.85-.29q-1.6-.57-3.21-1.17l-.58-.23c-.89-.33-1.78-.68-2.67-1l-1-.42-2.3-.95-1-.43-3-1.29-.28-.12c-1.08-.49-2.17-1-3.25-1.5l-1-.45c-.78-.37-1.57-.75-2.35-1.14l-1.08-.53c-.83-.41-1.65-.83-2.48-1.26l-.83-.42-3.27-1.74c-.6-.31-1.19-.64-1.78-1-.31-.17-.62-.33-.92-.51l-2.65-1.49-.08-.05L91.31,355.92v4.39c30.7,17.67,60.77,26.08,87,24.34,12.47-.82,23.11-3.87,31.77-9.07-.21.13-.42.27-.64.39h0l27.1-15.75a51,51,0,0,0,6.84-4.75c.29-.23.59-.48.88-.73l.26-.22.69-.61.24-.21.91-.83.15-.15.77-.73.28-.27.76-.77.18-.19c.31-.32.62-.64.93-1,.07-.09.15-.17.23-.26q.36-.39.72-.81l.27-.32c.3-.34.59-.69.88-1.05l.06-.07c.31-.38.62-.77.92-1.17.09-.12.18-.23.26-.35.24-.31.47-.63.71-.95l.25-.35.9-1.32a2.14,2.14,0,0,0,.13-.19l.57-.87.17-.28.43-.71c.18-.29.36-.58.53-.88l.43-.75.51-.92.43-.8c.16-.32.33-.64.49-1l.42-.83c.07-.16.14-.3.22-.45s.25-.54.37-.82l.18-.38c.26-.58.52-1.18.78-1.79.05-.13.11-.28.17-.41.2-.51.41-1,.61-1.54l.19-.51c0-.12.09-.23.14-.34l.21-.61c.2-.55.39-1.1.58-1.66.11-.32.22-.65.32-1,.18-.56.36-1.12.53-1.7.06-.21.13-.4.19-.61s.08-.31.13-.46c.13-.46.26-.94.39-1.42s.21-.8.32-1.21.24-1,.36-1.5c.08-.3.15-.59.22-.9,0-.12.06-.26.08-.38.1-.44.19-.88.29-1.32l.3-1.46c.09-.46.17-.92.25-1.38s.14-.69.2-1c0-.17.05-.34.08-.51l.21-1.3c.09-.55.17-1.11.25-1.68s.13-.9.19-1.36c0-.31.09-.61.13-.93l.09-.83c.05-.45.11-.89.15-1.35.07-.61.13-1.24.19-1.86.05-.46.09-.92.13-1.39l.06-.64c0-.45.07-.92.1-1.38s.07-.88.09-1.33c0-.75.09-1.52.13-2.29,0-.4,0-.79.06-1.19,0-.08,0-.16,0-.24,0-1,.07-2.07.1-3.12v-.25c0-1.15,0-2.33,0-3.52,0-.12,0-.23,0-.35l15.75-9.09Z" style="fill: rgb(69, 90, 100); transform-origin: 187.395px 315.882px 0px;" id="elh8fmnfw79xm" class="animable"></path><path d="M250.36,249.81l-32.9,66.78-4.32-2.92L246,246.89ZM211.63,374.59c.59-.38,1.16-.77,1.73-1.18l.68-.48c.75-.55,1.49-1.11,2.21-1.7l.87-.74h0l.26-.22.58-.5.11-.1.24-.21c.3-.27.61-.55.91-.84l.16-.15h0l.24-.22.53-.51.27-.27c.06-.06.12-.13.19-.19l.57-.57h0l.18-.19h0l.63-.67.3-.32.23-.25.72-.82.28-.32.28-.33.6-.72h0a.18.18,0,0,0,0-.07c.09-.1.17-.21.25-.31.23-.28.45-.57.68-.86h0l.26-.34.53-.73.17-.23.25-.35h0l.51-.74.4-.57h0a1.37,1.37,0,0,1,.13-.2l.33-.53c.14-.2.27-.41.4-.62s.29-.47.44-.71.35-.58.52-.88.29-.5.44-.75l.33-.6.18-.32.42-.8c.11-.2.21-.41.32-.62l.18-.35c.14-.27.27-.55.41-.83l.07-.15.53-1.11c.06-.13.11-.26.17-.38.17-.37.33-.76.5-1.14.09-.22.19-.43.28-.65s.12-.29.17-.43c.21-.5.41-1,.61-1.52h0c.07-.18.13-.35.2-.52s.15-.41.23-.62l.12-.33c.19-.55.39-1.1.57-1.66.09-.24.17-.5.25-.75l.08-.23h0c.18-.56.35-1.12.53-1.7h0l0-.07c.1-.33.2-.66.29-1s.26-.94.39-1.42c0,0,0-.08,0-.13.09-.36.19-.71.28-1.08h0c.13-.49.25-1,.37-1.5l.3-1.28c.1-.43.19-.88.28-1.32.06-.27.11-.54.17-.81s.09-.43.13-.65c.09-.46.18-.92.26-1.38h0c.08-.43.16-.86.23-1.3,0-.08,0-.16,0-.25.08-.43.15-.86.21-1.3h0c.09-.55.18-1.11.26-1.67h0l.18-1.37c.08-.58.16-1.17.23-1.76l.15-1.34c.07-.62.13-1.24.19-1.87,0-.46.09-.92.13-1.38.05-.67.11-1.35.15-2,0-.44.07-.88.1-1.33.05-.75.09-1.52.13-2.29,0-.4,0-.78.06-1.19.05-1.1.08-2.23.11-3.37,0-.08,0-.16,0-.24,0-1.28,0-2.6,0-3.94h0l-3.87,2.23c-.84,31.39-9.55,47.13-18,56.17a58.72,58.72,0,0,1-5.48,5.13,50.88,50.88,0,0,1-7,4.81c-.44.25-.89.49-1.34.73l-.87.46c-.48.25-1,.48-1.47.71l-.82.39c-.61.28-1.24.54-1.87.8l-.24.1c-.89.36-1.78.7-2.69,1-.48.17-1,.32-1.46.48l-.85.28c-.61.19-1.24.37-1.87.54l-.94.25c-.52.14-1.06.28-1.6.4l-1.1.25q-.89.21-1.8.39l-.47.08-1.94.35-.84.13-1.66.23-.92.12-1.71.19-.85.09c-.84.08-1.69.15-2.55.2s-1.95.11-2.93.15l-.79,0c-.69,0-1.38,0-2.08,0h-.86c-1.15,0-2.3,0-3.47-.06h-.17c-1.22,0-2.44-.11-3.66-.19h0l-.54,0h0c-1.14-.08-2.29-.18-3.44-.3l-.18,0c-1.14-.12-2.29-.25-3.45-.4l-.59-.08h0c-1.3-.18-2.6-.38-3.91-.6l-.16,0-2.69-.48-.83-.16c-1.08-.21-2.16-.44-3.24-.68l-.49-.11c-.94-.21-1.88-.43-2.82-.67l-1-.24c-.83-.21-1.67-.43-2.5-.66l-.08,0c-1.3-.36-2.61-.73-3.92-1.12l-.76-.24c-1-.3-2-.61-3-.93l0,0c-1-.32-2-.65-3-1l-.85-.29c-1.1-.39-2.21-.8-3.31-1.21l-.49-.19-2.66-1-1-.42c-1-.41-2-.84-3.06-1.27l-.11-.05c-1-.43-2.06-.88-3.09-1.34h0L111,366c-1.08-.49-2.16-1-3.24-1.49l-1-.46q-1.17-.55-2.34-1.14l-1.09-.53c-.91-.45-1.82-.92-2.73-1.39l-.58-.29c-1.09-.57-2.18-1.14-3.27-1.73l-1.8-1-.89-.49c-.91-.51-1.83-1-2.74-1.55v4.39c30.7,17.67,60.77,26.08,87,24.34,12.47-.82,23.11-3.87,31.77-9.07.27-.15.53-.31.79-.48S211.37,374.76,211.63,374.59Z" style="fill: rgb(55, 71, 79); transform-origin: 170.84px 315.887px 0px;" id="ellmjrkyvbov" class="animable"></path><g id="ellbp18k5tyti"><path d="M94.94,358l1.8,1c1.09.59,2.18,1.16,3.27,1.73l.58.29c.91.47,1.82.94,2.73,1.39l1.09.53q1.17.58,2.34,1.14l1,.46c1.08.51,2.16,1,3.24,1.49l.27.12h0c1,.46,2.06.91,3.09,1.34l.11.05c1,.43,2,.86,3.06,1.27l1,.42,2.66,1,.49.19c1.1.41,2.21.82,3.31,1.21l.85.29c1,.35,2,.68,3,1l0,0c1,.32,2,.63,3,.93l.76.24c1.31.39,2.62.76,3.92,1.12l.08,0c.83.23,1.67.45,2.5.66l1,.24c.94.24,1.88.46,2.82.67l.49.11c1.08.24,2.16.47,3.24.68l.83.16,2.69.48.16,0c1.31.22,2.61.42,3.91.6h0l.59.08c1.16.15,2.31.28,3.45.4l.18,0c1.15.12,2.3.22,3.44.3h0l.54,0h0c1.22.08,2.44.15,3.66.19h.17c1.17,0,2.32.06,3.47.06h.86c.7,0,1.39,0,2.08,0l.79,0c1,0,2-.08,2.93-.15s1.71-.12,2.55-.2l.85-.09,1.71-.19.92-.12,1.66-.23.84-.13,1.94-.35.47-.08q.91-.18,1.8-.39l1.1-.25c.54-.12,1.08-.26,1.6-.4l.94-.25c.63-.17,1.26-.35,1.87-.54l.85-.28c.49-.16,1-.31,1.46-.48.91-.32,1.8-.66,2.69-1l.24-.1c.63-.26,1.26-.52,1.87-.8l.82-.39c.49-.23,1-.46,1.47-.71l.87-.46c.45-.24.9-.48,1.34-.73a50.88,50.88,0,0,0,7-4.81,58.72,58.72,0,0,0,5.48-5.13l-1.35.34-.79.18-1.58.34-.71.15-1.21.22-.89.15-1.28.2-.85.13c-.47.07-1,.12-1.43.18l-.75.1-2,.2-.21,0c-.73.07-1.47.12-2.21.17-.94.07-1.89.11-2.85.15l-.86,0-2.09,0h-.85c-1.15,0-2.31,0-3.47-.06l-.6,0c-1.08,0-2.16-.1-3.25-.17l-.55,0c-1.11-.08-2.22-.17-3.34-.29l-.8-.08c-1-.11-2-.22-3-.35l-.59-.08c-1.09-.15-2.18-.31-3.28-.49l-.79-.14c-.9-.15-1.79-.31-2.69-.48l-.84-.16c-1.07-.21-2.15-.44-3.24-.68l-.49-.11c-.93-.21-1.87-.44-2.81-.67l-1-.24-2.51-.66-.77-.21c-1.07-.3-2.15-.61-3.23-.94l-.75-.23q-1.24-.37-2.49-.78l-1-.34-2.43-.83-.85-.29q-1.6-.57-3.21-1.17l-.58-.23c-.89-.33-1.78-.68-2.67-1l-1-.42-2.3-.95-1-.43-3-1.29-.28-.12c-1.08-.49-2.17-1-3.25-1.5l-1-.45c-.78-.37-1.57-.75-2.35-1.14l-1.08-.53c-.83-.41-1.65-.83-2.48-1.26l-.83-.42-3.27-1.74c-.6-.31-1.19-.64-1.78-1-.31-.17-.62-.33-.92-.51l-2.65-1.49-.08-.05L91.31,355.92c.91.53,1.83,1,2.74,1.55Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 155.02px 359.975px 0px;" class="animable"></path></g></g><g id="freepik--Clouds--inject-67" style="transform-origin: 250.005px 97.1905px 0px;" class="animable"><path d="M71.85,79.39c4.44-2.56,8.19-1.3,9.39,2.68A13.14,13.14,0,0,1,86,76.73c3.48-2,6.31-.39,6.32,3.6v1.84L97,79.47c2.44-1.4,4.42-.27,4.43,2.53a9.7,9.7,0,0,1-4.4,7.61L57.5,112.45c-2.44,1.4-4.42.28-4.43-2.52a9.68,9.68,0,0,1,4.4-7.62l4.67-2.7V96.24C62.11,90.05,66.47,82.51,71.85,79.39Z" style="fill: rgb(230, 230, 230); transform-origin: 77.25px 94.4618px 0px;" id="elajdnoueggww" class="animable"></path><path d="M110.61,94.35c3.19-1.83,5.88-.93,6.74,1.93a9.42,9.42,0,0,1,3.44-3.84c2.49-1.44,4.53-.28,4.53,2.59v1.32l3.35-1.94c1.75-1,3.17-.2,3.17,1.81a6.94,6.94,0,0,1-3.15,5.47l-28.39,16.39c-1.75,1-3.17.2-3.18-1.81a7,7,0,0,1,3.16-5.47l3.35-1.93v-2.43A15.39,15.39,0,0,1,110.61,94.35Z" style="fill: rgb(230, 230, 230); transform-origin: 114.48px 105.166px 0px;" id="elbbu7npf7dtk" class="animable"></path><path d="M433.45,89.55c-3.19-1.84-5.88-.94-6.74,1.92a9.39,9.39,0,0,0-3.44-3.83c-2.49-1.44-4.53-.28-4.53,2.59v1.31l-3.35-1.93c-1.75-1-3.17-.2-3.17,1.81a6.94,6.94,0,0,0,3.15,5.47l28.39,16.39c1.75,1,3.17.2,3.18-1.81a7,7,0,0,0-3.16-5.47l-3.35-1.94v-2.42A15.43,15.43,0,0,0,433.45,89.55Z" style="fill: rgb(230, 230, 230); transform-origin: 429.58px 100.366px 0px;" id="eloxghke91y8r" class="animable"></path></g><g id="freepik--speech-bubble--inject-67" style="transform-origin: 238.388px 81.1575px 0px;" class="animable"><path d="M257.57,61a.76.76,0,0,0-.39-.67h0l-3.46-1.93h0a.75.75,0,0,0-.75,0l-23.73,13.7a2.34,2.34,0,0,0-1,1.06,2.38,2.38,0,0,0-.2.95l0,8.82-8.22,8.5c-.73.76-.81,1.91-.24,2.09l3.28,1.8a.47.47,0,0,0,.44.15l4.77-.58,0,6.48a.76.76,0,0,0,.38.66h0l3.45,1.91.05,0h0a.76.76,0,0,0,.7,0l23.73-13.71a2.31,2.31,0,0,0,1.16-2ZM232.14,74.46l-.08.09Zm-.23.29a.22.22,0,0,1,0,.08A.22.22,0,0,0,231.91,74.75Zm-.33.78a.44.44,0,0,1,0,.1A.44.44,0,0,0,231.58,75.53Zm.73-1.24.08-.07Z" style="fill: rgb(130, 143, 255); transform-origin: 238.388px 81.1625px 0px;" id="elwqtvlmfu2df" class="animable"></path><g id="elu3q8dwdzrhj"><path d="M231.6,103.29a.76.76,0,0,0,.37.65L228.52,102h0a.76.76,0,0,1-.38-.66l0-6.48,3.47-.42Z" style="opacity: 0.1; transform-origin: 230.055px 99.19px 0px;" class="animable"></path></g><g id="el02n3i93m7hws"><path d="M229.21,72.09l23.73-13.7a.75.75,0,0,1,.75,0h0l3.46,1.93h0a.76.76,0,0,0-.77,0L232.68,74a2.32,2.32,0,0,0-1,1.12l-3.45-2A2.34,2.34,0,0,1,229.21,72.09Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 242.69px 66.7048px 0px;" class="animable"></path></g><g id="eltf1ym6q2vvi"><path d="M228.08,82.92l0-8.82a2.38,2.38,0,0,1,.2-.95l3.45,2a2.24,2.24,0,0,0-.17.89l0,8.83-3.47-1.94Z" style="opacity: 0.1; transform-origin: 229.905px 79.01px 0px;" class="animable"></path></g><g id="elle1s97ezk2d"><path d="M219.86,91.42l8.22-8.5,3.47,1.94h0l-8.21,8.49c-.64.65-.78,1.6-.44,2l-3.28-1.8C219.05,93.33,219.13,92.18,219.86,91.42Z" style="fill: rgb(255, 255, 255); opacity: 0.05; transform-origin: 225.398px 89.135px 0px;" class="animable"></path></g><path d="M245.69,72.77a.43.43,0,0,1,.53,0l4.65,4.45c.33.31,0,1.21-.52,1.52l-2.57,1.48.06,10.57-4.12,2.38-.06-10.57-2.57,1.48c-.54.32-.85-.22-.53-.9l4.6-9.8A1.48,1.48,0,0,1,245.69,72.77Z" style="fill: rgb(255, 255, 255); transform-origin: 245.716px 82.9243px 0px;" id="elkk7dzp6i7e9" class="animable"></path></g><g id="freepik--Character--inject-67" style="transform-origin: 186.91px 177.839px 0px;" class="animable"><g id="el8ksv7eljqn8"><path d="M242.64,242.31c-1.57-3.67-4.84-7.15-9.8-10-14.45-8.35-37.8-8.35-52.16,0s-14.28,21.87.17,30.21c11.6,6.7,28.94,8,42.75,3.95V253.57Z" style="opacity: 0.1; transform-origin: 206.301px 247.407px 0px;" class="animable"></path></g><polygon points="155.77 149.71 172.62 136.55 174.26 139.51 157.16 152.92 155.77 149.71" style="fill: rgb(38, 50, 56); transform-origin: 165.015px 144.735px 0px;" id="elltalvgm5a9q" class="animable"></polygon><path d="M186.75,161.55l9.46-.86c-1.2,6-3.31,14.32-3.31,14.32l-8.72-5.6Z" style="fill: rgb(69, 90, 100); transform-origin: 190.195px 167.85px 0px;" id="elyworbykgwfk" class="animable"></path><path d="M134.86,200.26a9.86,9.86,0,0,1,2-6,46,46,0,0,1,3.3-3.4A7.36,7.36,0,0,0,142,188a13.39,13.39,0,0,1,1.62-3.52,5.85,5.85,0,0,1,3.46-2.55,2.09,2.09,0,0,1,1.65.3l-.28-.35a2.09,2.09,0,0,0-2.14-.73,5.88,5.88,0,0,0-3.53,2.61,13,13,0,0,0-1.66,3.58,7.48,7.48,0,0,1-1.88,3,45.8,45.8,0,0,0-3.36,3.47,10.07,10.07,0,0,0-2.06,6.11,3.41,3.41,0,0,0,.84,2.52,2.22,2.22,0,0,0,1.27.55,1.64,1.64,0,0,1-.26-.2A3.33,3.33,0,0,1,134.86,200.26Z" id="elezq8u4umx5k" style="transform-origin: 141.27px 192.039px 0px;" class="animable"></path><path d="M149.19,182.59a2,2,0,0,0-.45-.41,2.09,2.09,0,0,0-1.65-.3,5.85,5.85,0,0,0-3.46,2.55A13.39,13.39,0,0,0,142,188a7.36,7.36,0,0,1-1.84,2.93,46,46,0,0,0-3.3,3.4,9.86,9.86,0,0,0-2,6,3.33,3.33,0,0,0,.82,2.47,1.64,1.64,0,0,0,.26.2,2.6,2.6,0,0,0,2.23.21,4.87,4.87,0,0,0,2.1-1.58c.57-.67,1-1.42,1.61-2.1a19.94,19.94,0,0,1,3.25-2.9l3.21-2.46,1.46-10.7S149.53,183,149.19,182.59Z" style="fill: rgb(38, 50, 56); transform-origin: 142.325px 192.596px 0px;" id="eldl4ycr13kxd" class="animable"></path><path d="M172.08,180.79,171.59,194c-6-6.08-21.62-11.75-21.62-11.75-5.92,4.36-4.6,9.37-2.38,11.75,12.24,6.66,26.22,15.62,29.42,14.88s7.44-5.6,10.55-14.76l-6-10.3Z" style="fill: rgb(55, 71, 79); transform-origin: 166.637px 194.857px 0px;" id="elgnzz6usvpo8" class="animable"></path><path d="M214.44,251.72a2.23,2.23,0,0,1-1.31,1.15,6.13,6.13,0,0,1-1.75.31,16.16,16.16,0,0,1-3.87-.06,7.06,7.06,0,0,1-3.51-1.51,13.89,13.89,0,0,1-2.24-2.85,26,26,0,0,0-6.07-6.28,11.16,11.16,0,0,0,.26,1.28,24.55,24.55,0,0,1,5.81,6.09,14.22,14.22,0,0,0,2.24,2.86,7.15,7.15,0,0,0,3.51,1.51,17.27,17.27,0,0,0,3.87.06,6.14,6.14,0,0,0,1.75-.32,2.23,2.23,0,0,0,1.31-1.15,1.94,1.94,0,0,0,.07-1.28A1.46,1.46,0,0,1,214.44,251.72Z" style="fill: rgb(38, 50, 56); transform-origin: 205.138px 248.42px 0px;" id="el81f6ycdg3ft" class="animable"></path><path d="M213.91,249.31a9.68,9.68,0,0,0-2-1.6A17.83,17.83,0,0,1,205,238.5l-9.18.52a5.61,5.61,0,0,0-.13,3.46,26,26,0,0,1,6.07,6.28,13.89,13.89,0,0,0,2.24,2.85,7.06,7.06,0,0,0,3.51,1.51,16.16,16.16,0,0,0,3.87.06,6.13,6.13,0,0,0,1.75-.31,2.23,2.23,0,0,0,1.31-1.15,1.46,1.46,0,0,0,.07-.19A2.48,2.48,0,0,0,213.91,249.31Z" style="fill: rgb(55, 71, 79); transform-origin: 205.023px 245.884px 0px;" id="elb19k13caebi" class="animable"></path><path d="M165.75,159.75c-2,9.7-1.23,14,6.33,21s20,17,20,17c-3,9.87,1.48,22.86,1.65,27.87s1.4,13.48,1.4,13.48c6.9,3.7,10.6,0,10.6,0V195.59a15.76,15.76,0,0,0-3.89-10.38L186.75,168v-6.42Z" style="fill: rgb(69, 90, 100); transform-origin: 185.268px 200.247px 0px;" id="ellfn6uye5j4" class="animable"></path><path d="M218.94,134.16a8.23,8.23,0,0,0,4.06.29c0-2.62,0-5.55.21-9.36.49-8.22-1.73-12.75-3.56-14.39s-5-1.67-6.17-.63,1.7,4.82,2.11,8.11c-1.64-1.92-2.47-2.57-4-1.4a10.22,10.22,0,0,1,2,3.59c.33,1.65,2.09,2.8,2.58,4.16.38,1.06,0,4.45-.63,7.36A8.17,8.17,0,0,0,218.94,134.16Z" style="fill: rgb(242, 143, 143); transform-origin: 217.434px 121.973px 0px;" id="elu5tvjxe16q" class="animable"></path><g id="elcui81nzj4lc"><path d="M218.94,134.16a8.23,8.23,0,0,0,4.06.29c0-2.62,0-5.55.21-9.36.49-8.22-1.73-12.75-3.56-14.39s-5-1.67-6.17-.63,1.7,4.82,2.11,8.11c-1.64-1.92-2.47-2.57-4-1.4a10.22,10.22,0,0,1,2,3.59c.33,1.65,2.09,2.8,2.58,4.16.38,1.06,0,4.45-.63,7.36A8.17,8.17,0,0,0,218.94,134.16Z" style="opacity: 0.2; transform-origin: 217.434px 121.973px 0px;" class="animable"></path></g><path d="M218.94,134.16a8.17,8.17,0,0,1-3.43-2.27c-.18.87-.38,1.7-.58,2.4,0,0-6.35-8.71-7.78-10.36s-2.74-5.58-9-6.31l.75,15.36s12.61,14.35,16.93,16.77,5.76-.72,6.64-6.53a56.65,56.65,0,0,0,.5-8.77A8.23,8.23,0,0,1,218.94,134.16Z" style="fill: rgb(69, 90, 100); transform-origin: 210.566px 134.096px 0px;" id="elh03vbyaj77" class="animable"></path><g id="el1um1d8x5q0w"><path d="M214,143.59c-1-3.57.49-8,1-9.3l-1.08-1.48A12.52,12.52,0,0,0,214,143.59Z" style="opacity: 0.3; transform-origin: 213.87px 138.2px 0px;" class="animable"></path></g><path d="M179.56,117.29c-3.62-.49-7.48.12-11.43.78a152.92,152.92,0,0,0,0,25.81L165,160.65c12.25,7.4,27.87,4.11,31,2,4.93-19.23,6.16-37.4,2.18-45L188.44,116Z" style="fill: rgb(55, 71, 79); transform-origin: 182.776px 140.616px 0px;" id="elk5wdrz318qk" class="animable"></path><path d="M187.37,124.77l-2.86-2.27a17.2,17.2,0,0,1,2.8-1.07l1.13.56Z" style="fill: rgb(130, 143, 255); transform-origin: 186.475px 123.1px 0px;" id="elippctrixmn" class="animable"></path><polygon points="190.44 124.53 191.07 124.14 192.13 121.84 190.9 121.43 190.17 121.99 190.44 124.53" style="fill: rgb(130, 143, 255); transform-origin: 191.15px 122.98px 0px;" id="elidhh9neqp7s" class="animable"></polygon><path d="M188.14,126.35c-2.16,8.58-12.22,14.17-20.51,13.57a5.08,5.08,0,0,0-3.33.86,15.2,15.2,0,0,0-3.21,3.13,1.32,1.32,0,0,0,.54,2,35.67,35.67,0,0,0,5.66,1.74,12.16,12.16,0,0,0,6.11-.16c15.07-4.36,17.16-14,16.75-21.15Z" style="fill: rgb(130, 143, 255); transform-origin: 175.513px 137.152px 0px;" id="elqcbzz9ty0u" class="animable"></path><g id="el0hdcl8s2yvf"><path d="M190.17,126.73c0-.13,0-.26,0-.38h-2s0,.08,0,.12a1.91,1.91,0,0,0,1,.43A2,2,0,0,0,190.17,126.73Z" style="opacity: 0.3; transform-origin: 189.17px 126.629px 0px;" class="animable"></path></g><path d="M188.44,122a5.58,5.58,0,0,1,1.73,0,4.37,4.37,0,0,1,.9,2.15,5.75,5.75,0,0,1-.92,2.21c-.52.39-2,0-2,0a10.37,10.37,0,0,1-1-1.61,1.28,1.28,0,0,1,0-1.13A4.8,4.8,0,0,1,188.44,122Z" style="fill: rgb(130, 143, 255); transform-origin: 189.044px 124.233px 0px;" id="elelej3877bkj" class="animable"></path><g id="ele6h06pygx2h"><path d="M193.89,165.64a10.11,10.11,0,0,1-6.08,3.54L192.9,175a16.1,16.1,0,0,0-2.54-5.12A8.58,8.58,0,0,0,193.89,165.64Z" style="opacity: 0.3; transform-origin: 190.85px 170.32px 0px;" class="animable"></path></g><path d="M189.22,121.73c2.32-.62,3.8,2,3.8,2,.14-5.69-2.81-7.87-2.81-7.87Z" style="fill: rgb(69, 90, 100); transform-origin: 191.122px 119.795px 0px;" id="elgow2y0qmd0j" class="animable"></path><path d="M179.34,93.62c-1-.69-2.07-1.37-3.11-2.05a2.75,2.75,0,0,1,2.14-1,1.81,1.81,0,0,1,1.21.6,1.84,1.84,0,0,1,.43,1.29c.1-1.86,1.7-3.53,3.37-4.34a10.77,10.77,0,0,1,5.46-.79c1.85.12,3.69.48,5.54.54a18.11,18.11,0,0,0,6.33-.89,1.31,1.31,0,0,1,1.68,1.59,8.87,8.87,0,0,1-1.76,3.21,3.88,3.88,0,0,0,1.32.14,1.31,1.31,0,0,1,1.2,2,7.36,7.36,0,0,1-3.31,2.67c-4.93,7.78-18.22,14.73-18.22,14.73a2.81,2.81,0,0,1-2.13-1.5,8,8,0,0,1-.75-2.6q-.86-5.11-1.41-10.27a5,5,0,0,1,.09-2.18A1.71,1.71,0,0,1,179,93.56" style="fill: rgb(38, 50, 56); transform-origin: 189.789px 99.1159px 0px;" id="elzlq2xv3dp8" class="animable"></path><path d="M180.63,105.66c-.36,3.21-1.07,8.75-1.07,8.75,2.8,3.78,8.22,4.61,9.66,7.32a44.39,44.39,0,0,0,1.81-9.25l-9.25-7.27Z" style="fill: rgb(242, 143, 143); transform-origin: 185.295px 113.47px 0px;" id="elhj7ghsc5tud" class="animable"></path><g id="elguoqxuj1nvc"><path d="M180.63,105.66c-.36,3.21-1.07,8.75-1.07,8.75,2.8,3.78,8.22,4.61,9.66,7.32a44.39,44.39,0,0,0,1.81-9.25l-9.25-7.27Z" style="opacity: 0.2; transform-origin: 185.295px 113.47px 0px;" class="animable"></path></g><g id="els2xk0asv91"><path d="M181.78,105.21l-.24.09a10.3,10.3,0,0,0,9,10.68c.37-2.17.45-3.5.45-3.5Z" style="opacity: 0.3; transform-origin: 186.26px 110.595px 0px;" class="animable"></path></g><path d="M199.84,96.61a33.77,33.77,0,0,1-1.73,15.85,3.28,3.28,0,0,1-3.09,2.13c-7,0-12.56-2.4-13.53-8.64a2.64,2.64,0,0,1-3.06.82,4.6,4.6,0,0,1-2.25-2.25,4.75,4.75,0,0,1-.58-1.67,2.34,2.34,0,0,1,.41-1.69,2.32,2.32,0,0,1,2.65-.58,3.88,3.88,0,0,1,2,2.07c.15.34.35.75.72.76s.6-.42.72-.78a13.63,13.63,0,0,0,.57-4.53,4.45,4.45,0,0,0,3.21-.61,4.36,4.36,0,0,0,1.8-2.7,4,4,0,0,0,3,2.1,3.89,3.89,0,0,0,3.36-1.19,4.79,4.79,0,0,0,2.68,1.38A5.57,5.57,0,0,0,199.84,96.61Z" style="fill: rgb(242, 143, 143); transform-origin: 187.85px 104.69px 0px;" id="elwsum4m1qyj" class="animable"></path><g id="elmrzhs1esclq"><path d="M199.84,96.61a33.77,33.77,0,0,1-1.73,15.85,3.28,3.28,0,0,1-3.09,2.13c-7,0-12.56-2.4-13.53-8.64a2.64,2.64,0,0,1-3.06.82,4.6,4.6,0,0,1-2.25-2.25,4.75,4.75,0,0,1-.58-1.67,2.34,2.34,0,0,1,.41-1.69,2.32,2.32,0,0,1,2.65-.58,3.88,3.88,0,0,1,2,2.07c.15.34.35.75.72.76s.6-.42.72-.78a13.63,13.63,0,0,0,.57-4.53,4.45,4.45,0,0,0,3.21-.61,4.36,4.36,0,0,0,1.8-2.7,4,4,0,0,0,3,2.1,3.89,3.89,0,0,0,3.36-1.19,4.79,4.79,0,0,0,2.68,1.38A5.57,5.57,0,0,0,199.84,96.61Z" style="opacity: 0.2; transform-origin: 187.85px 104.69px 0px;" class="animable"></path></g><polygon points="193.45 102.67 196.66 106.72 193.62 107.73 193.45 102.67" style="fill: rgb(242, 143, 143); transform-origin: 195.055px 105.2px 0px;" id="elyczqg2lsdg" class="animable"></polygon><g id="el86rh7iiighn"><polygon points="193.45 102.67 196.66 106.72 193.62 107.73 193.45 102.67" style="opacity: 0.3; transform-origin: 195.055px 105.2px 0px;" class="animable"></polygon></g><path d="M190.82,109.65l2.53.83a1.57,1.57,0,0,1-1.73.76A1.42,1.42,0,0,1,190.82,109.65Z" style="fill: rgb(242, 143, 143); transform-origin: 192.069px 110.466px 0px;" id="elq98rpu1r6ff" class="animable"></path><g id="el7sxcwogho6w"><path d="M190.82,109.65l2.53.83a1.57,1.57,0,0,1-1.73.76A1.42,1.42,0,0,1,190.82,109.65Z" style="opacity: 0.3; transform-origin: 192.069px 110.466px 0px;" class="animable"></path></g><path d="M192.45,111.2a1.47,1.47,0,0,1-.83,0,1.29,1.29,0,0,1-.8-1.17,1.53,1.53,0,0,1,1,.2A1.51,1.51,0,0,1,192.45,111.2Z" style="fill: rgb(242, 143, 143); transform-origin: 191.635px 110.637px 0px;" id="elo3iu5cemcip" class="animable"></path><path d="M189,103.46a.89.89,0,0,0,.93.87.91.91,0,1,0-.93-.87Z" style="fill: rgb(38, 50, 56); transform-origin: 189.909px 103.421px 0px;" id="elxdo96tcm1yc" class="animable"></path><path d="M196.53,102.91a.92.92,0,0,0,.94.87.91.91,0,1,0-.94-.87Z" style="fill: rgb(38, 50, 56); transform-origin: 197.439px 102.87px 0px;" id="elpjzdb0555o" class="animable"></path><path d="M197.29,99.28l2.05,1.32a1.29,1.29,0,0,0-.44-1.41A1.54,1.54,0,0,0,197.29,99.28Z" style="fill: rgb(38, 50, 56); transform-origin: 198.345px 99.8025px 0px;" id="el6oxoo086lh4" class="animable"></path><path d="M189.55,99.44l-2,1.45a1.29,1.29,0,0,1,.35-1.43A1.51,1.51,0,0,1,189.55,99.44Z" style="fill: rgb(38, 50, 56); transform-origin: 188.507px 100.047px 0px;" id="ela3dcxmpstd7" class="animable"></path><path d="M179.56,114.41l.18-1.42a1.38,1.38,0,0,0-.36,0c-1,.53-2.83,3.42-2.83,3.42.65,1.54,3.78,6.33,6.24,8,2.85-1.43,4.91-3.43,6.43-2.7C188.63,118.4,179.56,114.41,179.56,114.41Z" style="fill: rgb(69, 90, 100); transform-origin: 182.885px 118.694px 0px;" id="eloj9mllxz6ch" class="animable"></path><path d="M174,167.08c6.85-9.6,21.92-31.83,21-50l3.11.52c1.29,17.89-12.89,41.22-22.76,53.32Z" style="fill: rgb(38, 50, 56); transform-origin: 186.096px 144px 0px;" id="elfx9ge1qq1l" class="animable"></path><path d="M171.88,174.7,151,157.08l-3.69,13a.54.54,0,0,0,.11.48h0l0,0,.07.06,20.62,18.44a.55.55,0,0,1-.14-.54Z" style="fill: rgb(130, 143, 255); transform-origin: 159.587px 173.07px 0px;" id="eldpi53c0rg" class="animable"></path><g id="el9oea8kk2fwp"><path d="M171.88,174.7,151,157.08l-3.69,13a.54.54,0,0,0,.11.48h0l0,0,.07.06,20.62,18.44a.55.55,0,0,1-.14-.54Z" style="opacity: 0.15; transform-origin: 159.587px 173.07px 0px;" class="animable"></path></g><polygon points="170.98 177.88 174.26 166.3 170.98 177.88 170.98 177.88" style="fill: rgb(130, 143, 255); transform-origin: 172.62px 172.09px 0px;" id="elqyainp2vv9j" class="animable"></polygon><path d="M176.48,165.06l0,0Z" style="fill: rgb(130, 143, 255); transform-origin: 176.48px 165.06px 0px;" id="elm7ba5ys0ots" class="animable"></path><path d="M168.1,189.12h0Z" style="fill: rgb(130, 143, 255); transform-origin: 168.1px 189.12px 0px;" id="el4yhxrqfmbjo" class="animable"></path><polygon points="176.51 165.09 176.5 165.08 176.51 165.1 176.51 165.09" style="fill: rgb(130, 143, 255); transform-origin: 176.505px 165.09px 0px;" id="elumtydz9gb5r" class="animable"></polygon><polygon points="168.1 189.13 168.11 189.13 168.09 189.12 168.1 189.13" style="fill: rgb(130, 143, 255); transform-origin: 168.1px 189.125px 0px;" id="elykpob5f9ri" class="animable"></polygon><polygon points="150.19 159.79 150.19 159.79 150.19 159.79 150.19 159.79" style="fill: rgb(130, 143, 255); transform-origin: 150.19px 159.79px 0px;" id="elcg1s7x40kji" class="animable"></polygon><path d="M176.72,165.71a.73.73,0,0,0-.21-.61v0l0,0a.74.74,0,0,0-.63-.19h0a2,2,0,0,0-1.59,1.43L171,177.88l-3,10.7a.55.55,0,0,0,.14.54h0a.53.53,0,0,0,.53.13l4.09-1.24a1.65,1.65,0,0,0,1.17-1.37Z" style="fill: rgb(130, 143, 255); transform-origin: 172.352px 177.087px 0px;" id="el9nzpwthusk" class="animable"></path><g id="elg9zndnyw0o"><path d="M176.72,165.71a.73.73,0,0,0-.21-.61v0l0,0a.74.74,0,0,0-.63-.19h0a2,2,0,0,0-1.59,1.43L171,177.88l-3,10.7a.55.55,0,0,0,.14.54h0a.53.53,0,0,0,.53.13l4.09-1.24a1.65,1.65,0,0,0,1.17-1.37Z" style="opacity: 0.3; transform-origin: 172.352px 177.087px 0px;" class="animable"></path></g><polygon points="164.54 167.19 160.84 180.45 161.42 181.01 165 167.85 164.54 167.19" style="fill: rgb(130, 143, 255); transform-origin: 162.92px 174.1px 0px;" id="elh0949mo4cpj" class="animable"></polygon><polygon points="156.69 160.17 153 173.44 153.58 174 157.16 160.84 156.69 160.17" style="fill: rgb(130, 143, 255); transform-origin: 155.08px 167.085px 0px;" id="el6c8vewsp0yc" class="animable"></polygon><path d="M155.82,146.61h0l0,0a.74.74,0,0,0-.61-.18,2,2,0,0,0-1.59,1.43l-2.83,10a3.25,3.25,0,0,0,1,3.32l2.18,1.89L168.81,176a1.82,1.82,0,0,0,2.95-.88l2.5-8.8a2,2,0,0,1,1.59-1.43h0a.74.74,0,0,1,.63.19Z" style="fill: rgb(130, 143, 255); transform-origin: 163.576px 161.435px 0px;" id="elfkw3r71ds18" class="animable"></path><g id="el585lhx0vtb2"><path d="M155.82,146.61h0l0,0a.74.74,0,0,0-.61-.18,2,2,0,0,0-1.59,1.43l-2.83,10a3.25,3.25,0,0,0,1,3.32l2.18,1.89L168.81,176a1.82,1.82,0,0,0,2.95-.88l2.5-8.8a2,2,0,0,1,1.59-1.43h0a.74.74,0,0,1,.63.19Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 163.576px 161.435px 0px;" class="animable"></path></g><path d="M143,147.58l.67,10.11c1.43,10.08,3.29,11.67,7.9,13s1.91-4.43,1.31-5.5a11.89,11.89,0,0,1-.93-3c2.27,2.06,2.85,1.84,3.75,1.21.36-.28-1.34-1.76-1.34-1.76a22.49,22.49,0,0,0-3.48-5.34l.53-8.74Z" style="fill: rgb(242, 143, 143); transform-origin: 149.375px 159.224px 0px;" id="ell0w8254e1so" class="animable"></path><g id="el9g9ia362phq"><path d="M143,147.58l.67,10.11c1.43,10.08,3.29,11.67,7.9,13s1.91-4.43,1.31-5.5a11.89,11.89,0,0,1-.93-3c2.27,2.06,2.85,1.84,3.75,1.21.36-.28-1.34-1.76-1.34-1.76a22.49,22.49,0,0,0-3.48-5.34l.53-8.74Z" style="opacity: 0.2; transform-origin: 149.375px 159.224px 0px;" class="animable"></path></g><path d="M173,117.35c-6.49-1.09-10.76,2.18-13.72,4.08-2.14,1.38-10,7.3-14.18,10.47a6.58,6.58,0,0,0-2.6,5.38l.23,10.69a8.86,8.86,0,0,0,8.88-.36l.76-7.84s9.12-4.44,15.25-7.23S174.49,121.92,173,117.35Z" style="fill: rgb(69, 90, 100); transform-origin: 158.078px 133.062px 0px;" id="elaei57c5tec" class="animable"></path><g id="elkbw3axtc2xo"><path d="M146.48,250.46a16.15,16.15,0,0,0-5.2-.84c-5.58,0-10.1,2.59-10.1,5.78s4.52,5.79,10.1,5.79a15.87,15.87,0,0,0,5.2-.85Z" style="opacity: 0.1; transform-origin: 138.83px 255.405px 0px;" class="animable"></path></g></g><g id="freepik--Chair--inject-67" style="transform-origin: 378.49px 189.114px 0px;" class="animable"><g id="elczlk7srk3ha"><path d="M391.21,226.31c14.45,8.35,14.52,21.87.17,30.22s-37.71,8.34-52.16,0-14.53-21.87-.17-30.22S376.76,218,391.21,226.31Z" style="opacity: 0.1; transform-origin: 365.213px 241.426px 0px;" class="animable"></path></g><path d="M409.6,131.79,408,131c3.6,2.62,9.79,16.73,12.1,22.47a.3.3,0,0,0,.56-.22C419.89,151.33,414.06,136.89,409.6,131.79Z" style="fill: rgb(224, 224, 224); transform-origin: 414.34px 142.33px 0px;" id="elog3kdb7lh" class="animable"></path><path d="M384.72,231.2l1.43-2.45-1.86-1.18h0a2,2,0,0,0-2.06.18,6.24,6.24,0,0,0-2.85,4.93,1.93,1.93,0,0,0,.89,1.85h0l1.82,1.16,1.51-2.58A6.85,6.85,0,0,0,384.72,231.2Z" style="fill: rgb(55, 71, 79); transform-origin: 382.759px 231.528px 0px;" id="elvy9h3d9rehe" class="animable"></path><path d="M384.09,228.92c1.57-.91,2.86-.18,2.86,1.64a6.26,6.26,0,0,1-2.85,4.93c-1.57.91-2.86.18-2.86-1.63A6.28,6.28,0,0,1,384.09,228.92Z" style="fill: rgb(69, 90, 100); transform-origin: 384.095px 232.205px 0px;" id="elnl9ouugygkk" class="animable"></path><path d="M353.51,230.5l-1.43-2.45,1.86-1.18h0a2,2,0,0,1,2.06.18,6.26,6.26,0,0,1,2.85,4.93,1.93,1.93,0,0,1-.89,1.85h0L356.14,235l-1.51-2.58A6.85,6.85,0,0,1,353.51,230.5Z" style="fill: rgb(55, 71, 79); transform-origin: 355.471px 230.833px 0px;" id="eleahxmu4uf7j" class="animable"></path><path d="M354.15,228.23c-1.58-.91-2.87-.19-2.87,1.63a6.26,6.26,0,0,0,2.85,4.93c1.57.91,2.86.18,2.86-1.63A6.26,6.26,0,0,0,354.15,228.23Z" style="fill: rgb(69, 90, 100); transform-origin: 354.135px 231.509px 0px;" id="el115oyyvcn26l" class="animable"></path><path d="M363.75,224.43h5.3v9.13h0a1.32,1.32,0,0,1-.78,1.09,4.13,4.13,0,0,1-3.75,0,1.31,1.31,0,0,1-.77-1.09h0Z" style="fill: rgb(235, 235, 235); transform-origin: 366.4px 229.765px 0px;" id="elqq3458i15qb" class="animable"></path><polygon points="382.94 226.99 382.94 229.16 369.05 232.67 369.05 228.06 382.94 226.99" style="fill: rgb(224, 224, 224); transform-origin: 375.995px 229.83px 0px;" id="elxozoog1qi8i" class="animable"></polygon><polygon points="382.94 226.99 381.97 226.66 369.05 227.34 369.05 228.06 382.94 226.99" style="fill: rgb(245, 245, 245); transform-origin: 375.995px 227.36px 0px;" id="el40eq0zf9eg5" class="animable"></polygon><path d="M384.34,246.73l-1.44-2.45,1.86-1.18h0a2,2,0,0,1,2.07.17,6.3,6.3,0,0,1,2.85,4.94,2,2,0,0,1-.89,1.85h0L387,251.23l-1.51-2.58A6.82,6.82,0,0,1,384.34,246.73Z" style="fill: rgb(55, 71, 79); transform-origin: 386.294px 247.059px 0px;" id="elbj71iwcllfb" class="animable"></path><path d="M385,244.45c-1.58-.91-2.86-.18-2.87,1.63A6.29,6.29,0,0,0,385,251c1.58.91,2.86.18,2.87-1.64A6.29,6.29,0,0,0,385,244.45Z" style="fill: rgb(69, 90, 100); transform-origin: 385px 247.725px 0px;" id="elx3aaitsie4" class="animable"></path><path d="M365.84,253l1.43-2.45-1.86-1.18h0a2,2,0,0,0-2.07.17,6.31,6.31,0,0,0-2.85,4.93,2,2,0,0,0,.89,1.86h0l1.83,1.16,1.51-2.58A7.11,7.11,0,0,0,365.84,253Z" style="fill: rgb(55, 71, 79); transform-origin: 363.875px 253.324px 0px;" id="elqq0x9xchef" class="animable"></path><path d="M365.2,250.68c1.58-.91,2.86-.18,2.87,1.63a6.29,6.29,0,0,1-2.85,4.93c-1.58.91-2.86.18-2.87-1.63A6.29,6.29,0,0,1,365.2,250.68Z" style="fill: rgb(69, 90, 100); transform-origin: 365.21px 253.96px 0px;" id="elw4riqrigykk" class="animable"></path><path d="M345.78,243.33l1.43-2.45-1.86-1.18h0a2,2,0,0,0-2.06.17,6.26,6.26,0,0,0-2.85,4.93,2,2,0,0,0,.89,1.86h0l1.82,1.16,1.51-2.58A6.85,6.85,0,0,0,345.78,243.33Z" style="fill: rgb(55, 71, 79); transform-origin: 343.82px 243.656px 0px;" id="el1s1vyq3e4kdh" class="animable"></path><path d="M345.15,241.06c1.57-.91,2.86-.18,2.86,1.63a6.28,6.28,0,0,1-2.84,4.93c-1.58.91-2.87.18-2.87-1.63A6.26,6.26,0,0,1,345.15,241.06Z" style="fill: rgb(69, 90, 100); transform-origin: 345.155px 244.34px 0px;" id="elt8bay41fo0n" class="animable"></path><polygon points="386.28 241.42 386.28 244.95 367.68 234.9 367.68 230.03 386.28 241.42" style="fill: rgb(224, 224, 224); transform-origin: 376.98px 237.49px 0px;" id="el70ofkqf7bkb" class="animable"></polygon><polygon points="387.36 240.82 368.75 229.76 367.68 230.03 386.28 241.42 387.36 240.82" style="fill: rgb(245, 245, 245); transform-origin: 377.52px 235.59px 0px;" id="el4eacwl1gttn" class="animable"></polygon><polygon points="387.36 244.34 386.28 244.95 386.28 241.42 387.36 240.82 387.36 244.34" style="fill: rgb(240, 240, 240); transform-origin: 386.82px 242.885px 0px;" id="el1a3jgj9607ui" class="animable"></polygon><polygon points="366.43 230.03 364.16 248.01 364.16 251.23 366.43 235.1 366.43 230.03" style="fill: rgb(224, 224, 224); transform-origin: 365.295px 240.63px 0px;" id="eli8qn88idvh" class="animable"></polygon><rect x="362.85" y="248.02" width="1.31" height="3.21" style="fill: rgb(240, 240, 240); transform-origin: 363.505px 249.625px 0px;" id="elu3k0y9j30od" class="animable"></rect><polygon points="362.85 248.01 364.91 230.03 366.43 230.03 364.16 248.01 362.85 248.01" style="fill: rgb(245, 245, 245); transform-origin: 364.64px 239.02px 0px;" id="el1uqzh1c15i5" class="animable"></polygon><polygon points="344.41 238.05 344.41 241.42 363.75 233.56 363.75 229.43 344.41 238.05" style="fill: rgb(224, 224, 224); transform-origin: 354.08px 235.425px 0px;" id="elnozhrdc03x" class="animable"></polygon><polygon points="343.66 240.92 344.41 241.42 344.41 238.05 343.66 237.56 343.66 240.92" style="fill: rgb(240, 240, 240); transform-origin: 344.035px 239.49px 0px;" id="elrv7rf8j3hhc" class="animable"></polygon><polygon points="346.71 237.02 344.41 238.05 343.66 237.56 363.75 228.51 363.75 229.43 346.71 237.02" style="fill: rgb(245, 245, 245); transform-origin: 353.705px 233.28px 0px;" id="elzbaz1pfa90s" class="animable"></polygon><polygon points="353.96 225.15 353.96 227.36 359.6 230.38 363.75 228.51 363.75 227.6 353.96 225.15" style="fill: rgb(224, 224, 224); transform-origin: 358.855px 227.765px 0px;" id="elb2f2jet91mh" class="animable"></polygon><polygon points="353.96 225.15 354.41 224.97 363.75 226.99 363.75 227.6 353.96 225.15" style="fill: rgb(245, 245, 245); transform-origin: 358.855px 226.285px 0px;" id="elzmtm85epmi" class="animable"></polygon><path d="M362.06,208.14h8.68v15h0a2.2,2.2,0,0,1-1.29,1.77,6.76,6.76,0,0,1-6.13,0,2.17,2.17,0,0,1-1.26-1.78h0Z" style="fill: rgb(224, 224, 224); transform-origin: 366.4px 216.892px 0px;" id="elwx4rb5t8nm" class="animable"></path><path d="M418,140.57a4.62,4.62,0,0,1-1.56-.24l-.6-.18.47-1.73L415.13,137a15.22,15.22,0,0,0-2.67-.62c-2.75-.37-5.8.26-7.68,2.31s-2.23,4.88-2.31,7.58c-.14,4.64.43,9.26.71,13.9A40.79,40.79,0,0,1,402.12,174c-1.31,4.45-4,8.65-8.1,10.89a20.22,20.22,0,0,1-5.13,1.87l-14.18-11.2-19.55-6.15-25.61,13.14a4.91,4.91,0,0,0-1.65,1.59c-2,3-1.65,8.42,1.87,10.43l35.35,18.77a8.28,8.28,0,0,0,7.61.08l24.76-12.54a12.56,12.56,0,0,0,6.44-7.91l14.18-52.38Z" style="fill: rgb(55, 71, 79); transform-origin: 372.395px 175.293px 0px;" id="eldaalkawv0yr" class="animable"></path><path d="M329.55,182.52l25.61-13.14,19.55,6.15,14.18,11.2c-1.1.27-2.22.49-3.32.71a25.17,25.17,0,0,0-8.38,2.78c-2.52,1.55-4.55,4.2-4.57,7.16l.9,7h0l-.79.39a8.25,8.25,0,0,1-7.61-.07l-35.35-18.77a5.6,5.6,0,0,1-1.87-1.78A4.91,4.91,0,0,1,329.55,182.52Z" style="fill: rgb(69, 90, 100); transform-origin: 358.395px 187.523px 0px;" id="elattc9zmiva" class="animable"></path><g id="elkjyjaa58tsr"><path d="M329.55,182.52l25.61-13.14,19.55,6.15,14.18,11.2c-1.1.27-2.22.49-3.32.71a25.17,25.17,0,0,0-8.38,2.78c-2.52,1.55-4.55,4.2-4.57,7.16l.9,7h0l-.79.39a8.25,8.25,0,0,1-7.61-.07l-35.35-18.77a5.6,5.6,0,0,1-1.87-1.78A4.91,4.91,0,0,1,329.55,182.52Z" style="opacity: 0.1; transform-origin: 358.395px 187.523px 0px;" class="animable"></path></g><path d="M333.27,160.55s20.56,6,26,.71c6.77-6.64,3.93-23.38,3.13-29.93s0-11.09,1.81-13,4.44-4.74,13-1.21c-8.61,4.43-6,27.11-3.31,35.57-6.75,6.94-10,16.11-10.11,21.11,0,0-17.57,4.29-26.74,9.32Z" style="fill: rgb(69, 90, 100); transform-origin: 355.24px 149.279px 0px;" id="elkedtc4nkeef" class="animable"></path><g id="elbphejg6wg15"><path d="M333.27,160.55s20.56,6,26,.71c6.77-6.64,3.93-23.38,3.13-29.93s0-11.09,1.81-13,4.44-4.74,13-1.21c-8.61,4.43-7.48,27.11-4.76,35.57-6.75,6.94-8.53,16.11-8.66,21.11,0,0-17.57,4.29-26.74,9.32Z" style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 355.24px 149.279px 0px;" class="animable"></path></g><path d="M337,183.12l-4.21-2.27c0-11.56-1.7-10.42-4.89-15s1.7-7.35,5.37-5.34S338.44,168.63,337,183.12Z" style="fill: rgb(69, 90, 100); transform-origin: 332.204px 171.483px 0px;" id="el5pfxb1h8f3q" class="animable"></path><g id="el32s8xa12rok"><path d="M337,183.12l-4.21-2.27c0-11.56-1.7-10.42-4.89-15s1.7-7.35,5.37-5.34S338.44,168.63,337,183.12Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 332.204px 171.483px 0px;" class="animable"></path></g><path d="M377.16,117.12s23,10,34.24,15.52l-.82,4.09-36.73-16.68A9.84,9.84,0,0,1,377.16,117.12Z" style="fill: rgb(69, 90, 100); transform-origin: 392.625px 126.925px 0px;" id="elyqscfe3kd9g" class="animable"></path><g id="eltkgvi4jopj"><path d="M377.16,117.12s23,10,34.24,15.52l-.82,4.09-36.73-16.68A9.84,9.84,0,0,1,377.16,117.12Z" style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 392.625px 126.925px 0px;" class="animable"></path></g><path d="M370.16,151.09c-2.33-7.23-1.85-23.63,3.69-31l36.73,16.68-8.39,42.07-13.3,7.93L363.74,173.8C363.87,168.8,363.41,158,370.16,151.09Z" style="fill: rgb(69, 90, 100); transform-origin: 387.16px 153.43px 0px;" id="elrl67rc4r3qq" class="animable"></path><path d="M392.89,159.52c-.62-.36-1.13-.07-1.13.65a2.46,2.46,0,0,0,1.12,1.94c.62.36,1.13.08,1.13-.64A2.46,2.46,0,0,0,392.89,159.52Z" style="fill: rgb(69, 90, 100); transform-origin: 392.885px 160.816px 0px;" id="elrdxoxr5bylq" class="animable"></path><path d="M387.21,156.18c-.63-.36-1.13-.07-1.14.65a2.49,2.49,0,0,0,1.13,1.94c.62.36,1.13.08,1.13-.64A2.49,2.49,0,0,0,387.21,156.18Z" style="fill: rgb(69, 90, 100); transform-origin: 387.2px 157.476px 0px;" id="elzlfwh4a1wq8" class="animable"></path><path d="M381.52,152.84c-.62-.36-1.13-.07-1.13.65a2.48,2.48,0,0,0,1.12,1.94c.63.36,1.13.08,1.14-.64A2.5,2.5,0,0,0,381.52,152.84Z" style="fill: rgb(69, 90, 100); transform-origin: 381.52px 154.136px 0px;" id="elfm0mdp6kaig" class="animable"></path><path d="M375.84,149.5c-.63-.36-1.13-.07-1.13.65a2.46,2.46,0,0,0,1.12,1.94c.62.36,1.13.08,1.13-.64A2.49,2.49,0,0,0,375.84,149.5Z" style="fill: rgb(69, 90, 100); transform-origin: 375.835px 150.796px 0px;" id="elo5w2lesxoqk" class="animable"></path><g id="elstftdpg0z9"><g style="opacity: 0.2; transform-origin: 384.36px 155.806px 0px;" class="animable"><path d="M392.89,159.52c-.62-.36-1.13-.07-1.13.65a2.46,2.46,0,0,0,1.12,1.94c.62.36,1.13.08,1.13-.64A2.46,2.46,0,0,0,392.89,159.52Z" style="fill: rgb(255, 255, 255); transform-origin: 392.885px 160.816px 0px;" id="eld4ismx881c" class="animable"></path><path d="M387.21,156.18c-.63-.36-1.13-.07-1.14.65a2.49,2.49,0,0,0,1.13,1.94c.62.36,1.13.08,1.13-.64A2.49,2.49,0,0,0,387.21,156.18Z" style="fill: rgb(255, 255, 255); transform-origin: 387.2px 157.476px 0px;" id="el72njgg30iuv" class="animable"></path><path d="M381.52,152.84c-.62-.36-1.13-.07-1.13.65a2.48,2.48,0,0,0,1.12,1.94c.63.36,1.13.08,1.14-.64A2.5,2.5,0,0,0,381.52,152.84Z" style="fill: rgb(255, 255, 255); transform-origin: 381.52px 154.136px 0px;" id="el0si7idxkqlmi" class="animable"></path><path d="M375.84,149.5c-.63-.36-1.13-.07-1.13.65a2.46,2.46,0,0,0,1.12,1.94c.62.36,1.13.08,1.13-.64A2.49,2.49,0,0,0,375.84,149.5Z" style="fill: rgb(255, 255, 255); transform-origin: 375.835px 150.796px 0px;" id="elqhgc822chb" class="animable"></path></g></g><path d="M377.19,190.22a25.17,25.17,0,0,1,8.38-2.78c1.1-.22,2.22-.44,3.32-.71a20.22,20.22,0,0,0,5.13-1.87c4.06-2.24,6.79-6.44,8.1-10.89a40.79,40.79,0,0,0,1.06-13.81c-.28-4.64-.85-9.26-.71-13.9.08-2.7.49-5.59,2.31-7.58s4.93-2.68,7.68-2.31a15.22,15.22,0,0,1,2.67.62l1.22,1.43-.47,1.73-11.95,44.13a12.5,12.5,0,0,1-5.49,7.37c-.31.19-.62.38-.95.54l-24,12.15-.9-7C372.64,194.42,374.67,191.77,377.19,190.22Z" style="fill: rgb(55, 71, 79); transform-origin: 394.47px 170.307px 0px;" id="el1g323e3im96" class="animable"></path><path d="M377.16,185.47c8.77-2.5,17.38-2.82,20.56-9.12s3.4-15,1.81-30.11a23.56,23.56,0,0,1,.14-5.85c.94-5.65,4.34-8.07,8.25-8.13a15.23,15.23,0,0,1,10.49,3.94,4.81,4.81,0,0,1,1.3,1.71,2,2,0,0,1-.25,2,2,2,0,0,1-1.35.61H418a4.62,4.62,0,0,1-1.56-.24l-.6-.18c-1.07-.34-2.13-.74-3.22-1a7.07,7.07,0,0,0-4,0,4.22,4.22,0,0,0-2.53,2.83c-3.7,12.08,1,25.06-3.17,35-3.4,9.07-15.16,12.84-23.45,15.53h0a5.08,5.08,0,0,0,2.07-1.51,3.47,3.47,0,0,0-.33-4.2A4.56,4.56,0,0,0,377.16,185.47Z" style="fill: rgb(69, 90, 100); transform-origin: 398.515px 162.359px 0px;" id="elgr0mqxslutg" class="animable"></path><g id="elmo25vwvpb5"><path d="M377.16,185.47c8.77-2.5,17.38-2.82,20.56-9.12s3.4-15,1.81-30.11a23.56,23.56,0,0,1,.14-5.85c.94-5.65,4.34-8.07,8.25-8.13a15.23,15.23,0,0,1,10.49,3.94,4.81,4.81,0,0,1,1.3,1.71,2,2,0,0,1-.25,2,2,2,0,0,1-1.35.61H418a4.62,4.62,0,0,1-1.56-.24l-.6-.18c-1.07-.34-2.13-.74-3.22-1a7.07,7.07,0,0,0-4,0,4.22,4.22,0,0,0-2.53,2.83c-3.7,12.08,1,25.06-3.17,35-3.4,9.07-15.16,12.84-23.45,15.53h0a5.08,5.08,0,0,0,2.07-1.51,3.47,3.47,0,0,0-.33-4.2A4.56,4.56,0,0,0,377.16,185.47Z" style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 398.515px 162.359px 0px;" class="animable"></path></g><path d="M371.08,191.68a13.1,13.1,0,0,1,2.24-3.93,6.71,6.71,0,0,1,3.84-2.28,4.56,4.56,0,0,1,4.14,1.35,3.47,3.47,0,0,1,.33,4.2,5.08,5.08,0,0,1-2.07,1.51,18.19,18.19,0,0,0-1.93.95,8.1,8.1,0,0,0-3.31,4.68,24,24,0,0,0-.77,5.8l0,.38-4.11-2.28A25.18,25.18,0,0,1,371.08,191.68Z" style="fill: rgb(69, 90, 100); transform-origin: 375.795px 194.867px 0px;" id="elnnjso4670e" class="animable"></path><g id="el4ww0djwrczx"><path d="M371.08,191.68a13.1,13.1,0,0,1,2.24-3.93,6.71,6.71,0,0,1,3.84-2.28,4.56,4.56,0,0,1,4.14,1.35,3.47,3.47,0,0,1,.33,4.2,5.08,5.08,0,0,1-2.07,1.51,18.19,18.19,0,0,0-1.93.95,8.1,8.1,0,0,0-3.31,4.68,24,24,0,0,0-.77,5.8l0,.38-4.11-2.28A25.18,25.18,0,0,1,371.08,191.68Z" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 375.795px 194.867px 0px;" class="animable"></path></g><polygon points="426.65 151.44 425.99 150.72 386.68 166.6 390.34 179.85 391 180.56 430.3 164.69 426.65 151.44" style="fill: rgb(130, 143, 255); transform-origin: 408.49px 165.64px 0px;" id="el5g7vjmelwdj" class="animable"></polygon><g id="elya7k9pvb9hr"><polygon points="386.68 166.6 390.34 179.85 391 180.56 387.34 167.32 386.68 166.6" style="opacity: 0.2; transform-origin: 388.84px 173.58px 0px;" class="animable"></polygon></g><g id="el9bv1uyi5neb"><polygon points="426.65 151.44 425.99 150.72 386.68 166.6 387.34 167.32 426.65 151.44" style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 406.665px 159.02px 0px;" class="animable"></polygon></g><path d="M407.83,169.53l-1.55-5.63a.51.51,0,0,0-.3-.34h0l-.1,0-.11,0h0a.87.87,0,0,0-.22,0,.59.59,0,0,0-.23.14h0a.64.64,0,0,0-.16.2h0a1,1,0,0,0-.06.16.31.31,0,0,0,0,.08.52.52,0,0,0,0,.25l.62,2.25L402.22,168h0l-.62-2.25a.5.5,0,0,0-.41-.37H401a.57.57,0,0,0-.22,0,1,1,0,0,0-.24.15h0a.74.74,0,0,0-.16.2h0a1,1,0,0,0-.06.16s0,.06,0,.08a.69.69,0,0,0,0,.25l1.56,5.63a.53.53,0,0,0,.11.21.41.41,0,0,0,.11.07.13.13,0,0,0,.06,0s0,0,0,0a.39.39,0,0,0,.15,0h.09a.65.65,0,0,0,.26-.06.73.73,0,0,0,.47-.83l-.63-2.29,3.41-1.38h0l.63,2.29h0a.56.56,0,0,0,.25.31s0,0,.05,0a.36.36,0,0,0,.15,0h.08a.58.58,0,0,0,.14,0l.12,0h0A.74.74,0,0,0,407.83,169.53Z" style="fill: rgb(255, 255, 255); transform-origin: 404.069px 167.845px 0px;" id="elcjac76v779" class="animable"></path><path d="M400.29,171.83a.51.51,0,0,0-.28-.31h0l-.2,0h0a.58.58,0,0,0-.18,0h0a.82.82,0,0,0-.2.12h0a1,1,0,0,0-.14.16l-.11.15a2,2,0,0,1-.17.23l-.05.07h0l-.2.2a.74.74,0,0,1-.12.13l0,0,0,0c-.05.05-.12.09-.18.14l-.19.14h0l-.22.11-.28.14h0l-.32.1-.08,0-.09,0a2.1,2.1,0,0,1-2.5-1.57h0a2.7,2.7,0,0,1-.07-1h0a2.56,2.56,0,0,1,.1-.48.61.61,0,0,1,0-.12,2.17,2.17,0,0,1,.15-.35,2.77,2.77,0,0,1,.22-.37l.05-.06a2.35,2.35,0,0,1,.3-.33v0l.11-.08a2.74,2.74,0,0,1,.79-.48,2.7,2.7,0,0,1,1.87-.09.69.69,0,0,0,.41,0,.72.72,0,0,0,.47-.83.58.58,0,0,0-.15-.24h0a.56.56,0,0,0-.2-.11h0a2.8,2.8,0,0,0-.28-.06l-.2,0-.15,0a2.6,2.6,0,0,0-.56,0,3.53,3.53,0,0,0-.75.12,4.67,4.67,0,0,0-.72.24,4.15,4.15,0,0,0-.76.38h0a5.86,5.86,0,0,0-.62.46.12.12,0,0,1,0,.05,5.79,5.79,0,0,0-.48.51l-.07.09a4.45,4.45,0,0,0-.38.58h0c-.07.12-.11.26-.17.38s-.09.21-.13.31a2.45,2.45,0,0,0-.08.37,2.21,2.21,0,0,0-.08.35,3.93,3.93,0,0,0,0,.49,1.92,1.92,0,0,0,0,.24,3,3,0,0,0,.12.72v0a3.93,3.93,0,0,0,.28.7,1.33,1.33,0,0,0,.14.19,2.7,2.7,0,0,0,.27.39,3,3,0,0,0,.26.24l.16.15.11.08.08,0a2.27,2.27,0,0,0,.34.19l.08.05a3.7,3.7,0,0,0,2.88-.05,4.61,4.61,0,0,0,2.35-2A.62.62,0,0,0,400.29,171.83Z" style="fill: rgb(255, 255, 255); transform-origin: 396.931px 170.806px 0px;" id="elfzp80wvh1gw" class="animable"></path><path d="M411,168.25l-1.55-5.63a.52.52,0,0,0-.37-.36.7.7,0,0,0-.14,0h-.06a.52.52,0,0,0-.21,0,1,1,0,0,0-.24.15h0a1,1,0,0,0-.16.2h0a.76.76,0,0,0-.06.16.24.24,0,0,0,0,.08.53.53,0,0,0,0,.25l1.55,5.62a.52.52,0,0,0,.49.38h.05a.88.88,0,0,0,.26-.06A.72.72,0,0,0,411,168.25Z" style="fill: rgb(255, 255, 255); transform-origin: 409.603px 165.675px 0px;" id="elron37o2gt" class="animable"></path><path d="M413.7,167.76h0l1.36-.54,2.86-1.16a.67.67,0,0,0,.41-.76.48.48,0,0,0-.48-.34h0a.52.52,0,0,0-.21,0l-3.6,1.46h0l-.49-1.8,3.08-1.24a.68.68,0,0,0,.42-.75.48.48,0,0,0-.27-.32h0l-.1,0-.11,0h0a.8.8,0,0,0-.21,0h0l-3.08,1.24h0l-.48-1.74,3.54-1.43a.74.74,0,0,0,.21-.13.65.65,0,0,0,.22-.62h0l0,0a.46.46,0,0,0-.08-.13.48.48,0,0,0-.16-.12h0l-.19,0h0a.63.63,0,0,0-.22.05l-4.16,1.68a1,1,0,0,0-.24.15h0a.74.74,0,0,0-.16.2h0a.43.43,0,0,0-.05.16l0,.08a.54.54,0,0,0,0,.25l1.52,5.52a.59.59,0,0,0,.12.22h0l.05,0,.1.07h0l.07,0h.14l.14,0h0Z" style="fill: rgb(255, 255, 255); transform-origin: 414.92px 163.57px 0px;" id="elvl2ike2jk1a" class="animable"></path><path d="M423.47,159.63h0a.8.8,0,0,0-.21.05h0l-3.09,1.25h0l-.51-1.84,3.55-1.43a.67.67,0,0,0,.43-.76.48.48,0,0,0-.27-.32h0a.58.58,0,0,0-.19,0h0a.8.8,0,0,0-.21.05h0l-4.18,1.69h0a.59.59,0,0,0-.23.14h0a.74.74,0,0,0-.16.19h0a.44.44,0,0,0-.05.15.32.32,0,0,0,0,.09.74.74,0,0,0,0,.21v0h0l1.54,5.58h0a.45.45,0,0,0,.12.21h0l.06,0a.71.71,0,0,0,.09.07h0a.48.48,0,0,0,.18,0h.12l.09,0,.09,0h0l.09-.06h0l.06,0,.05,0h0a.69.69,0,0,0,.23-.69l-.6-2.19,3.08-1.25A.68.68,0,0,0,424,160,.49.49,0,0,0,423.47,159.63Z" style="fill: rgb(255, 255, 255); transform-origin: 421.177px 160.77px 0px;" id="el59ftwty1v9n" class="animable"></path><path d="M407,130h-.06a4.45,4.45,0,0,0-.79.12c-5.19,1.32-10.11,13.32-14.21,34.63a.3.3,0,0,0,.24.35h.06a.31.31,0,0,0,.3-.25c2.42-12.6,7.55-33.94,14.43-34.26h0l.21,0a2.13,2.13,0,0,1,.84.4l1.59.76C408.63,130.67,407.73,130,407,130Z" style="fill: rgb(230, 230, 230); transform-origin: 400.772px 147.55px 0px;" id="el37ywivm6ggv" class="animable"></path></g><defs>     <filter id="active" height="200%">         <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>    </filter>    <filter id="hover" height="200%">        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>            <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>    </filter></defs></svg>          </div>
            <div class="col-12 mb-5 text-center col-xl-6 mb-xl-0 text-xl-start d-flex flex-column align-self-center">
              <h1 class="titulo">Sobre o <span>Start Carreira</span></h1>
              <h2 class="subtitulo">O Start Carreira é uma plataforma dedicada a ajudar jovens profissionais a iniciarem suas jornadas no mercado de trabalho com confiança e preparação. Oferecemos recursos essenciais para simulação de entrevistas, criação de currículos impactantes e exploração de oportunidades personalizadas.</h2>
            </div> 
          </div>
        </div>
      </div>
    </section>
    
    <section class="recursos" id="recursos" data-aos="fade-up">
      <div class="container">
        <div class="section-head">
          <div class="row">
            <div class="col-12 text-center">
              <h1>Recursos Especiais <span> para Você </span></h1>
            </div>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 d-flex justify-content-center">
          <div class="col mb-4">
            <div class="text-center cardRecursos">
              <i class='bx bx-search icon'></i>
              <h4 class="titulo">Simulador de Entrevista</h4>
              <h6 class="subtitulo">Simule entrevistas reais para <br> diversas áreas profissionais.</h6>
            </div>
         </div>  
         <div class="col mb-4">
            <div class="text-center cardRecursos">
              <i class='bx bxs-file-doc icon'></i>
              <h4 class="titulo">Gerador de Currículo</h4>
              <h6 class="subtitulo">Nosso gerador simplifica o <br> processo de criar um currículo, <br> preenchimento fácil e rápido.</h6>
            </div>
         </div>
         <div class="col mb-4">
            <div class="text-center cardRecursos">
              <i class='bx bxs-compass icon'></i>  
              <h4 class="titulo">Orientações e Dicas</h4>
              <h6 class="subtitulo">Dicas para impulsionar sua <br> carreira, especialmente para <br>  iniciantes.</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="vagas-recentes" id="vagas">
      <div class="container" data-aos="fade-up">
        <div class="section-head">
          <div class="row">
            <div class="col-12 text-center">
              <h1>Vagas para <span>Iniciantes</span></h1>
            </div>
          </div>
        </div>
      
        <div id="jobs-container" class="jobs-container row row-cols-md-1 row-cols-lg-2 justify-content-start" id="jobsContainer">
          <div class="col">
            <div class="job-card">
                <h2 class="job-title">PontoTel - Desenvolvedor Back End Jr (Remoto)</h2>
                <p class="job-content">Descrição da vaga  Aqui você terá a chance de crescer e construir com o time um ambiente agradável, descontraído e desafiador, trabalhando em colaboração com profissionais de produto, marketing, desenvolvimento, vendas e implantação. Não somos designers de balcão de pedidos, somos parte do fluxo, do processo e das ideias.  Todas as ideias são ouvidas, respeitadas e levadas em consideração. Além disso, a equipe é incentivada a sair da zona de conforto e trazer soluções inovadoras. Que tal fazer parte desse time?  Responsabilidades e atribuições  Utilizamos tecnologia de ponta em todas as subáreas do nosso time: • Infraestrutura com script de criação do Terraforms e todo ambiente no Kunbernetes do Google; • Backend Python e ambiente de CI/CD completo; • Frontend Vue.js(3) nas mais modernas práticas de programação; • Aplicativos mobile em React native e grande processo de prototipação e produtização; • Design e UX próximo dos desenvolvedores; • Equipes Scrum e Scrumban; • Funcionalidades... com machine learning e reconhecimento de imagens  O que vou fazer? • Desenvolvimento de novas funcionalidades para o sistema; • Manutenção e melhoria de código de funcionalidades existente; • Desen • v • olvimento de testes unitários para o sistema; • *  Auxiliar a equipe de suporte e implantação com questões internas e necessidades de clientes.  Requisitos e qualificações • Disciplina para executar tarefas do dia a dia; • Organização e pró-atividade;  Boa comunicação interpessoal; • Conheci • mento de API REST; • * Conhecimento em JavaScript ES6; • VueJS (3.0); • HTML: • CSS.  E os diferenciais? • GIT; • Webpack; • CSS Grid ou Flexbox.  Informações adicionais • Vale Refeição e/ouAlimentação via cartão Caju (aceito em todos os restaurantes, supermercados, ifood, etc.) • Seguro de saúde 100% pago pela empresa; • Seguro de vida; • Auxílio Creche; • Licença Maternidade prolongada; • Plano de carreira personalizado com possibilidade de promoção a cada 6 meses; • Bonificação a cada promoção; • Salário competitivo; • Horários Flexíveis; • Ambiente casual e aprendizado constante; • Acesso a cursos complementares a partir do primeiro dia de trabalho; • Treinamento semanal com o time para aprimorar habilidades técnicas; • Tempo para cursos de aprimoramento; • Day-off no mês do aniversário; • Happy Hour por conta da PontoTel</p>
                <div class="job-details">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="row company-details align-items-center">
                                <div class="col-auto">
                                    <div class="logo-container">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTthVDKH1pHRaghxgikj81A7xjDxjR647nEvAmyEtM&amp;s" alt="Logo da Empresa">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="company-name">
                                        <p>Pontotel</p>
                                    </div>
                                    <div class="location">
                                        <p><i class="bx bxs-map"></i> Qualquer lugar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="company-name text-end">
                                <p>Salário</p>
                            </div>
                            <div class="text-end">
                                <p>Não informado</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="jobs/undefined" class="job-overlay"></a>
            </div>
          </div>
          
          <div class="col">
            <div class="job-card">
                <h2 class="job-title">Desenvolvedor(a) Backend Java (Remoto)</h2>
                <p class="job-content">Tem experiência com sistemas distribuídos em Java e gostaria de trabalhar da sua casa implementando sistemas que serão usados por milhões de pessoas em uma empresa que valoriza e dá autonomia aos profissionais?  Você poderá trabalhar de qualquer lugar do Brasil, em regime 100% remoto CLT. A empresa é uma consultoria que existe há 11 anos e foca apenas em projetos de longa duração que tragam impacto positivo para a sociedade e que ajudem os desenvolvedores a evoluir. Além disso, acredita em desenvolvimento ágil, DevOps e trabalho remoto e segue um modelo completamente diferente do body shop - você não está condicionado ao projeto em que iniciará nem se o cliente manterá o projeto ou não. Algumas práticas do dia a dia mostram que você realmente é parte da empresa, como por exemplo os projetos possuírem code review de pessoas externas àquela conta.  Há equipes atendendo a diferentes negócios e com tecnologias distintas, como bancos digitais, pagamentos e cartões, grandes e-commerces... envolvendo usos de linguagens diferentes da JVM, como Java, Kotlin e Clojure, sempre com arquiteturas reativas modernas de microsserviços.  Por que eu deveria me candidatar a essa vaga: • Trabalhar remotamente, com qualidade de vida, interagindo com tecnologias de ponta, definindo a arquitetura e participando na construção de sistemas que serão usados por milhões de pessoas; • Ter autonomia e incentivo ao crescimento profissional, tendo tempo de prototipar com o time diferentes tecnologias para ver qual atende melhor às necessidades do cliente; • Você será contratado em regime CLT, com salário entre R$ 5.500 e R$ 16.500 (dependendo de como você for avaliado), R$ 1.100 em vale-refeição ou vale-alimentação (você escolhe) com um pagamento extra em dezembro, plano de saúde SulAmérica ou Unimed integral (com desconto de 50% para dependentes), plano odontológico SulAmérica, seguro de vida, auxílio creche, aulas de inglês, auxílio equipamento (notebook, cadeira etc) de R$ 4.000,00 e mais um bônus anual de até 3 salários com base no desempenho da empresa.  Para se candidatar, você precisa ter: • Espírito de trabalho em equipe, comprometimento e vontade de pôr a mão na massa; • Capacidade de aprender rapidamente tecnologias emergentes mediante ao consumo de livros, documentação técnica, vídeos ou palestras; • Domínio de orientação a objetos, Java SE 8 (incluindo lambda) e suas APIs principais (java.lang, Collections, streams, etc); • Conhecimento e consciência da necessidade de testes unitários, de integração e aceitação; • Sólidos conhecimentos em bancos de dados relacionais; • Familiaridade com Docker  Alguns diferenciais serão: • Sólidos conhecimentos em arquitetura reativa; • Sólidos conhecimentos de pelo menos um ambiente de cloud; • Ampla experiência com integrações de sistemas, arquitetura de microsserviços e DDD; • Conhecimento prático de técnicas para escalar serviços e resolver problemas de performance; • Experiência com Kotlin, Clojure e/ou com as versões mais recentes do Java SE; • Experiência com Spring WebFlux; • Experiência com Google Cloud Platform; • Experiência com Kubernetes; • Experiência com bancos NoSQL; • Conhecimentos de segurança; • Conhecimentos de entrega contínua e automação de infraestrutura em geral  Como se candidatar:  Basta enviar seu nome e email para o nosso sistema e te enviaremos as instruções</p>
                <div class="job-details">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="row company-details align-items-center">
                                <div class="col-auto">
                                    <div class="logo-container">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT86dJS5_2SFkSgnoY7hTnCUP7xEToNhf-9oNindWg&amp;s" alt="Logo da Empresa">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="company-name">
                                        <p>Improving</p>
                                    </div>
                                    <div class="location">
                                        <p><i class="bx bxs-map"></i> Qualquer lugar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="company-name text-end">
                                <p>Salário</p>
                            </div>
                            <div class="text-end">
                                <p>R$&nbsp;5,5&nbsp;mil a R$&nbsp;16,5&nbsp;mil </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="jobs/undefined" class="job-overlay"></a>
            </div>
          </div>
        </div>
      
        <a href="vagas.html" class="btn btn-primary w-100">Descubra Outras Vagas</a>
      </div>
    </section>
    
    <section class="montando" id="montando" data-aos="fade-left">
      <div class="container">
        <div class="section-head">
          <div class="row">
            <div class="col-12 col-xl-7">
              <img class="img-fluid" src="assets/img/mockups/curriculo-mockup.svg" alt="">
            </div>
            <div class="col-12 mb-5 text-center col-xl-5 mb-xl-0 text-xl-start d-flex flex-column align-self-center">
              <h1 class="titulo">Montando o <span>currículo ideal</span></h1>
              <h2 class="subtitulo">Crie currículos profissionais e impactantes em minutos com o nosso gerador de currículos. Escolha entre modelos prontos e personalize facilmente suas informações para destacar suas habilidades e experiências.</h2>
            </div> 
          </div>
        </div>
      </div>
    </section>
    
    <section class="cursos" id="cursos" data-aos="fade-right">
      <div class="container">
        <div class="section-head">
          <div class="row">
            <div class="col-12 mb-5 text-center col-xl-5 mb-xl-0 text-xl-start d-flex flex-column align-self-center">
              <h1 class="titulo">Indicação de <span>Cursos</span></h1>
              <h2 class="subtitulo">Explore uma seleção de cursos recomendados para o seu desenvolvimento profissional. Descubra oportunidades de aprendizado em diversas áreas e aprimore suas habilidades para avançar na sua carreira.</h2>
            </div>
            <div class="col-12 col-xl-7">
              <img class="img-fluid" src="assets/img/mockups/cursos-mockup.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="atualizacoes" id="atualizacoes" class="py-5" data-aos="fade-up">
      <div class="container">
        <div class="section-head">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-10 text-center text-group">
              <h1 class="titulo">Receba Nossas <span>Últimas Novidades</span></h1>
              <h2 class="subtitulo">Inscreva-se para receber nossas últimas atualizações, dicas de carreira e novidades sobre recursos exclusivos. Mantenha-se informado e prepare-se para o sucesso profissional!</h2>
              <form action="#" method="POST">
                <div class="input-group">
                  <input type="email" class="form-control" placeholder="Digite seu e-mail" aria-label="Digite seu e-mail" aria-describedby="button-addon2">
                  <a class="btn btn-primary" href="#footer" type="submit" id="button-addon2">Inscrever-se</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="faq" id="faq" class="py-5">
      <div class="container" data-aos="fade-up">
        <div class="section-head">
          <div class="row">
            <div class="col-12 text-center">
              <h1><span>FAQ</span> - Perguntas Frequentes</h1>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="accordion custom" id="faqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Como posso me preparar para o meu primeiro emprego?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Para se preparar para o seu primeiro emprego, é importante pesquisar sobre a empresa, praticar habilidades de entrevista e destacar suas habilidades e experiências relevantes.
                  </div>
                </div>
              </div>
            
              <!-- Pergunta 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Como criar um currículo para o primeiro emprego?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Você pode criar um currículo focado em suas habilidades, educação e experiências relevantes, destacando suas realizações e qualificações.
                  </div>
                </div>
              </div>
            
              <!-- Pergunta 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    O que devo vestir para uma entrevista de emprego?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Para uma entrevista de emprego, é recomendado vestir-se de forma profissional e adequada ao ambiente da empresa.
                  </div>
                </div>
              </div>
            
              <!-- Pergunta 4 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Como lidar com a falta de experiência em um primeiro emprego?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Você pode destacar suas habilidades transferíveis, experiências de voluntariado ou estágios relevantes, e mostrar disposição para aprender e crescer na função.
                  </div>
                </div>
              </div>
            
              <!-- Pergunta 5 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Como encontrar oportunidades de estágio ou emprego?
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Você pode utilizar sites de emprego, participar de feiras de carreira, procurar por programas de estágio e networking com profissionais da área.
                  </div>
                </div>
              </div>
            
              <!-- Pergunta 6 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Como manter a motivação durante a busca pelo primeiro emprego?
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Mantenha-se focado nos seus objetivos, estabeleça metas realistas, e busque apoio de amigos, família ou mentores.
                  </div>
                </div>
              </div>
            
              <!-- Pergunta 7 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Como lidar com o nervosismo em uma entrevista de emprego?
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Respire profundamente, pratique respostas para perguntas comuns, e lembre-se que é normal sentir nervosismo.
                  </div>
                </div>
              </div>
            </div>
            <!-- Botão "Veja mais perguntas frequentes" -->
            <div class="text-center mt-4">
              <a href="#" class="btn btn-primary w-100">Veja mais perguntas frequentes</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <footer  id="footer" class="py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="mb-3">Contate-nos</h3>
            <p class="mb-2">Envie suas dúvidas e sugestões:</p>
            <form action="#" method="POST">
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Seu Nome" required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Seu E-mail" required>
              </div>
              <div class="mb-3">
                <textarea class="form-control" placeholder="Sua Mensagem" rows="3" required></textarea>
              </div>
              <button type="submit" class="w-100 btn btn-primary">Enviar Mensagem</button>
            </form>
          </div>
        </div>
        <hr class="my-4">
        <div class="row">
          <div class="col-md-6 text-center text-md-start">
            <p>&copy; 2024 Start Carreira. Todos os direitos reservados.</p>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#">Termos de Uso</a></li>
              <li class="list-inline-item"><a href="#">Política de Privacidade</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    {{-- AOS --}}
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    {{-- Script CDN Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
    <script>
      $('.navbar-nav a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;
      
        $('html, body').animate({
          scrollTop: targetOffset - 100
      
        }, 150);
      })

      document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
          duration: 1500,
          once: true
        });
      });
    </script>
  </body>
</html>