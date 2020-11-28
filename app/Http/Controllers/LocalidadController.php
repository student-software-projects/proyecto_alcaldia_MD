<?php

namespace App\Http\Controllers;
use App\Models\Localidad;
use Illuminate\Http\Request;

class LocalidadController extends Controller
{
    public function index()
    {
        $localidades = Localidad::all();
        return view('localidades.index',compact('localidades'));
    }
    public function create()
    {
        return view('localidades.create');
    }
    public function store(Request $request)
    {
        $localidad = Localidad::create($request->all());
        return redirect()->route('localida.index');
    }
    public function show($id)
    {
        $localidad = Localidad::find($id);
        return view('localidades.show',compact('localidad'));
    }
    public function destroy($id)
    {
        $localidad = Localidad::find($id)->delete();
        return redirect()->route('localida.index');
    }
    public function edit($id)
    {
        $localidad = Localidad::find($id);
        return view('localidades.edit',compact('localidad'));
    }
    public function update(Request $request, $id)
    {
        $localidad = Localidad::find($id)->update($request->all());
        return redirect()->route('localida.index');
    }

}
