@extends ('layouts.admin')
@section ('Contenido')
<div class="content">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Categorias <a class="btn btn-success btn-lg" href="/almacen/categoria/create">Crear Nuevo</a></h3>
            @include('almacen/categoria/search')
        </div>
    </div>

    <div class="row">
        <div class="col-lg12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-stripe table-bordered table-condensed table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Opciones</th>
                    </thead>
                    @foreach($categorias as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->nombre}}</td>
                        <td>{{$cat->descripcion}}</td>
                        <td>
                            <a class="btn btn-primary" href="/almacen/categoria/{{$cat->id}}">Editar</a>
                            <a class="btn btn-danger" href="/destroy/{{$cat->id}}">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $categorias->render() !!}
            </div>
        </div>
    </div>
</div>





@endsection
