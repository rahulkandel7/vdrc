<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Majoraccomplishment;
use Illuminate\Http\Request;

class MajoraccomplishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $majoraccomplishments = Majoraccomplishment::all();
        return view('admin.majoraccomplishments.index',compact('majoraccomplishments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.majoraccomplishments.create');
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
            'objective' => 'required',
            'support' => 'required',
            'period' => 'required',
        ]);

        Majoraccomplishment::create($data);

        return redirect(route('admin.majoraccomplishments.index'))->with('success', 'Major Accomplishment added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Majoraccomplishment  $majoraccomplishment
     * @return \Illuminate\Http\Response
     */
    public function show(Majoraccomplishment $majoraccomplishment)
    {
        return view('admin.majoraccomplishments.show',compact('majoraccomplishment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Majoraccomplishment  $majoraccomplishment
     * @return \Illuminate\Http\Response
     */
    public function edit(Majoraccomplishment $majoraccomplishment)
    {
        return view('admin.majoraccomplishments.edit',compact('majoraccomplishment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Majoraccomplishment  $majoraccomplishment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Majoraccomplishment $majoraccomplishment)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'objective' => 'required',
            'support' => 'required',
            'period' => 'required',
        ]);

        $majoraccomplishment->update($data);

        return redirect(route('admin.majoraccomplishments.index'))->with('success', 'Major Accomplishment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Majoraccomplishment  $majoraccomplishment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Majoraccomplishment $majoraccomplishment)
    {
        
    }

    public function delete(Request $request)
    {
        $s = Majoraccomplishment::find($request->dataid);
        $s->delete();
        return redirect(route('admin.majoraccomplishments.index'))->with('success', 'Major Accomplishment Deleted Sucessfully');

    }
}
