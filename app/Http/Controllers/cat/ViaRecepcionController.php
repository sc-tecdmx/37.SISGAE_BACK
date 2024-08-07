<?php

namespace App\Http\Controllers\cat;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
//
use App\Models\cat\ViaRecepcion;

class ViaRecepcionController extends ApiController
{
    protected $db_model = ViaRecepcion::class;
}
