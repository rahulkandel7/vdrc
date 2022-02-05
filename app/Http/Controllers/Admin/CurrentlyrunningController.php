<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Currentlyrunning;
use Illuminate\Http\Request;

class CurrentlyrunningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentlyrunnings = Currentlyrunning::all();
        return view('admin.currentlyrunnings.index',compact('currentlyrunnings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.currentlyrunnings.create');
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
            'description' => 'required|string',
        ]);

        Currentlyrunning::create($data);

        return redirect(route('admin.currentlyrunnings.index'))->with('success', 'Currently Running Program added sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Currentlyrunning  $currentlyrunning
     * @return \Illuminate\Http\Response
     */
    public function show(Currentlyrunning $currentlyrunning)
    {
        return view('admin.currentlyrunnings.show',compact('currentlyrunning'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Currentlyrunning  $currentlyrunning
     * @return \Illuminate\Http\Response
     */
    public function edit(Currentlyrunning $currentlyrunning)
    {
        return view('admin.currentlyrunnings.edit',compact('currentlyrunning'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Currentlyrunning  $currentlyrunning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Currentlyrunning $currentlyrunning)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $currentlyrunning->update($data);

        return redirect(route('admin.currentlyrunnings.index'))->with('success', 'Currently Running Program updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Currentlyrunning  $currentlyrunning
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currentlyrunning $currentlyrunning)
    {
        //
    }

    public function delete(Request $request)
    {
        $s = Currentlyrunning::find($request->dataid);
        $s->delete();
        return redirect(route('admin.currentlyrunnings.index'))->with('success', 'Currently Running Program Deleted Sucessfully');

    }
}
