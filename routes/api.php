<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'AuthController@login');
Route::get('check-login', 'AuthController@checkLogin');
Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::post('me', 'AuthController@me');

/* PDF Resource */
Route::post('create/pdf/resource', 'ManagementController@createPDFResource');
Route::get('view/pdf/resource', 'ManagementController@viewPDFResource');
Route::delete('delete/pdf/resource/{id}', 'ManagementController@deletePDFResource');
/* HTML Snippet Resource */
Route::post('create/snippet/resource', 'ManagementController@createSnippetResource');
Route::get('view/snippet/resource', 'ManagementController@viewSnippetResource');
Route::delete('delete/snippet/resource/{id}', 'ManagementController@deleteSnippetResource');
/* Link Resource */
Route::post('create/link/resource', 'ManagementController@createLinkResource');
Route::get('view/link/resource', 'ManagementController@viewLinkResource');
Route::delete('delete/link/resource/{id}', 'ManagementController@deleteLinkResource');
