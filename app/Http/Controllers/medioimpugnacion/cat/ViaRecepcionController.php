<?php

namespace App\Http\Controllers\medioimpugnacion\cat;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
//
use App\Models\medioimpugnacion\cat\ViaRecepcion;

class ViaRecepcionController extends ApiController
{
    protected $db_model = ViaRecepcion::class;
}
