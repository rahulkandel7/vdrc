<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galleryitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $galleryitems = Galleryitem::all();
        // return view('admin.galleryitems.index', compact('galleryitems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galleryitems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $data = $request->validate([
            'photopath' => 'required|image|mimes:png,jpg',
        ]);
        $data['gallery_id'] = 1;

        if($request->has('photopath')){
            $fname = Str::random(20);
            $fexe = $request->file('photopath')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath')->storeAs('public/galleryitems', $fpath);

            $data['photopath'] = 'galleryitems/'.$fpath;
            
        }

        Galleryitem::create($data);

        return Redirect::back()->with('success', 'Image added sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galleryitem  $galleryitem
     * @return \Illuminate\Http\Response
     */
    public function show(Galleryitem $galleryitem)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galleryitem  $galleryitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Galleryitem $galleryitem)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galleryitem  $galleryitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galleryitem $galleryitem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galleryitem  $galleryitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galleryitem $galleryitem)
    {
        //
    }

    public function delete(Request $request)
    {
        $s = Galleryitem::find($request->dataid);
        Storage::delete('public/'.$s->photopath);
        $s->delete();
        return Redirect::back()->with('success', 'Image Deleted Sucessfully');

    }

    public function showImage($id)
    {
        $galleryitems = Galleryitem::where('gallery_id',$id)->get();
        return view('admin.galleryitems.index', compact('galleryitems','id'));
    }
}
