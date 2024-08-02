<?php

namespace App\Models\medioimpugnacion\cat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAcuerdo extends Model
{
    use HasFactory;
    protected $table = "ssg_cat_tipos_acuerdos";
    protected $primaryKey = 'n_id_tipo_acuerdo';

    protected $fillable = [ 
        's_tipo_acuerdo'
    ];
}
