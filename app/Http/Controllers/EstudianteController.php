<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


/**
 * @OA\Info(
 *     title="API de Estudiantes",
 *     version="1.0.0",
 *     description="API para gestión de estudiantes"
 * )
 * 
 * @OA\Server(
 *     url="http://localhost:8000",
 *     description="Servidor Local"
 * )
 * 
 * @OA\Schema(
 *     schema="Estudiante",
 *     title="Estudiante",
 *     required={"codigo", "nombres"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="codigo", type="string", example="20240001"),
 *     @OA\Property(property="nombres", type="string", example="Juan"),
 *     @OA\Property(property="apellidos", type="string", example="Pérez"),
 *     @OA\Property(property="email", type="string", format="email", example="juan@example.com")
 * )
 */

class EstudianteController extends Controller
{
    /**
 * @OA\Get(
 *     path="/api/estudiantes",
 *     tags={"Estudiantes"},
 *     summary="Listar todos los estudiantes",
 *     @OA\Response(
 *         response=200,
 *         description="Listado exitoso",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(ref="#/components/schemas/Estudiante")
 *         )
 *     )
 * )
 */

    // Listar todos los estudiantes
    public function index()
    {
        $estudiantes = Estudiante::orderBy('apellidos')->get();
        return response()->json($estudiantes);
    }

    // Crear nuevo estudiante
    public function store(Request $request)
{
    $validated = $request->validate([
        'codigo' => 'required|string|unique:estudiantes|max:10',
        'nombres' => 'required|string|max:100',
        'apellidos' => 'required|string|max:100',
        'fecha_nacimiento' => 'required|date',
        'email' => 'required|email|unique:estudiantes',
        'programa' => 'required|string|max:100'
    ]);

    $estudiante = Estudiante::create($validated);
    
    return response()->json($estudiante, 201);
}
 

    // Actualizar estudiante
    public function update(Request $request, Estudiante $estudiante)
    {
        $validated = $request->validate([
            'nombres' => 'sometimes|string|max:100',
            'apellidos' => 'sometimes|string|max:100',
            'fecha_nacimiento' => 'sometimes|date',
            'email' => 'sometimes|email|unique:estudiantes,email,'.$estudiante->id,
            'telefono' => 'nullable|string|max:15',
            'programa' => 'sometimes|string|max:100'
        ]);

        $estudiante->update($validated);
        
        return response()->json([
            'message' => 'Estudiante actualizado exitosamente',
            'data' => $estudiante
        ]);
    }

    // Eliminar estudiante
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        
        return response()->json([
            'message' => 'Estudiante eliminado exitosamente'
        ], 204);
    }
}











