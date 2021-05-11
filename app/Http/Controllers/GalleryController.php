<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;

use function PHPUnit\Framework\fileExists;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $horizontal = gallery::where('type', 'horizontal')->get();
        $vertical = gallery::where('type', 'vertical')->get();
        return view('admin.add_image_to_gallery', ['horizontal' => $horizontal, 'vertical' => $vertical]);
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
        $this->validate($request, [
            'image' => 'required',
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);


        if ($request->hasFile('image')) {
            $files = $request->file('image');

            $file_name = $request->get('type') . "-" . time() . rand(1, 100) . "." . $files->getClientOriginalExtension();
            $files->move(public_path('images/gallery/'), $file_name);
            $file = new gallery();
            $file->type = $request->get('type');
            $file->name = $file_name;
            $file->save();
            $pno = $request->get('ino');
            gallery::where('type', $request->get('type'))->where('name', $request->get('iname'))->delete();
            $fn = $request->get('iname');
            if (fileExists(public_path('images/gallery/') . $fn)) {

                try {
                    unlink(public_path('images/gallery/') . $fn);
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }

        return redirect('/editgallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        //
    }
}
