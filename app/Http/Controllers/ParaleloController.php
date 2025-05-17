<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paralelo;
use Illuminate\Support\Facades\Log;

class ParaleloController extends Controller
{
    //metodos
    //metodo para obtener todos los registros de la tabla
    public function index(){
        return Paralelo::all();

    } 


     //guardar un nuevo paralelo 
    //metodo para almacenar registros en la tabla 
    public function store(Request $request) 
    {
        Log::info('Intentando crear Paralelo:', $request->all());
        $request->validate([
            'nombre' =>'required|string|max:100|unique:paralelos'
        ]);



        $paralelo = Paralelo::create($request->all());
        Log::info('Paralelo creado con ID: '. $paralelo->id);

        return response()->json([
            'mensaje' => ' Paralelo creado con exito ',
            'paralelo' => $paralelo
        ], 201);
        
    } 

    //MOSTRAR UN PARALELO EN ESPECIFICO
    public function show($id)
    {
        $paralelo = Paralelo::find($id);

        if (!$paralelo) {
            return response()->json(['mensaje'=>'Paralelo no encontrado'], 404);
        }

        return $paralelo;
    }   
       
    //ACTUALIZAR PARALELO
    public function update(Request $request, $id)
    {
        $paralelo = Paralelo::find($id);
    
        if (!$paralelo) {
            return response()->json(['mensaje'=>'Paralelo no encontrado'], 420);
        }

        $request->validate([
            'nombre' =>'required|string|max:100|unique:paralelos,nombre'. $id,
        ]);
    


        $paralelo->update($request->all());

        return response()->json([
        'mensaje' => ' Paralelo actualizado con exito ',
        'paralelo' => $paralelo
         ]);
    }

    //ELIMINAR PARALELO

    public function destroy($id)
    {
        $paralelo = Paralelo::find($id);

        if(!$oararlelo) {
            return response()->json(['mensaje' => 'Paralelo no encontrado'], 404);
        }

        $paralelo->delete();

        return response()->json(['mensaje' => 'Paralelo eliminado con exito']);
    }


}
