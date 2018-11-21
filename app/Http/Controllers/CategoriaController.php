<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\Categoria;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Request\CategoriaFormRequest;
use DB;

class CategoriaController extends Controller
{
    public function  __construct()
    {

    }

    public function index()
{
    /*if ($request)
        {
            $query=trim($request->get('searchText'));
            $categorias=DB::table('categorias')->where('nombre', 'LIKE', '%'.$query.'%')
            ->where ('condicion', '=', '1')
            ->orderBy('idcategorias', 'desc')
            ->paginate(7);

            return view('almacen.categoria.index', ['categorias'=>$categorias, "searchText"=>$query]);

        }*/
        $cate = DB::Table('categorias')->where('condicion', '=', '1')->get();
        return view("almacen/categoria/index")->with('lista', $cate);
    }

    public function create()
    {

        return view("almacen/categoria/create");
    }

    public function store(Request $request)
    {
        $categoria=new Categoria;

        $categoria->nombre = $request->Nombre;
        $categoria->descripcion = $request->Descripcion;
        $categoria->condicion ='1';
        $categoria->save();

        return Redirect::to('almacen/categoria');


    }

    public function show($id)
    {
         $c = Categoria::findOrFail($id);


        return view("almacen/categoria/edit")->with('categoria', $c);




    }

    public function edit($id)
    {


        //return view('almacen/categoria/edit', ['categoria'=>Categoria::findOrFile($id)]);
     return ("Entro a Editar");
    }

    public function update(Request $request, $id)
    {
        $categoria=Categoria::findOrFail($id);

        $categoria->nombre = $request->get('Nombre');

        $categoria->descripcion=$request->get('Descripcion');

        $categoria->update();
        return Redirect::to('almacen/categoria');
    }

    public function destroy($id)
    {
        $categoria=Categoria::findOrFail($id);
        $categoria->condicion="0";
        $categoria->update();
        return Redirect::to('almacen/categoria');
    }
}
