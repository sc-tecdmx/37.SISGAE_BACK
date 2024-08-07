<?php

namespace App\Http\Controllers\cat;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
//
use App\Models\cat\Sexo;

class SexoController extends ApiController
{
    protected $db_model = Sexo::class;
}
