@extends('component.principal')

@section('conteudo')



<div class="row d-flex justify-content-center">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Tarefa</h5>
    <h6 class="card-subtitle mb-2 text-muted">Código {{ $tarefa->id }}</h6>
    <p class="card-text">{{ $tarefa->descricao }}</p>
    <a class="btn btn-outline-info"  href="{{ route('tarefa.index') }}" class="card-link">Voltar</a>
  </div>
</div>

</div>
@endsection
