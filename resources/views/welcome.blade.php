@extends('component.principal')

@section('conteudo')

<div class="d-flex flex-row-reverse bd-highlight">
<a href="{{ route('tarefa.create') }}" class="btn btn-outline-warning m-2 btn-primary">Adicionar</a>
</div>

<div class="table-responsive">

<table class="table">
   <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">tarefa</th>
      <th scope="col">Status</th>
      <th scope="col" class="d-flex justify-content-center">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tarefas as $t)	
    <tr>
      <th scope="row">{{$t->id}}</th>
      <td>{{$t->descricao}}</td>
      <td class="justify-content-center">{{ $t->status ? 'Feito' : 'Pendente'}}</td>
      <td class="d-flex justify-content-center">
	<a class="btn btn-info mx-1" href="{{ route('tarefa.show', $t->id) }}">Exibir</a>
    	<a class="btn btn-secondary mx-2" href="{{ route('tarefa.edit', $t->id) }}">Editar</a>
	<form action="{{ route('tarefa.destroy', $t->id) }}" method="post">     
		@csrf
		@method("DELETE")
		<button class="btn btn-danger" type="submit">Apagar</button>
	</form>
     </td>
    </tr>
  @endforeach
  </tbody>
</table>

</div>
@endsection
