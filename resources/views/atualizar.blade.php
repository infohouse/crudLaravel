@extends('component.principal')

@section('conteudo')


<form method="post" action="{{ route('tarefa.update', $tarefa->id) }}">
 @csrf
 @method('PUT')

 <input type="hidden" name="id" value="{{ $tarefa->id }}" /> 

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tarefa</label>
    <input type="text" name="descricao" value="{{ $tarefa->descricao }}" class="form-control" id="exampleInputEmail1">
  </div>
  @if($errors->any())		
	<div class="alert alert-danger" role="alert">
        	{{ $errors->has('tarefa') ? $errors->first('tarefa') : '' }}
	</div>
  @endif
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" value="1" {{ $tarefa->status == 1 ? 'checked' : '' }} id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Realizado
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="status" value="0" id="flexRadioDefault2" {{ $tarefa->status == 0 ? 'checked' : '' }}>
  <label class="form-check-label" for="flexRadioDefault2">
    Pendente
  </label>
</div>
  <button type="submit" class="btn btn-primary mt-2">Atualizar</button>
</form>



@endsection
