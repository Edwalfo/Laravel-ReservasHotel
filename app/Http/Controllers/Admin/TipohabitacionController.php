<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tipohabitacion;
use Illuminate\Http\Request;

/**
 * Class TipohabitacionController
 * @package App\Http\Controllers
 */
class TipohabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipohabitacions = Tipohabitacion::paginate();

        return view('admin.tipohabitacion.index', compact('tipohabitacions'))
            ->with('i', (request()->input('page', 1) - 1) * $tipohabitacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipohabitacion = new Tipohabitacion();
        return view('admin.tipohabitacion.create', compact('tipohabitacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipohabitacion::$rules);

        $tipohabitacion = Tipohabitacion::create($request->all());

        return redirect()->route('tipohabitacions.index')
            ->with('success', 'Tipohabitacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipohabitacion = Tipohabitacion::find($id);

        return view('admin.tipohabitacion.show', compact('tipohabitacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipohabitacion = Tipohabitacion::find($id);

        return view('admin.tipohabitacion.edit', compact('tipohabitacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipohabitacion $tipohabitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipohabitacion $tipohabitacion)
    {
        request()->validate(Tipohabitacion::$rules);

        $tipohabitacion->update($request->all());

        return redirect()->route('tipohabitacions.index')
            ->with('success', 'Tipohabitacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipohabitacion = Tipohabitacion::find($id)->delete();

        return redirect()->route('tipohabitacions.index')
            ->with('success', 'Tipohabitacion deleted successfully');
    }
}
