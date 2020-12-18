<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EducationController extends Controller
{
    private static $urlCertifications = 'https://artikunazo.mx/img/certifications/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $education = DB::table('education')
            ->select('title as title')
            ->addSelect('school as school')
            ->addSelect('date as date')
            ->addSelect('info as info')
            ->get();

        foreach ($education as $courses) {
            if (strpos($courses->info, ':') !== false) {
                continue;
            } else {
                $courses->info = [
                    'jp2' => self::$urlCertifications . "/" . $courses->info . "/" . $courses->info . ".jp2",
                    'webp' => self::$urlCertifications  . "/" . $courses->info . "/" . $courses->info . ".webp",
                    'jpg' => self::$urlCertifications  . "/" . $courses->info . "/" . $courses->info . ".jpg"
                ];
            }
        }

        $arr = [];
        foreach($arr as $item){
            
        }
        return response()->json($education);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
