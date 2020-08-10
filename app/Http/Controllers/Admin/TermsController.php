<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Terms;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = Terms::all();
        return view('admin.page.terms.index', compact('terms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $terms = Terms::all();
        return view('admin.page.terms.create', compact('terms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'desc_terms' => 'required'
        ]);
        Terms::create($validateData);
        return redirect()->route('terms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Terms  $terms
     * @return \Illuminate\Http\Response
     */
    public function show(Terms $terms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Terms  $terms
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $terms = Terms::findOrFail($id);
        // $termsx = collect(['desc_terms' => $terms]);
        // dd($termsx->json_encode());
        // $terms = collect(['desc_terms']);
        // dd(json_encode($terms));
        // $termsx->toArray();
        // $termsx = json_encode($terms);
        // dd($terms);
        return view('admin.page.terms.edit', compact('terms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Terms  $terms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $terms = Terms::findOrFail($id);
        $validateData = $request->validate([
            'desc_terms' => ''
        ]);
        // dd();
        $terms->update($validateData);
        return redirect()->route('terms.index', $terms->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Terms  $terms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Terms $terms)
    {
        //
    }
}
