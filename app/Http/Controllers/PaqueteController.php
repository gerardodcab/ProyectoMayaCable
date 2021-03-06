<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use App\Models\Canale;
use App\Models\PaquetesCanale;
use Illuminate\Http\Request;

/**
 * Class PaqueteController
 * @package App\Http\Controllers
 */
class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquetes = Paquete::paginate();
 
        return view('paquete.index', compact('paquetes'))
            ->with('i', (request()->input('page', 1) - 1) * $paquetes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paquete = new Paquete();
        return view('paquete.create', compact('paquete'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datospaquete   = request()->validate(Paquete::$rules);

        if ($request->hasFile('imagen')){
            $datospaquete['imagen']=$request->file('imagen')->store('uploads','public');
        }

        $paquete = Paquete::insert($datospaquete);



        return redirect()->route('paquetes.index')
            ->with('success', 'Paquete created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $paquete = Paquete::find($id);
        $canales = Canale::all();
        $paquetesCanales = PaquetesCanale::all();
       

        return view('paquete.show', compact('paquete', 'canales', 'paquetesCanales'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paquete = Paquete::find($id);

        return view('paquete.edit', compact('paquete'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Paquete $paquete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paquete $paquete)
    {
        request()->validate(Paquete::$rules);

        $paquete->update($request->all());

        return redirect()->route('paquetes.index')
            ->with('success', 'Paquete updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paquete = Paquete::find($id)->delete();

        return redirect()->route('paquetes.index')
            ->with('success', 'Paquete deleted successfully');
    }
}
