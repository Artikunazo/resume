<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllInfoController extends Controller
{
    // Method to get all info from other controllers
    public function getAllInfo(Request $request)
    {
        return response()->json([
            'aboutme' => self::cleanData(
                app('App\Http\Controllers\AboutMeController')
                    ->index()
                    ->original
            ),
            'basicInfo' => self::cleanData(
                app('App\Http\Controllers\BasicInfoController')
                    ->index()
                    ->original
            ),
            'education' => self::cleanData(
                app('App\Http\Controllers\EducationController')
                    ->index()
                    ->original
            ),
            'experiences' => self::cleanData(
                app('App\Http\Controllers\ExperiencesController')
                    ->index()
                    ->original
            ),
            'languages' => self::cleanData(
                app('App\Http\Controllers\LanguagesController')
                    ->index()
                    ->original
            ),
            'skills' => self::cleanData(
                app('App\Http\Controllers\SkillsController')
                    ->index()
                    ->original
            ),
            'socialNetworks' => self::cleanData(
                app('App\Http\Controllers\SocialNetworksController')
                    ->index()
                    ->original
            ),
            'techSkills' => self::cleanData(
                app('App\Http\Controllers\TechSkillsController')
                    ->index()
                    ->original
            ),
        ]);
    }

    private static function cleanData($data)
    {
        return json_decode(json_encode($data), true);
    }
}
