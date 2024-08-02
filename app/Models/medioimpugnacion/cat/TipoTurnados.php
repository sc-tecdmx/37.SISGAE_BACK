<?php

namespace App\Models\medioimpugnacion\cat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTurnados extends Model
{
    use HasFactory;
    protected $table = "ssg_cat_tipos_turnados";
    protected $primaryKey = 'n_id_tipo_turnado';

    protected $fillable = [ 
        's_tipo_turnado'
    ];
}
