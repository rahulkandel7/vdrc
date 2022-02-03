<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::all();
        return view('admin.notices.index',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notices.create');
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
            'filepath' => 'nullable|file'
        ]);

        if($request->has('filepath')){
            $fname = Str::random(20);
            $fexe = $request->file('filepath')->extension();
            $fpath = "$fname.$fexe";

            $request->file('filepath')->storeAs('public/notices', $fpath);

            $data['filepath'] = 'notices/'.$fpath;
            
        }

        Notice::create($data);

        return redirect(route('admin.notices.index'))->with('success', 'Notice added sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        return view('admin.notices.show',compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        return view('admin.notices.edit',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'filepath' => 'nullable|file'
        ]);

        if($request->has('filepath')){
            $fname = Str::random(20);
            $fexe = $request->file('filepath')->extension();
            $fpath = "$fname.$fexe";

            $request->file('filepath')->storeAs('public/notices', $fpath);

            $data['filepath'] = 'notices/'.$fpath;

            if($notice->filepath){
                Storage::delete('public/'. $notice->filepath);
            }
            
        }

        $notice->update($data);

        return redirect(route('admin.notices.index'))->with('success', 'Notice Updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        //
    }

    public function delete(Request $request)
    {
        $s = Notice::find($request->dataid);
        Storage::delete('public/'.$s->filepath);
        $s->delete();
        return redirect(route('admin.notices.index'))->with('success', 'Notice Deleted Sucessfully');

    }
}
