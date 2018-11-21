@extends('layouts.admin')

<title>Actualizacion</title>

@section("Contenido")
<h1>Modificar</h1>

<div class="content">

<form method="post" action="/almacen/categoria/{{$categoria->id}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" value="{{$categoria->nombre}}" name="Nombre" aria-describedby="emailHelp" placeholder="Nombre de Categoria">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descripcion</label>
    <input type="text" class="form-control" value="{{$categoria->descripcion}}" name="Descripcion" placeholder="Ingrese Descripcion">
  </div>

  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
</form>

</div>
@endsection



