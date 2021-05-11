<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Property;
use Illuminate\Http\Request;

use function PHPUnit\Framework\fileExists;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $property = Property::find($id);
        $single = ['thumbnail', 'ipi1', 'ipi2', 'ipi3'];
        $ipi1 = Image::where('pno', $id)->where('name', 'like', '%' . $single[1] . '%')->first();
        $ipi2 = Image::where('pno', $id)->where('name', 'like', '%' . $single[2] . '%')->first();
        $ipi3 = Image::where('pno', $id)->where('name', 'like', '%' . $single[3] . '%')->first();
        $slider = Image::where('pno', $id)->where('name', 'like', '%slider%')->get();

        return view('single-place', ['property' => $property, 'ipi1' => $ipi1, 'ipi2' => $ipi2, 'ipi3' => $ipi3, 'slider' => $slider]);
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


    public function search(Request $request)
    {
        if ($request->has('query')) {
            $query = $request->get('query');
            $result = Property::where('name', 'like', '%' . $query . '%')->orWhere('location', 'like', '%' . $query . '%')->take(10)->get();

            return response()->json(['data' => $result]);
        } else {

            return view('admin.searchProperty');
        }
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
        $property->location = $request->get('location');
        $property->name = $request->get('name');
        $property->address = $request->get('address');
        $property->city = $request->get('city');
        $property->state = $request->get('state');

        $property->nob = $request->get('nb');
        $property->gc = $request->get('gc');
        $property->price = $request->get('price');
        $property->ratings = $request->get('ratings');
        $property->description = $request->get('description');

        $aminities = ['television', 'wifi', 'air-conditioner', 'free-breakfast', 'free-cancellation', 'ensuite-bathroom', 'swimming-pool', 'lawn', 'valley-view', 'lake-view', 'pets-allowed', 'alcohol-allowed', 'bonfire', 'parking', 'genset', 'towels-and-toiletries', 'inverter', 'bedroom-and-laundry', 'essentials', 'towels', 'bed-sheets', 'soap-and-toilet-paper', 'hanger', 'CCTV-cameras', 'first-aid-kit', 'fire-extinguisher', 'kitchen',  'microwave', 'refrigerator', 'dishes-and-silverware', 'space-where-guests-can-cook-their-own-meals'];

        foreach ($aminities as $item) {
            if ($request->get($item)) {

                $property->$item = true;
            } else {
                $property->$item = false;
            }
        }
        // if($request->get('veg-only')) {

        //     $property->vo = true;
        // }
        // if($request->get('pool')) {

        //     $property->pool = true;
        // }
        // if($request->get('wifi')) {

        //     $property->wifi = true;
        // }
        // if($request->get('pets')) {

        //     $property->pets = true;
        // }
        // if($request->get('beach')) {

        //     $property->beach = true;
        // }



        if ($request->get('bc')) {

            $property->bc = true;
        }
        if ($request->get('fg')) {

            $property->fg = true;
        }
        if ($request->get('ce')) {

            $property->ce = true;
        }
        if ($request->get('ac')) {

            $property->ac = true;
        }
        if ($request->get('cp')) {

            $property->cp = true;
        }
        if ($request->get('ws')) {

            $property->ws = true;
        }


        $property->save();
        $message = 'Property with id ' . $property->id . ' is Added Successfully ';
        return view('admin.addimage', ['pno' => $property->id, 'pname' => $property->name])->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        $property = Property::orderBy('id', 'desc')->paginate(10);
        return view('admin.viewPropertyAll', ['properties' => $property]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property, $id)
    {
        $property = Property::find($id);
        return view('admin.editproperty', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::find($id);
        $property->type = $request->get('type');
        $property->location = $request->get('location');
        $property->name = $request->get('name');
        $property->address = $request->get('address');
        $property->city = $request->get('city');
        $property->state = $request->get('state');

        $property->nob = $request->get('nb');
        $property->gc = $request->get('gc');
        $property->price = $request->get('price');
        $property->ratings = $request->get('ratings');
        $property->description = $request->get('description');

        $aminities = ['television', 'wifi', 'air-conditioner', 'free-breakfast', 'free-cancellation', 'ensuite-bathroom', 'swimming-pool', 'lawn', 'valley-view', 'lake-view', 'pets-allowed', 'alcohol-allowed', 'bonfire', 'parking', 'genset', 'towels-and-toiletries', 'inverter', 'bedroom-and-laundry', 'essentials', 'towels', 'bed-sheets', 'soap-and-toilet-paper', 'hanger', 'CCTV-cameras', 'first-aid-kit', 'fire-extinguisher', 'kitchen',  'microwave', 'refrigerator', 'dishes-and-silverware', 'space-where-guests-can-cook-their-own-meals'];

        foreach ($aminities as $item) {
            if ($request->get($item)) {

                $property->$item = true;
            } else {
                $property->$item = false;
            }
        }
        // if($request->get('veg-only')) {

        //     $property->vo = true;
        // }
        // if($request->get('pool')) {

        //     $property->pool = true;
        // }
        // if($request->get('wifi')) {

        //     $property->wifi = true;
        // }
        // if($request->get('pets')) {

        //     $property->pets = true;
        // }
        // if($request->get('beach')) {

        //     $property->beach = true;
        // }



        if ($request->get('bc')) {

            $property->bc = true;
        }
        if ($request->get('fg')) {

            $property->fg = true;
        }
        if ($request->get('ce')) {

            $property->ce = true;
        }
        if ($request->get('ac')) {

            $property->ac = true;
        }
        if ($request->get('cp')) {

            $property->cp = true;
        }
        if ($request->get('ws')) {

            $property->ws = true;
        }


        $property->save();
        $message = 'Property with id ' . $property->id . ' is Updated Successfully ';
        return redirect(route('admin.displayimage', [$property->id]))->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property, $id)
    {
        Property::destroy(['id' => $id]);
        $images = Image::where('pno', $id)->get();

        foreach ($images as $img) {
            if (fileExists(public_path('images/') . $img->name)) {

                unlink(public_path('images/') . $img->name);
            }
        }
        Image::where('pno', $id)->delete();

        $message = 'Property with id ' . $id . ' is Deleted Successfully ';
        return back()->with('success', $message);
    }
}
