<?php

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

Route::resource('aboutme', 'AboutMeController');

Route::resource('education', 'EducationController');

Route::resource('experiences', 'ExperiencesController');

Route::resource('info', 'BasicInfoController');

Route::resource('languages', 'LanguagesController');

Route::resource('references', 'ReferencesController');

Route::resource('tech-skills', 'TechSkillsController');

Route::resource('skills', 'SkillsController');

Route::resource('social-networks', 'SocialNetworksController');

Route::resource('send-form', 'ContactMeController');

