<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TechSkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get techskills
        $techSkills = DB::table('techskills')
            ->select('id')
            ->addSelect('name as technologyName')
            ->get();


        //Get frameworks from techskill id
        $frameworks = [];
        foreach($techSkills as $key => $technology){
            $frameworks[$technology->technologyName] = 
                json_decode(
                    json_encode(
                        DB::table('frameworks')
                            ->select('name as framework')
                            ->addSelect('percent as percent')
                            ->where('id_tech', $technology->id)
                            ->get()
                    ), 
                    true
                );
        }

        $allSkills = [
            'techSkills' => $techSkills,
            'frameworks' => $frameworks
        ];

        return response()->json($allSkills);
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
