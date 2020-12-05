<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scholarship;
use App\Civilstate;
use App\Anesthesiatype;
use App\Mother;

class MotherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mothers = Mother::all();
        return view('mother.index', compact('mothers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $scholarships = Scholarship::all();
        $civilstates = Civilstate::all();
        $anesthesiatypes = Anesthesiatype::all();
        return view('mother.create', compact('scholarships', 'civilstates', 'anesthesiatypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'age' => 'required',
            'scholarship_id' => 'required|exists:scholarships,id',
            'civilstate_id' => 'required|exists:civilstates,id',
            'anesthesiatype_id' => 'required|exists:anesthesiatypes,id',
            'steroids' => 'required|numeric',
            'finalizarionlabor' => 'required|string',
        ]);

        $input = $request->all();
        $mother = new Mother();
        $mother->fill($input);
        $mother->save();

        return redirect()
            ->route('mother.index')
            ->with('_success', '¡Elemento creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mother $mother)
    {
        $scholarships = Scholarship::all();
        $civilstates = Civilstate::all();
        $anesthesiatypes = Anesthesiatype::all();
        return view('mother.edit', compact('mother', 'scholarships', 'civilstates', 'anesthesiatypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mother $mother)
    {
        $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'age' => 'required',
            'scholarship_id' => 'required|exists:scholarships,id',
            'civilstate_id' => 'required|exists:civilstates,id',
            'anesthesiatype_id' => 'required|exists:anesthesiatypes,id',
            'steroids' => 'required|numeric',
            'finalizarionlabor' => 'required|string',
        ]);

        $input = $request->all();
        $mother->update($input);
        return redirect()->route('mother.index')->with('_success', '¡Elemento actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mother $mother)
    {
        $mother->delete();
        return redirect()->route('mother.index')->with('_success', '¡Elemento eliminado exitosamente!');
    }
}
