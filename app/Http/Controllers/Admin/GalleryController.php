<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.galleries.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galleries.create');
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
            'title' => 'required|string',
            'photopath' => 'required|image|mimes:png,jpg'
        ]);

        if($request->has('photopath')){
            $fname = Str::random(20);
            $fexe = $request->file('photopath')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath')->storeAs('public/gallery', $fpath);

            $data['photopath'] = 'gallery/'.$fpath;
            
        }

        Gallery::create($data);

        return redirect(route('admin.galleries.index'))->with('success', 'Gallery created sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'photopath' => 'nullable|image|mimes:png,jpg'
        ]);

        if($request->has('photopath')){
            $fname = Str::random(20);
            $fexe = $request->file('photopath')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath')->storeAs('public/galleryitems', $fpath);

            $data['photopath'] = 'galleryitems/'.$fpath;

            if($gallery->photopath){
                Storage::delete('public/'. $gallery->photopath);
            }
            
        }

        $gallery->update($data);

        return redirect(route('admin.galleries.index'))->with('success', 'Gallery updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }

    public function delete(Request $request)
    {
        $s = Gallery::find($request->dataid);
        Storage::delete('public/'. $s->photopath);
        $s->delete();
        return redirect(route('admin.galleries.index'))->with('success', 'Gallery Deleted Sucessfully');

    }
}
