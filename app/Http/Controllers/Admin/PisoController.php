<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Piso;
use Illuminate\Http\Request;

/**
 * Class PisoController
 * @package App\Http\Controllers
 */
class PisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pisos = Piso::paginate();
      

        return view('admin.piso.index', compact('pisos'))
            ->with('i', (request()->input('page', 1) - 1) * $pisos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $piso = new Piso();
        return view('admin.piso.create', compact('piso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Piso::$rules);

        $piso = Piso::create($request->all());

        return redirect()->route('pisos.index')
            ->with('success', 'Piso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $piso = Piso::find($id);

        return view('admin.piso.show', compact('piso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $piso = Piso::find($id);

        return view('admin.piso.edit', compact('piso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Piso $piso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piso $piso)
    {
        request()->validate(Piso::$rules);

        $piso->update($request->all());

        return redirect()->route('pisos.index')
            ->with('success', 'Piso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $piso = Piso::find($id)->delete();

        return redirect()->route('pisos.index')
            ->with('success', 'Piso deleted successfully');
    }
}
