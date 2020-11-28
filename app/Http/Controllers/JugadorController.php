<?php

namespace App\Http\Controllers;
use App\Models\Jugador;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnValue;

class JugadorController extends Controller
{
    public function index()
    {
        $jugadores = Jugador::all();
        return view('jugadores.index',compact('jugadores'));
    }
    public function create()
    {
        return view('jugadores.create');
    }
    public function store(Request $request)
    {
        $jugador = Jugador::create($request->all());
        return redirect()->route('jugador.index');
    }
    public function show($id)
    {
        $jugador = Jugador::find($id);
        return view('jugadores.show',compact('jugador'));
    }
    public function destroy($id)
    {
        $jugador = Jugador::find($id)->delete();
        return redirect()->route('jugador.index');
    }
    public function edit($id)
    {
        $jugador = Jugador::find($id);
        return view('jugadores.edit',compact('jugador'));
    }
    public function update(Request $request, $id)
    {
        $jugador = Jugador::find($id)->update($request->all());
        return redirect()->route('jugador.index');
    }
}
