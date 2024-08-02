<?php

namespace App\Models\medioimpugnacion\cat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAsunto extends Model
{
    use HasFactory;
    protected $table = "ssg_cat_tipo_asuntos";
    protected $primaryKey = 's_cve_tipo_asunto';

    protected $fillable = [ 
        's_tipo_asunto'
    ];
}
