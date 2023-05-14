<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Huesped;
use App\Models\Tipodocumento;
use Illuminate\Http\Request;

/**
 * Class HuespedController
 * @package App\Http\Controllers
 */
class HuespedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $huespeds = Huesped::paginate();

        return view('admin.huesped.index', compact('huespeds'))
            ->with('i', (request()->input('page', 1) - 1) * $huespeds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $huesped = new Huesped();
        $tipodocumento = Tipodocumento::pluck('nombre','id');
        return view('admin.huesped.create', compact('huesped','tipodocumento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Huesped::$rules);

        $huesped = Huesped::create($request->all());

        return redirect()->route('huespeds.index')
            ->with('success', 'Huesped created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $huesped = Huesped::find($id);

        return view('admin.huesped.show', compact('huesped'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $huesped = Huesped::find($id);
        $tipodocumento = Tipodocumento::pluck('nombre','id');

        return view('admin.huesped.edit', compact('huesped','tipodocumento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Huesped $huesped
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Huesped $huesped)
    {
        request()->validate(Huesped::$rules);

        $huesped->update($request->all());

        return redirect()->route('huespeds.index')
            ->with('success', 'Huesped updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $huesped = Huesped::find($id)->delete();

        return redirect()->route('huespeds.index')
            ->with('success', 'Huesped deleted successfully');
    }
}
