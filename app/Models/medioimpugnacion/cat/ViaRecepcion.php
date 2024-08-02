<?php

namespace App\Models\medioimpugnacion\cat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViaRecepcion extends Model
{
    use HasFactory;
    protected $table = "ssg_cat_via_recepcion";
    protected $primaryKey = 'd_id_via_recepcion';

    protected $fillable = [ 
        's_via_recepcion'
    ];
}
