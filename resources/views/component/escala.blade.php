<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Infohouse - A Casa da Informática</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="antialiased">

@if(!isset($restrito))
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fw-bold fs-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('escala.index') }}">Escala</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        @if(isset($_SESSION['acesso']))
        <li class="nav-item">
          <a class="btn btn-light btn-outline-info text-primary" aria-current="page" href="{{ route('sessao.destroy') }}">Logout</a>
        </li>
	@endif

    </div>
  </div>
</nav>
@endif

<div class="container mt-5">

@yield('conteudo')

</div>


</div>
</body>
</html>
