<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RecentActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RecentActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recentactivities = RecentActivity::all();
        return view('admin.recentactivities.index',compact('recentactivities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recentactivities.create');
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
            'photopath' => 'nullable|image|mimes:png,jpg'
        ]);

        if($request->has('photopath')){
            $fname = Str::random(20);
            $fexe = $request->file('photopath')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath')->storeAs('public/recentactivities', $fpath);

            $data['photopath'] = 'recentactivities/'.$fpath;
            
        }

        RecentActivity::create($data);

        return redirect(route('admin.recentactivities.index'))->with('success', 'Recent Activity added sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecentActivity  $recentActivity
     * @return \Illuminate\Http\Response
     */
    public function show(RecentActivity $recentactivities)
    {
        dd($recentactivities);
        return view('admin.recentactivities.show',compact('recentactivities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecentActivity  $recentActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(RecentActivity $recentActivity)
    {
        return view('admin.recentactivities.edit',compact('recentActivity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RecentActivity  $recentActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RecentActivity $recentActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecentActivity  $recentActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecentActivity $recentActivity)
    {
        //
    }

    public function delete(Request $request)
    {
        $s = RecentActivity::find($request->dataid);
        Storage::delete('public/'.$s->photopath);
        $s->delete();
        return redirect(route('admin.recentactivities.index'))->with('success', 'Recent Activity Deleted Sucessfully');

    }
}
