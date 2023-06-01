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
@section('title', 'Science Ar - Redefinir Senha')

{{-- Conteudo do site --}}
@section('content')

<meta name="description" content="Science Ar - Redefinir Senha">
<meta name="keywords" content="quiz, sciencear, science ar, science, realidade aumentada, setimo ano, enem, login">
<meta property="og:title" content="Science Ar  - Redefinir Senha">
<meta property="og:description" content="Redefina sua senha">
<meta property="og:image" content="https://sciencear.x10.mx/img/icon.gif">
<meta property="og:url" content="https://sciencear.x10.mx">
<link rel="canonical" href="https://sciencear.x10.mx">

  <div class="menu-login">
    {{-- Menu --}}
    @include('layouts/menu')
  </div>
  
<body class="body-account">
    <section class="text-center section-login">
        <!-- Background image -->
        <div class="bg-image d-flex">
        <div class="container container-login">
            {{-- Card de Login --}}
            <div class="cardLogin shadow-5-strong" style="margin-top: 70px;">
                <div class="card-body py-5">
                <div class="row d-flex justify-content-center w-100" style="margin: 0;">
                    <div class="col-lg-8 col-lg-login">
                    <h1 class="fw-bold mb-5">Redefinir Senha</h1>
                    <form method="POST"  action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" id="token" value="{{$token}}">
                        @error('token')
                            <span class="invalid-feedback" role="alert" style="text-align: left">
                                {{$message}}
                            </span>
                        @enderror

                        <!-- EMAIL -->
                        <div class="form-outline mb-4" style="margin-bottom: 35px!important">
                            <input id="email" type="email" class="form form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="E-mail" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert" style="text-align: left">
                                        {{$message}}
                                </span>
                            @enderror
                        </div>
                        
                        {{-- SENHA --}}
                        <div class="form-outline mb-4" style="margin-bottom: 35px!important">
                            <div class="col" style="position: relative">
                                <input id="password" type="password" class="form form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" value="{{ old('password') }}" placeholder="Senha">
                                <img class="view-password" id="view-password" src="{{asset('img/eye.svg')}}" srcset="">
                            </div>

                            @error('password')
                                <span class="invalid-feedback" role="alert" style="text-align: left; display: block!important">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        
                        
                      {{-- CONFIRMAR SENHA --}}
                      <div class="form-outline mb-4" style="margin-bottom: 35px!important">
                        <div class="col" style="position: relative">
                            <input id="password_confirmation" type="password" class="form form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="new-password" value="{{ old('password') }}" placeholder="Confirmar Senha">
                            <img class="view-password" id="view-password-confirm" src="{{asset('img/eye.svg')}}" srcset="">
                        </div>

                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert" style="text-align: left; display: block!important">
                                {{ $message }}
                            </span>
                        @enderror
                      </div>

                        <!-- BTN ENVIAR -->
                        <button type="submit" class="btn btnLogin btnSobreNos mt-4">
                            Redefinir Senha
                        </button><br><br> 
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    {{-- JQUREY E JS --}}
    <script src="{{ asset('js/code.jquery.com_jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
    {{-- Footer --}}
    @include('layouts/footer')
</body>
@endsection
