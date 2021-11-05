<?php

namespace App\Http\Controllers;

use App\Models\Tipospaquete;
use Illuminate\Http\Request;

/**
 * Class TipospaqueteController
 * @package App\Http\Controllers
 */
class TipospaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipospaquetes = Tipospaquete::paginate();

        return view('tipospaquete.index', compact('tipospaquetes'))
            ->with('i', (request()->input('page', 1) - 1) * $tipospaquetes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipospaquete = new Tipospaquete();
        return view('tipospaquete.create', compact('tipospaquete'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipospaquete::$rules);

        $tipospaquete = Tipospaquete::create($request->all());

        return redirect()->route('tipospaquetes.index')
            ->with('success', 'Tipospaquete created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipospaquete = Tipospaquete::find($id);

        return view('tipospaquete.show', compact('tipospaquete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipospaquete = Tipospaquete::find($id);

        return view('tipospaquete.edit', compact('tipospaquete'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipospaquete $tipospaquete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipospaquete $tipospaquete)
    {
        request()->validate(Tipospaquete::$rules);

        $tipospaquete->update($request->all());

        return redirect()->route('tipospaquetes.index')
            ->with('success', 'Tipospaquete updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipospaquete = Tipospaquete::find($id)->delete();

        return redirect()->route('tipospaquetes.index')
            ->with('success', 'Tipospaquete deleted successfully');
    }
}
