<?php

namespace App\Models\medioimpugnacion\oficialia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedioImpugnacion extends Model
{
    use HasFactory;
    protected $table = "ssg_medio_impugnacion";
    protected $primaryKey = 'n_id_medio_impugnacion';

    public $timestamps = false;

    protected $fillable = [
        'd_fecha_recepcion',
        's_cve_tribunal',
        's_cve_tipo_asunto',
        'n_consecutivo_expediente',
        'n_anio_expediente',
        's_fojas_recepcion',
        's_asunto_sg',
        'n_id_num_empleado_recibe',
        's_sg_observaciones',
        's_acto_impugnado',
        'n_id_via_recepcion',
        'n_id_domicilio',
        'consecutivo_aviso',
        'n_id_tipo_eleccion',
        'cargo_remite',
        'numero_oficio',
        'persona_suscribe',
        'fecha_oficio'
    ];
}
