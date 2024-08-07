<?php

namespace App\Http\Controllers\medioimpugnacion\oficialia;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
//
use App\Models\medioimpugnacion\oficialia\MedioImpugnacion;

class MedioImpugnacionController extends ApiController
{
    protected $db_model = MedioImpugnacion::class;
    
}
