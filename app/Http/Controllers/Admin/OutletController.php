<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outlets = Outlet::all();
        // dd($outlets);
        return view('admin.outlets.index', compact('outlets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $outlets = Outlet::all();
        return view('admin.outlets.create', compact('outlets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_store' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'phone_global' => 'required',
            'office_hours' => 'required',
            'url' => 'required'
        ]);

        Outlet::create($validatedData);
        $request->session()->flash('pesan', "Your successfully added a New Outlet");
        return redirect()->route('outlet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function show(Outlet $outlet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function edit(Outlet $outlet)
    {
        $outlets = Outlet::all();
        // dd($outlets);
        return view('admin.outlets.index', compact('outlets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outlet $outlet)
    {
        $validatedData = $request->validate([
            'name_store' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'phone_global' => 'required',
            'office_hours' => 'required',
            'url' => 'required'
        ]);

        $outlet->update($validatedData);
        return redirect()->route('outlet.index')->with('update', 'the information has been successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outlet $outlet)
    {
        $outlet->delete();
        return redirect()->route('outlet.index')->with('delete', 'The Outlet has been successfully removed');
    }
}
