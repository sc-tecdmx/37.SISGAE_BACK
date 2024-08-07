<?php

namespace App\Http\Controllers\juicioenlinea;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
//
use App\Models\juicioenlinea\Ciudadano;

class CiudadanoController extends ApiController
{
    protected $db_model = Ciudadano::class;

    public function store(Request $request)
    {
        // Convertir la fecha al formato adecuado
        if ($request->has('fh_nac')) {
            $request->merge(['fh_nac' => date('Y-m-d H:i:s', strtotime($request->input('fh_nac'))) ]);
        }

        error_log('store :::: ' ) ;
        error_log(json_encode($request->all()));
        try {
            $_db_model = $this->db_model::create($request->all());

            // Lógica para crear el usuario después de crear el ciudadano
            $nombreUsuario = $this->createRandomUserName($_db_model->nombre, $_db_model->apellido1);

            $usuarioData = [
                'usuario' => $nombreUsuario,
                'email' => $_db_model->email,
                'contrasenia' => $request->input('contrasenia'),
                'statusCuenta' => 5, // Activa
                'codigoRol' => ['JEL-USER'],
                'codigoSistema' => 'JEL'
            ];

            $responseUsuario = $this->registerUsuario($usuarioData);

            $responsePayload = [
                'ciudadano' => $_db_model,
                'usuario' => $responseUsuario->data
            ];

            return response()->json([
                'status' => "success",
                'message' => 'Registro exitoso',
                'data' => $responsePayload
            ], 200);

        } catch (QueryException $ex) {
            error_log ("store ::" .$ex->getMessage() );
            return response()->json([
                'status' => "Error",
                'message' => 'Error al crear el registro' ,
                'exception' => $ex->getMessage()
            ], 400);
        }
    }

    private function createRandomUserName($nombre, $apellido1)
    {
        return Str::lower(Str::random(5) . '.' . Str::slug($nombre) . '.' . Str::slug($apellido1));
    }

    private function registerUsuario($usuarioData)
    {
        $client = new Client();
        //$url = 'http://qaauth.tecdmx.org.mx:8080/seguridad/api/v1/registrar-usuario-no-auth';
        $url = env('EXTERNAL_SERVICE_URL').'/api/v1/registrar-usuario-no-auth';
        try {
            $response = $client->post($url, [
                'json' => $usuarioData
            ]);

            return json_decode($response->getBody());
        } catch (RequestException $e) {
            error_log('Error al registrar el usuario: ' . $e->getMessage());
            return response()->json([
                'status' => "Error",
                'message' => 'Error al registrar el usuario',
                'exception' => $e->getMessage()
            ], 400);
        }
    }
}
