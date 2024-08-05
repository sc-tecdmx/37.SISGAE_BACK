<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\version\VersionController;
use App\Http\Controllers\medioimpugnacion\cat\SexoController;
use App\Http\Controllers\medioimpugnacion\cat\TipoAcuerdoController;
use App\Http\Controllers\medioimpugnacion\cat\TipoAsuntoController;
use App\Http\Controllers\medioimpugnacion\cat\TipoTurnadosController;
use App\Http\Controllers\medioimpugnacion\cat\TribunalController;
use App\Http\Controllers\medioimpugnacion\cat\ViaRecepcionController;
use App\Http\Controllers\medioimpugnacion\cat\TipoInvolucradosController;
use App\Http\Controllers\medioimpugnacion\cat\AutoridadResponsableController;

use App\Http\Controllers\medioimpugnacion\oficialia\MedioImpugnacionController;

Route::prefix('v1/sisgae')->group(function () {

    Route::get('/version', [VersionController::class, 'show']);


    Route::prefix('catalogos')->group(function () {       
        Route::apiResource('/sexo', SexoController::class);
        Route::apiResource('/tipo-acuerdo', TipoAcuerdoController::class);
        Route::apiResource('/tipo-asunto', TipoAsuntoController::class);
        Route::apiResource('/tipo-turnado', TipoTurnadosController::class);
        Route::apiResource('/tribunal', TribunalController::class);
        Route::apiResource('/via-recepcion', ViaRecepcionController::class);
        Route::apiResource('/tribunal', TribunalController::class);
        Route::apiResource('/tipo-involucrados', TipoInvolucradosController::class);
        Route::apiResource('/autoridad-responsable', AutoridadResponsableController::class);

    });

    Route::prefix('medio-impugnacion')->group(function () {       
        Route::apiResource('/create', MedioImpugnacionController::class);
        Route::apiResource('/', MedioImpugnacionController::class);

    });
});

