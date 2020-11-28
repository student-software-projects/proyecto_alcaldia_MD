<?php

namespace App\Http\Controllers;
use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index',compact('equipos'));
    }
    public function create()
    {
        return view('equipos.create');
    }
    public function store(Request $request)
    {
        $equipo = Equipo::create($request->all());
        return redirect()->route('equipo.index');
    }
    public function show($id)
    {
        $equipo = Equipo::find($id);
        return view('equipos.show',compact('equipo'));
    }
    public function destroy($id)
    {
        $equipo = Equipo::find($id)->delete();
        return redirect()->route('equipo.index');
    }
    public function edit($id)
    {
        $equipo = Equipo::find($id);
        return view('equipos.edit',compact('equipo'));
    }
    public function update(Request $request,$id)
    {
        $equipo = Equipo::find($id)->update($request->all());
        return redirect()->route('equipo.index');
    }
}
