<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Habitacion;
use App\Models\Tipohabitacion;
use App\Models\Piso;
use Illuminate\Http\Request;

/**
 * Class HabitacionController
 * @package App\Http\Controllers
 */
class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitacions = Habitacion::paginate();

        return view('admin.habitacion.index', compact('habitacions'))
            ->with('i', (request()->input('page', 1) - 1) * $habitacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $habitacion = new Habitacion();
        $tipohabitacion = Tipohabitacion::pluck('nombre','id');
        $piso = Piso::pluck('numero','id');
        return view('admin.habitacion.create', compact('habitacion','tipohabitacion','piso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Habitacion::$rules);

        $habitacion = Habitacion::create($request->all());

        return redirect()->route('habitacions.index')
            ->with('success', 'Habitacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $habitacion = Habitacion::find($id);

        return view('admin.habitacion.show', compact('habitacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $habitacion = Habitacion::find($id);
        $tipohabitacion = Tipohabitacion::pluck('nombre','id');
        $piso = Piso::pluck('numero','id');

        return view('admin.habitacion.edit', compact('habitacion','tipohabitacion','piso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Habitacion $habitacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habitacion $habitacion)
    {
        request()->validate(Habitacion::$rules);

        $habitacion->update($request->all());

        return redirect()->route('habitacions.index')
            ->with('success', 'Habitacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $habitacion = Habitacion::find($id)->delete();

        return redirect()->route('habitacions.index')
            ->with('success', 'Habitacion deleted successfully');
    }
}
