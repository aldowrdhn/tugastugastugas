<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $priv = Privacy::all();
        return view('admin.page.privacy.index', compact('priv'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function show(Privacy $privacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $privacies = Privacy::findOrFail($id);
        return view('admin.page.privacy.edit', compact('privacies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $privacy = Privacy::findOrFail($id);
        $validateData = $request->validate([
            'desc_priv' => ''
        ]);
        // dd();
        $privacy->update($validateData);
        return redirect()->route('privacy.index', $privacy->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Privacy $privacy)
    {
        //
    }
}
