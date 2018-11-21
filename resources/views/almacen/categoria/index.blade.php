@extends ('layouts.admin')
@section ('Contenido')
    <h3>Lista de Categorias</h3>
    <a class="btn btn-primary btn-lg" href="/almacen/categoria/create">Crear Nuevo</a>
    <div class="content">

    <table class="table table-condensed">

      <thead>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>EDITAR</th>
      <th>ELIMINAR</th>

      </thead>

      @foreach($lista as $cat)
      <tr>

      <td>{{$cat -> nombre}}</td>
      <td>{{$cat -> descripcion}}</td>
      <td><a class="btn btn-primary" href="/almacen/categoria/{{$cat->id}}">Editar</a></td>
      <td><a class="btn btn-danger" href="/destroy/{{$cat->id}}">Eliminar</a></td>

      </tr>

       @endforeach
    </table>



    </div>
@stop
