<?php

namespace App\Models\cat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSolicitud extends Model
{
    use HasFactory;
    protected $table = "jel_cat_tipo_solicitud";
    protected $primaryKey = 'n_id_tipo_solicitud';

    protected $fillable = [ 
        'nombre',
        'codigo'
    ];
}
