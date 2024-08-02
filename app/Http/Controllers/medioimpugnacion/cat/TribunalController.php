<?php

namespace App\Http\Controllers\medioimpugnacion\cat;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
//
use App\Models\medioimpugnacion\cat\Tribunal;

class TribunalController extends ApiController
{
    protected $db_model = Tribunal::class;
}
