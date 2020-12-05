<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keeper;
use App\State;

class KeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keepers = Keeper::all();
        return view('keeper.index',compact('keepers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $states = State::all();
        return view('keeper.create');
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
            'cellphone' => 'required|numeric',
        ]);

        $input = $request->all();
        $keeper = new Keeper();
        $keeper->fill($input);
        $keeper->save();

        return redirect()
            ->route('keeper.index')
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
    public function edit(Keeper $keeper)
    {
        return view('keeper.edit', compact('keeper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keeper $keeper)
    {
        $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'cellphone' => 'required|numeric',
        ]);

        $input = $request->all();
        $keeper->update($input);
        return redirect()->route('keeper.index')->with('_success', '¡Elemento actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keeper $keeper)
    {
        $keeper->delete();
        return redirect()->route('keeper.index')->with('_success', '¡Elemento eliminado exitosamente!');
    }
}
