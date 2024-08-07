<?php

namespace App\Models\cat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoInvolucrados extends Model
{
    use HasFactory;
    protected $table = "ssg_cat_tipos_involucrados";
    protected $primaryKey = 'n_id_tipo_involucrado';

    protected $fillable = [ 
        's_tipo_involucrado'
    ];
}
