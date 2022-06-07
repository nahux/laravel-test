<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public static function getData()
    {
        return [
            ['id' => 1, 'name' => 'Ferrari', 'country' => 'Italy'],
            ['id' => 2, 'name' => 'Red Bull', 'country' => 'Austria'],
            ['id' => 3, 'name' => 'Mercedes', 'country' => 'Germany'],
            ['id' => 4, 'name' => 'McLaren', 'country' => 'United Kingdom'],
            ['id' => 5, 'name' => 'Alpine', 'country' => 'France']
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('team.index', [
            'teams' => self::getData()
        ]);
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
        $teams = self::getData();
        $teamIndex = array_search($id, array_column($teams, 'id'));

        if ($teamIndex === false) {
            abort(404);
        }

        return view('team.show', [
            'team' => $teams[$teamIndex]
        ]);
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
