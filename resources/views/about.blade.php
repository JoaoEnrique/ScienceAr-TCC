{{-- 
    "PRA QUE SERVE
    TANTO CÓDIGO
    SE A VIDA
    NÃO É PROGRAMADA
    E AS MELHORES COISAS
    NÃO TEM LÓGICA". 
    Algúem (algum ano)
--}}

@extends('layouts.main')
@section('title', 'Science Ar - Sobre Nós')

{{-- Conteudo do site --}}
@section('content')

<meta name="description" content="Science Ar - Sobre Nós">
<meta name="keywords" content="quiz, sciencear, science ar, science, realidade aumentada, setimo ano, enem">
<meta property="og:title" content="Science Ar - Sobre Nós">
<meta property="og:description" content="Quem somos nós?">
<meta property="og:image" content="https://sciencear.x10.mx/img/icon.gif">
<meta property="og:url" content="https://sciencear.x10.mx">
<link rel="canonical" href="https://sciencear.x10.mx">


<body>
  {{-- Menu --}}
  @include('layouts/menu')

  <div class="container-main">
    <main>
      <h1 class="tituloCentralizado">Bem Vindo</h1>
        
      <div>
        <div class="row">
          {{-- Imagem --}}
          <div class="col col-img-about">
            <div class="img-rafiki">
              <img src="../img/sobre-nos-img/rafiki.png" class="img-rafiki">
            </div>
          </div>
          
        {{-- Quem somos --}}
          <div class="col col-about">            
            <div class="texto-quem-somos">
              <p>
                Somos a plataforma Science AR, uma iniciativa inovadora que busca solucionar problemas enfrentados no ensino tradicional, como a falta de compreensão teórica e estímulos visuais. Nosso objetivo é elevar o sucesso no aprendizado e engajar estudantes do 7º ano, utilizando a Realidade Aumentada para disponibilizar materiais de apoio e questionários temáticos de forma simples e interativa. Buscamos transformar o processo educacional, oferecendo um ambiente estimulante e enriquecedor, contribuindo para a melhoria do ensino de Ciências da Natureza e preparando os alunos para um futuro promissor.
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  {{-- Footer --}}
  @include('layouts/footer')
<body>
@endsection

