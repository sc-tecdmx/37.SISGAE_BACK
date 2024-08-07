<?php

namespace App\Http\Controllers\cat;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
//
use App\Models\cat\EntidadFederativa;

class EntidadFederativaController extends ApiController
{
    protected $db_model = EntidadFederativa::class;
}
