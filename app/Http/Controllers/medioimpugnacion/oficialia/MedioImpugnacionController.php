<?php

namespace App\Http\Controllers\medioimpugnacion\oficialia;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
//
use App\Models\medioimpugnacion\oficialia\MedioImpugnacion;

class MedioImpugnacionController extends ApiController
{
    protected $db_model = MedioImpugnacion::class;

    public function store(Request $request)
    {
        echo "error";
        try {
            $validated = $request->validate([
                'fechaRecepcion' => 'nullable',
                'cveTribunal' => 'nullable',
                'cveTipoAsunto' => 'nullable',
                'consecutivoExpediente' => 'nullable',
                'anioExpediente' => 'nullable',
                'fojasRecepcion' => 'nullable',
                'descAsunto' => 'nullable',
                'idEmpleadoRecibe' => 'nullable',
                'observaciones' => 'nullable',
                'actoImpugnado' => 'nullable',
                'idViaRecepcion' => 'nullable',
                'idDomicilio' => 'nullable',
                'consecutivoAviso' => 'nullable',
                'idTipoEleccion' => 'nullable',
                'cargoRemite' => 'nullable',
                'numOficio' => 'nullable',
                'personaSuscribe' => 'nullable',
                'fechaOficio' => 'nullable',
            ]);

            $medioImpugnacion = MedioImpugnacion::create([
                'd_fecha_recepcion' => $validated['fechaRecepcion'],
                's_cve_tribunal' => $validated['cveTribunal'],
                's_cve_tipo_asunto' => $validated['cveTipoAsunto'],
                'n_consecutivo_expediente' => $validated['consecutivoExpediente'],
                'n_anio_expediente' => $validated['anioExpediente'],
                's_fojas_recepcion' => $validated['fojasRecepcion'],
                's_asunto_sg' => $validated['descAsunto'],
                'n_id_num_empleado_recibe' => $validated['idEmpleadoRecibe'],
                's_sg_observaciones' => $validated['observaciones'],
                's_acto_impugnado' => $validated['actoImpugnado'],
                'n_id_via_recepcion' => $validated['idViaRecepcion'],
                'n_id_domicilio' => $validated['idDomicilio'],
                'consecutivo_aviso' => $validated['consecutivoAviso'],
                'n_id_tipo_eleccion' => $validated['idTipoEleccion'],
                'cargo_remite' => $validated['cargoRemite'],
                'numero_oficio' => $validated['numOficio'],
                'persona_suscribe' => $validated['personaSuscribe'],
                'fecha_oficio' => $validated['fechaOficio'],
            ]);
            
            return response()->json(
                [   'status' => "success",
                    'message' => 'Registro exitoso',
                    'data' => [$medioImpugnacion] 
                ], 200);
        } catch (Exception $ex) {
            echo "error";

            error_log ("store ::" .$ex->getMessage() );
            echo $ex->getMessage();
            return response()->json([
                'status' => "Error",
                'message' => 'Error al crear el registro' ,
                'exception' => $ex->getMessage()
            ], 400);
        }
        
    }
}
