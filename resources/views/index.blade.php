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
@section('title', 'Science Ar')

{{-- Conteudo do site --}}
@section('content')

<meta name="description" content="Science Ar - Explore a magia da ciência por meio da realidade aumentada">
<meta name="keywords" content="quiz, sciencear, science ar, science, realidade aumentada, setimo ano, enem">
<meta property="og:title" content="Science Ar - Explore a magia da ciência por meio da realidade aumentada. Com o Science AR você pode acessar modelos 3D grátis pelo APP e realizar quizzes pelo site.">
<meta property="og:description" content="Aprenda com Ciências da Natureza elementos 3D">
<meta property="og:image" content="https://sciencear.x10.mx/img/icon.gif">
<meta property="og:url" content="https://sciencear.x10.mx">
<link rel="canonical" href="https://sciencear.x10.mx">

<body class="body-main background-image-home">
    <div class="fundo-home">

        {{-- VIDE DE FUNDO --}}
        <video autoplay loop muted id="video-fundo-home" style="z-index: 0!important">
            <source src="../img/background.mp4" type="video/mp4">
        </video>

        {{-- VIDE DE FUNDO --}}
        <video autoplay loop muted id="video-fundo-home-dois" style="z-index: -1!important; bottom:0">
            <source src="../img/background.mp4" type="video/mp4">
        </video>

        {{-- Menu --}}
        @include('layouts/menu')

        <div class="cont-home row">
            <div class="titulo-home col">
                <h1>Explore a magia da ciência por meio da realidade aumentada</h1>

                <p class="subtitulo-home">
                    A melhor maneira de aprender e se divertir!
                </p>

                <a class="btnSobreNos" href="/about" style="color: #f6f6f6;">Sobre Nós</a>
            </div>


            <div class="img-astronaut col">
            </div>

        </div>
        </div>

        {{-- JQUERY --}}
        <script src="{{ asset('js/code.jquery.com_jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

</body>
@endsection

