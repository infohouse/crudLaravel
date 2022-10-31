@extends('component.principal')

@section('conteudo')

<form method="post" action="{{ route('tarefa.store') }}">
 @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tarefa</label>
    <input type="text" name="descricao" class="form-control" id="exampleInputEmail1">
  </div>
  @if($errors->any())		
	<div class="alert alert-danger" role="alert">
        	{{ $errors->has('tarefa') ? $errors->first('tarefa') : '' }}
	</div>
  @endif
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" value="true" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Realizado
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" value="false" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Pendente
  </label>
</div>
  <input type="hidden" name="userid" value="{{ $id }}">  
  <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
</form>

@endsection
