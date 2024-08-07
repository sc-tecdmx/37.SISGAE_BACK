<?php

namespace App\Models\cat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntidadFederativa extends Model
{
    use HasFactory;
    protected $table = "jel_cat_entidad_federativa";
    protected $primaryKey = 'n_id_entidad_federativa';

    protected $fillable = [ 
        'nombre',
        'codigo'
    ];
}
