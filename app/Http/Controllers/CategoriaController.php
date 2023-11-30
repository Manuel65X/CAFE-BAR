<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['categoria']=categoria::paginate(5);
        return view('empleado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $campos=[
            'Personal'=>'required|string|max:100',
            'Picar'=>'required|string|max:100',
            'Postres'=>'required|string|max:100',
            'Calientes'=>'required|string|max:100',
            'Frias'=>'required|string|max:100',
            'Crevezas'=>'required|string|max:100',
            'Cocteles'=>'required|string|max:100',
            'Licor'=>'required|string|max:100',
            'Vinos'=>'required|string|max:100',
            'Tragos'=>'required|string|max:100',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',

        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Foto.required'=>'Lafoto requerida',

        ];

        $this->validate($request,$campos,$mensaje);


        //$datosCategorias = request()->all();
        $datosCategorias = request()->except('_token');
        
         if($request->hasFile('Foto')){
            $datosCategorias['Foto']=$request->file('Foto')->store('uploads','public');

         }

        categoria::insert($datosCategorias);


        //return  response()->json($datosCategorias);
        return redirect('categoria')->with('mensaje','Categoria agregada con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $categoria=categoria::findOrFail($id); 
        return view('categoria.edit',compact('categoria') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $campos=[
            'Personal'=>'required|string|max:100',
            'Picar'=>'required|string|max:100',
            'Postres'=>'required|string|max:100',
            'Calientes'=>'required|string|max:100',
            'Frias'=>'required|string|max:100',
            'Crevezas'=>'required|string|max:100',
            'Cocteles'=>'required|string|max:100',
            'Licor'=>'required|string|max:100',
            'Vinos'=>'required|string|max:100',
            'Tragos'=>'required|string|max:100',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',

        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
        

        ];

        if($request->hasFile('Foto')){
            $campos =['required|max:10000|mimes:jpeg,png,jpg',];
            $mensaje=['Foto.required'=>'La foto requerida',];

        }

        $this->validate($request,$campos,$mensaje);


        //
        $datosCategorias = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $categoria=categoria::findOrFail($id);

            Storage::delete('public/'.$categoria->Foto);

            $datosCategorias['Foto']=$request->file('Foto')->store('uploads','public');
        }


        categoria::where('id','=',$id)->update($datosCategorias);
        $categoria=categoria::findOrFail($id); 
        //return view('categoria.edit',compact('categoria') );
        return redirect('categoria')->with('mensaje','Categoria Modificada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

        $categoria=categoria::findOrFail($id);

        if(Storage::delete('public/'.$categoria->Foto)){

            categoria::destroy($id);
        
        }


        
        return redirect('categoria')->with('mensaje','Categoria Borrada');
    }
}
