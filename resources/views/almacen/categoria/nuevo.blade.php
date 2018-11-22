<!--<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Lista de Categorias <a class="btn btn-success btn-lg" href="/almacen/categoria/create">Crear Nuevo</a></h3>
        @include('almacen/categoria/search')
    </div>
</div>

<div class="content">

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-stripe table-bordered table-condensed table-hover">
                <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Opciones</th>
                </thead>

                @foreach($lista as $cat)
                <tr>
                <td>{{$cat -> id}}</td>
                <td>{{$cat -> nombre}}</td>
                <td>{{$cat -> descripcion}}</td>
                <td>
                    <a class="btn btn-primary" href="/almacen/categoria/{{$cat->id}}">Editar</a>
                    <a class="btn btn-danger" href="/destroy/{{$cat->id}}">Eliminar</a>
                </td>
                </tr>

                @endforeach
            </table>
        </div>
    </div>
</div>

    </div>
