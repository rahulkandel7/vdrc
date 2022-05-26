<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::all();
        return view('admin.publications.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publications.create');
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
            'name' => 'required|string',
            'type' => 'required|string',
            'filepath' => 'required'
        ]);

        if($request->has('filepath')){
            $fname = Str::random(20);
            $fexe = $request->file('filepath')->extension();
            $fpath = "$fname.$fexe";

            $request->file('filepath')->storeAs('public/publications', $fpath);

            $data['filepath'] = 'publications/'.$fpath;
            
        }

        Publication::create($data);

        return redirect(route('admin.publications.index'))->with('success', 'Publication added sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        return view('admin.publications.edit',compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'photopath' => 'nullable|image|mimes:png,jpg'
        ]);

        if($request->has('filepath')){
            $fname = Str::random(20);
            $fexe = $request->file('filepath')->extension();
            $fpath = "$fname.$fexe";

            $request->file('filepath')->storeAs('public/publications', $fpath);

            $data['filepath'] = 'publications/'.$fpath;

            if($publication->filepath){
                Storage::delete('public/'. $publication->filepath);
            }
            
        }

        $publication->update($data);

        return redirect(route('admin.publications.index'))->with('success', 'Publication updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        return abort(404);
    }

    public function delete(Request $request)
    {
        $s = Publication::find($request->dataid);
        Storage::delete('public/'.$s->filepath);
        $s->delete();
        return redirect(route('admin.publications.index'))->with('success', 'Publication Deleted Sucessfully');

    }
}
