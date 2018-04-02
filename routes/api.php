<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
/**
 * @SWG\Swagger(
 *     schemes={"http", "https"},
 *     basePath="/api",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Biblioteca Digital",
 *         description="Serviço que gerencia informações a respeito do acervo digital do Sebrae Minas"
 *     )
 * ),
 *
 * @SWG\SecurityScheme(
 *   securityDefinition="appkey",
 *   type="apiKey",
 *   name="header"
 * )
 */
Route::view('/', 'welcome');
Route::apiResource('questions', 'QuestionsController');


