@extends('layouts.main')
@section('title', 'Vagas')
@section('current-page-name', 'Descobrir Vagas')
@section('content')
<section class="BuscarVagas">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="titulo mb-5">Buscar vagas</h1>
      </div>
    </div>
  </div>
  
  <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 justify-content-center align-items-center">
    <div class="col mb-4">
      <div onclick="buscarVaga('desenvolvedor-front-end-jr')" class="CardAreas d-flex justify-content-between">
        <div class="text-group text-group-selected">
          <h2>Desenvolvedor <br> back-end Júnior</h2>
          <p>XX Vagas</p>
        </div>

        <div class="maleta">
          <img src="assets/img/icons/Frame.svg" alt="">
        </div>
      </div>
    </div>

    <div class="col mb-4">
      <div onclick="buscarVaga('desenvolvedor-mobile-junior')" class="CardAreas d-flex justify-content-between">
        <div class=" text-group">
          <h2>Desenvolvedor <br> Mobile Júnior</h2>
          <p>XX Vagas</p>
        </div>

        <div class=" maleta">
          <img src="assets/img/icons/Frame.svg" alt="">
        </div>
      </div>
    </div>

    <div class="col mb-4">
      <div onclick="buscarVaga('desenvolvedor-back-end-jr')" class="CardAreas d-flex justify-content-between">
        <div class=" text-group">
          <h2>Desenvolvedor <br> front-end Júnior</h2>
          <p>XX Vagas</p>
        </div>

        <div class=" maleta">
          <img src="assets/img/icons/Frame.svg" alt="">
        </div>
      </div>
    </div>

    <div class="col mb-4">
      <div onclick="buscarVaga('')" class="CardAreas d-flex justify-content-between">
        <div class=" text-group">
          <h2>Designer <br> UI/UX Júnior</h2>
          <p>XX Vagas</p>
        </div>

        <div class=" maleta">
          <img src="assets/img/icons/Frame.svg" alt="">
        </div>
      </div>
    </div>
    
    <div class="col mb-4">
      <div onclick="buscarVaga('desenvolvedor-front-end-estagiario')" class="CardAreas d-flex justify-content-between">
        <div class=" text-group">
          <h2>Desenvolvedor <br> Front-end Estágio</h2>
          <p>XX Vagas</p>
        </div>

        <div class=" maleta">
          <img src="assets/img/icons/Frame.svg" alt="">
        </div>
      </div>
    </div>

    <div class="col mb-4">
      <div onclick="buscarVaga('desenvolvedor-back-end-estagiario')" class="CardAreas d-flex justify-content-between">
        <div class=" text-group">
          <h2>Desenvolvedor <br> Back-end Estágio</h2>
          <p>XX Vagas</p>
        </div>

        <div class=" maleta">
            <img src="assets/img/icons/Frame.svg" alt="">
        </div>
      </div>
    </div>

    <div class="col mb-4">
      <div onclick="buscarVaga('desenvolvedor-mobile-estagiario')" class="CardAreas d-flex justify-content-between">
        <div class=" text-group">
          <h2>Desenvolvedor <br> Mobile Estágio</h2>
          <p>XX Vagas</p>
        </div>

        <div class=" maleta">
          <img src="assets/img/icons/Frame.svg" alt="">
        </div>
      </div>
    </div>

    <div class="col mb-4">
      <div onclick="buscarVaga('')" class="CardAreas d-flex justify-content-between">
        <div class=" text-group">
          <h2>Designer <br> UI/UX Estágio</h2>
          <p>XX Vagas</p>
        </div>

        <div class=" maleta">
          <img src="assets/img/icons/Frame.svg" alt="">
        </div>
      </div>
    </div>
  </div> 

  <div id="jobs-container" class="jobs-container row row-cols-md-1 row-cols-lg-2 justify-content-start">
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
                      <p><i class="bx bx-book-open"></i> Qualquer lugar</p>
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
                    <p><i class="bx bx-book-open"></i> Qualquer lugar</p>
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

      <div class="row btn-group-lg">
        <div class="col-12 mb-2">
          <a class="btn btn-primary w-100">Descubra Outras Vagas</a>
        </div>
      </div> 
    </div>
  </div>
</section>
@endsection
