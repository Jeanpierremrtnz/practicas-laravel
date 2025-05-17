<?php

namespace App\Http\Swagger;

/**
 * @OA\Info(
 *     title="API de Mi Aplicación",
 *     version="1.0.0",
 *     description="Documentación de la API para el sistema de gestión académica",
 *     @OA\Contact(
 *         email="soporte@miaplicacion.com"
 *     ),
 *     @OA\License(
 *         name="MIT",
 *         url="https://opensource.org/licenses/MIT"
 *     )
 * )
 * 
 * @OA\Server(
 *     url=L5_SWAGGER_CONST_HOST,
 *     description="Servidor API Local"
 * )
 * 
 * @OA\Tag(
 *     name="Estudiantes",
 *     description="Operaciones con estudiantes"
 * )
 * 
 * @OA\Tag(
 *     name="Paralelos",
 *     description="Operaciones con paralelos"
 * )
 */
class SwaggerDefinitions
{
    // Clase vacía, solo para anotaciones Swagger
}