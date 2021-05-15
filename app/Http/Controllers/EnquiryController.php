<?php

namespace App\Http\Controllers;

use App\Models\enquiry;
use App\Models\Property;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquiries = enquiry::orderBy('id', 'desc')->paginate(10);
        return view('admin.view_all_enquiry',['enquiries' => $enquiries]);
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
        $enq = new enquiry();
        $enq->name = $request->get('name');
        $enq->mobile = $request->get('mobile_number');
        $enq->email = $request->get('email');
        $enq->travelling = $request->get('travel_with');
        $enq->pid = $request->get('id'); 
        $prop = Property::find( $request->get('id'));
        $enq->pname = $prop->name;
        $data = $request->session()->get('sdata');
        $enq['check-in'] = date('Y-m-d',strtotime($data['check-in'])); 
        $enq['check-out'] = date('Y-m-d',strtotime($data['check-out'])); 
        $enq['adults'] = $data['adult']; 
        $enq['child'] = $data['child']; 
        $enq['price'] = $prop->price; 
        $enq->save();
        return redirect('/');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(enquiry $enquiry,$id)
    {
        $enq = enquiry::find($id);
        return view('admin.view_single_enq',['enquiry'=>$enq]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(enquiry $enquiry,$id)
    {
        Property::destroy(['id' => $id]);
        $message = 'Enquiry with id ' . $id . ' is Deleted Successfully ';
        return back()->with('success', $message);
    }
    
    public function search(Request $request)
    {
        if ($request->has('query')) {
            $query = $request->get('query');
            $result = enquiry::where('name', 'like', '%' . $query . '%')->orWhere('mobile', 'like', '%' . $query . '%')->take(10)->get();

            return response()->json(['data' => $result]);
        } else {

            return view('admin.searchEnquiry');
        }
    }

    
}
