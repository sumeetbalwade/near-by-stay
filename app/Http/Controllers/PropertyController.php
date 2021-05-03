<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $property = new Property();
        $property->type = $request->get('type');
        $property->name = $request->get('name');
        $property->city = $request->get('city');
        $property->state = $request->get('state');
        if($request->get('type') == 'Villa' || $request->get('type') == 'FarmHouse' || $request->get('type') == 'Bungalow') {

            $property->nob = $request->get('nb');
        }
        $property->gc = $request->get('gc');
        $property->price = $request->get('price');
        if($request->get('veg-only')) {

            $property->vo = true;
        }
        if($request->get('pool')) {

            $property->pool = true;
        }
        if($request->get('wifi')) {

            $property->wifi = true;
        }
        if($request->get('pets')) {

            $property->pets = true;
        }
        if($request->get('beach')) {

            $property->beach = true;
        }
        if($request->get('bc')) {

            $property->bc = true;
        }
        if($request->get('fg')) {

            $property->fg = true;
        }
        if($request->get('ce')) {

            $property->ce = true;
        }
        if($request->get('ac')) {

            $property->ac = true;
        }
        if($request->get('cp')) {

            $property->cp = true;
        }
        if($request->get('ws')) {

            $property->ws = true;
        }


        $property->save();
        return redirect('/addproperty')


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
