<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.addimage');
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
        //validate the files
        $this->validate($request, [
            'image' => 'required',
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg|max:20480',
            'thumbnail' => 'required',
            'thumbnail.*' => 'mimes:jpeg,png,jpg,gif,svg|max:20480',
            'ipi1' => 'required',
            'ipi1.*' => 'mimes:jpeg,png,jpg,gif,svg|max:20480',
            'ipi2' => 'required',
            'ipi2.*' => 'mimes:jpeg,png,jpg,gif,svg|max:20480',
            'ipi3' => 'required',
            'ipi3.*' => 'mimes:jpeg,png,jpg,gif,svg|max:20480'
        ]);
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $files) {

                $file_name = "slider-" . time() . rand(1, 100) . "." . $files->getClientOriginalExtension();
                $files->move(public_path('images'), $file_name);
                $file = new Image();
                $file->pno = $request->get('pno');
                $file->name = $file_name;
                $file->save();
            }
        }
        $single = ['thumbnail', 'ipi1', 'ipi2', 'ipi3'];
        foreach ($single as $name) {
            if ($request->hasFile($name)) {
                $files = $request->file($name);

                $file_name = $name . "-" . time() . rand(1, 100) . "." . $files->getClientOriginalExtension();
                $files->move(public_path('images'), $file_name);
                $file = new Image();
                $file->pno = $request->get('pno');
                $file->name = $file_name;
                $file->save();
            }
        }

        $message = 'Property with id ' . $request->get('pno') . ' is Uploaded Successfully ';
        return redirect(route('admin-add-property'))->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
