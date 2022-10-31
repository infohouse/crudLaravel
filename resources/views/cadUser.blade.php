@extends('component.principal')

@section('conteudo')

<div class="row d-flex justify-content-center">
<div class="w-25">
<h1 class="text-primary mt-5">Criação de Conta</h1>

<form method="post" action="{{ route('store') }}" class="mt-5">
 @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Login</label>
    <input type="text" name="login" class="form-control" id="exampleInputEmail1">
  </div>
  @if($errors->any())		
	<div class="alert alert-danger" role="alert">
        	{{ $errors->has('login') ? $errors->first('login') : '' }}
        </div>
  @endif
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Senha</label>
    <input type="text" name="senha" class="form-control" id="exampleInputEmail1">
  </div>
  @if($errors->any())		
	<div class="alert alert-danger" role="alert">
        	{{ $errors->has('login') ? $errors->first('login') : '' }}
        </div>
  @endif
<div class="row d-dlex justify-content-centent">
  <button type="submit" class="btn btn-primary mx-auto mt-2">Cadastrar</button>
</div>
    <input type="hidden" name="novo" value="1" class="form-control" id="exampleInputEmail1">
</form>

</div>
</div>
@endsection
