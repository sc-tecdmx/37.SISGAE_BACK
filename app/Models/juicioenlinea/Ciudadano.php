<?php

namespace App\Models\juicioenlinea;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudadano extends Model
{
    use HasFactory;
    protected $table = "jel_ciudadano";
    protected $primaryKey = 'n_id_ciudadano';

    public $timestamps = false;

    protected $fillable = [
        'n_id_usuario',
        's_curp',
        's_rfc',
        'nombre',
        'apellido1',
        'apellido2',
        'email',
        'fh_nac',
        'sexo',
        'telefono',
        'calle_numero',
        'colonia',
        'cp',
        'n_id_entidad_federativa',
        'ciudad',
        'n_id_tipo_identificacion',
        'n_id_tipo_solicitud',
        'institucion',
        'aceptacion_terminos_uso'
    ];
}
