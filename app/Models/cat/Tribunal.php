<?php

namespace App\Models\cat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tribunal extends Model
{
    use HasFactory;
    protected $table = "ssg_cat_tribunal";
    protected $primaryKey = 's_id_cve_tribunal';

    protected $fillable = [ 
        's_tribunal'
    ];
}
