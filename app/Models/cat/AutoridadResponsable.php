<?php

namespace App\Models\cat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoridadResponsable extends Model
{
    use HasFactory;
    protected $table = "ssg_cat_autoridades_responsables";
    protected $primaryKey = 'n_id_autoridad';

    protected $fillable = [ 
        's_autoridad'
    ];
}
