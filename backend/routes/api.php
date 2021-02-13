<?php

//header('Access-Control-Allow-Origin: http://localhost:8080');
// header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
// header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
// header("Allow: GET, POST, OPTIONS, PUT, DELETE");

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

$exceptMethods = ['create', 'edit', 'destroy', 'update', 'store', 'show'];

Route::get('all-info', 'AllInfoController@getAllInfo');

Route::resource('aboutme', 'AboutMeController@index')
    ->except($exceptMethods);

Route::resource('education', 'EducationController@index')
    ->except($exceptMethods);

Route::resource('experiences', 'ExperiencesController@index')
    ->except($exceptMethods);

Route::resource('info', 'BasicInfoController@index')
    ->except($exceptMethods);

Route::resource('languages', 'LanguagesController@index')
    ->except($exceptMethods);

Route::resource('references', 'ReferencesController@index')
    ->except($exceptMethods);

Route::resource('tech-skills', 'TechSkillsController@index')
    ->except($exceptMethods);

Route::resource('skills', 'SkillsController@index')
    ->except($exceptMethods);

Route::resource('social-networks', 'SocialNetworksController@index')
    ->except($exceptMethods);

Route::resource('send-form', 'ContactMeController');
