<?php

namespace App\Models\cat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;
    protected $table = "inst_cat_sexo";
    protected $primaryKey = 'n_id_sexo';

    protected $fillable = [ 
        's_sexo'
    ];
}
