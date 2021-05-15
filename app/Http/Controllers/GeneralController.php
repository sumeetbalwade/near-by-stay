<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Models\Property;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleryimgh = gallery::where('type', 'horizontal')->get();
        $galleryimgv = gallery::where('type', 'vertical')->get();
        return view('index', ['galleryh' => $galleryimgh, 'galleryv' => $galleryimgv]);
    }


    public function searchResult(Request $request)
    {
        $this->validate($request, [
            'location' => 'required',
            'check-in' => 'required',
            'check-out' => 'required',
            'adult' => 'required',
            'child' => 'required'
        ]);


        //check-in checkout date validation
        $date = date_create_from_format("d-m-Y", $request->get('check-in'));
        $now = strtotime(date_format($date, "Y/m/d"));
        $date = date_create_from_format("d-m-Y", $request->get('check-out'));
        $your_date = strtotime(date_format($date, "Y/m/d"));
        $datediff = ($your_date - $now) / (60 * 60 * 24);

        if ($datediff <= 0) {
            return back();
        } else {

            $location = $request->get('location');
            $result = Property::where('name', 'like', '%' . $location . '%')->orWhere('location', 'like', '%' . $location . '%')->paginate(10);
            $sdata = [
                'location' => $request->get('location'),
                'check-in' => $request->get('check-in'),
                'check-out' => $request->get('check-out'),
                'adult' => $request->get('adult'),
                'child' => $request->get('child'),
                'ddate' => $datediff
            ];
            $request->session()->put('sdata', $sdata);
            return view('multi-rooms', ['data' => $result]);
        }
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
        return $request->all();
    }

    public function enquiry(Request $request, $id)
    {
       
        if(!$request->session()->has('sdata') ){
            return back();
        }
        $property = Property::find($id);
        $price = $property->price;
        
        return view('enquiry',['property' => $property,'price' => $price]);
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
