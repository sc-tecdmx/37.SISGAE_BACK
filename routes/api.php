<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\version\VersionController;
use App\Http\Controllers\cat\SexoController;
use App\Http\Controllers\cat\TipoAcuerdoController;
use App\Http\Controllers\cat\TipoAsuntoController;
use App\Http\Controllers\cat\TipoTurnadosController;
use App\Http\Controllers\cat\TribunalController;
use App\Http\Controllers\cat\ViaRecepcionController;
use App\Http\Controllers\cat\TipoInvolucradosController;
use App\Http\Controllers\cat\AutoridadResponsableController;
use App\Http\Controllers\cat\EntidadFederativaController;
use App\Http\Controllers\cat\TipoSolicitudController;

use App\Http\Controllers\medioimpugnacion\oficialia\MedioImpugnacionController;
use App\Http\Controllers\juicioenlinea\CiudadanoController;

Route::prefix('v1')->group(function () {

    Route::get('/sisgae/version', [VersionController::class, 'show']);

    Route::prefix('/sisgae/catalogos')->group(function () {       
        Route::apiResource('/sexo', SexoController::class);
        Route::apiResource('/tipo-acuerdo', TipoAcuerdoController::class);
        Route::apiResource('/tipo-asunto', TipoAsuntoController::class);
        Route::apiResource('/tipo-turnado', TipoTurnadosController::class);
        Route::apiResource('/tribunal', TribunalController::class);
        Route::apiResource('/via-recepcion', ViaRecepcionController::class);
        Route::apiResource('/tribunal', TribunalController::class);
        Route::apiResource('/tipo-involucrados', TipoInvolucradosController::class);
        Route::apiResource('/autoridad-responsable', AutoridadResponsableController::class);
        Route::apiResource('/entidad-federativa', EntidadFederativaController::class);
        Route::apiResource('/tipo-solicitud', TipoSolicitudController::class);

    });

    Route::prefix('/sisgae/medio-impugnacion')->group(function () {       
        Route::apiResource('/create', MedioImpugnacionController::class);
        Route::apiResource('/', MedioImpugnacionController::class);

    });

    Route::prefix('/jel/ciudadano')->group(function () {       
        Route::apiResource('/', CiudadanoController::class);
        Route::get('/{field}/{value}', [CiudadanoController::class, 'showByWhere']);

    });
});

