<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Genre;
use App\Institution;
use App\Keeper;
use App\Mother;
use App\State;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::join('mothers', 'mothers.id', '=', 'patients.mother_id')
        ->select('patients.*','mothers.name as mother')
        ->get();
        return view('patient.index', compact('patients'));
        // return view('patient.light');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $institutions = Institution::all();
        $keepers = Keeper::all();
        $mothers = Mother::all();
        $states = State::all();
        return view('patient.create', compact('genres','institutions','keepers','mothers','states'));
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
            'toolsbirth' => 'required|string',
            'institutionB_id' => 'required|exists:institutions,id',
            'institutionH_id' => 'required|exists:institutions,id',
            'mother_id' => 'required|exists:mothers,id',
            'genre_id' => 'required|exists:genres,id',
            'keeper_id' => 'required|exists:keepers,id',
            'state_id' => 'required|exists:states,id',
            'laborcompletion' => 'required|string',
            'score' => 'required|numeric',
            'civilregistration' => 'required|numeric',
            'diagnostics' => 'required|string',
            'assessment' => 'required|string',
            'oxigendays' => 'required|numeric',
            'treatmentdays' => 'required|numeric',
            'supplies' => 'required|string',
        ]);

        $input = $request->all();
        $patient = new Patient();
        $patient->fill($input);
        $patient->save();

        return redirect()
            ->route('patient.index')
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function see()
    {
        return view('patient.light');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        
        $genres = Genre::all();
        $institutions = Institution::all();
        $keepers = Keeper::all();
        $mothers = Mother::all();
        $states = State::all();
        return view('patient.edit', compact('patient', 'genres', 'institutions', 'keepers', 'mothers','states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'toolsbirth' => 'required|string',
            'institutionB_id' => 'required|exists:institutions,id',
            'institutionH_id' => 'required|exists:institutions,id',
            'mother_id' => 'required|exists:mothers,id',
            'genre_id' => 'required|exists:genres,id',
            'keeper_id' => 'required|exists:keepers,id',
            'state_id' => 'required|exists:states,id',
            'laborcompletion' => 'required|string',
            'score' => 'required|numeric',
            'civilregistration' => 'required|numeric',
            'diagnostics' => 'required|string',
            'assessment' => 'required|string',
            'oxigendays' => 'required|numeric',
            'treatmentdays' => 'required|numeric',
            'supplies' => 'required|string',
        ]);
        $input = $request->all();
        $patient->update($input);
        return redirect()->route('patient.index')->with('_success', '¡Elemento actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patient.index')->with('_success', '¡Elemento eliminado exitosamente!');
    }

    /**
     * Show the application traffic lights.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showLights()
    {
        
    }
}
