@extends('layouts.admin')

<title>Registro de Categorias</title>

@section("Contenido")
<h1>Registro</h1>

<div class="content">

<form method="post" action="{{ action('CategoriaController@store') }}">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" name="Nombre" aria-describedby="emailHelp" placeholder="Nombre de Categoria">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descripcion</label>
    <input type="text" class="form-control" name="Descripcion" placeholder="Ingrese Descripcion">
  </div>

  <button type="submit" class="btn btn-primary btn-lg">Ingresar Registro</button>
  <a type="button" class="btn btn-warning" href="/almacen/categoria">Regresar</a>
  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
</form>

</div>
@endsection



