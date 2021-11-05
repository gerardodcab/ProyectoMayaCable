<?php

namespace App\Http\Controllers;

use App\Models\PaquetesCanale;
use Illuminate\Http\Request;

/**
 * Class PaquetesCanaleController
 * @package App\Http\Controllers
 */
class PaquetesCanaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquetesCanales = PaquetesCanale::paginate();

        return view('paquetes-canale.index', compact('paquetesCanales'))
            ->with('i', (request()->input('page', 1) - 1) * $paquetesCanales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paquetesCanale = new PaquetesCanale();
        return view('paquetes-canale.create', compact('paquetesCanale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PaquetesCanale::$rules);

        $paquetesCanale = PaquetesCanale::create($request->all());

        return redirect()->route('paquetes-canales.index')
            ->with('success', 'PaquetesCanale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paquetesCanale = PaquetesCanale::find($id);

        return view('paquetes-canale.show', compact('paquetesCanale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paquetesCanale = PaquetesCanale::find($id);

        return view('paquetes-canale.edit', compact('paquetesCanale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PaquetesCanale $paquetesCanale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaquetesCanale $paquetesCanale)
    {
        request()->validate(PaquetesCanale::$rules);

        $paquetesCanale->update($request->all());

        return redirect()->route('paquetes-canales.index')
            ->with('success', 'PaquetesCanale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paquetesCanale = PaquetesCanale::find($id)->delete();

        return redirect()->route('paquetes-canales.index')
            ->with('success', 'PaquetesCanale deleted successfully');
    }
}
