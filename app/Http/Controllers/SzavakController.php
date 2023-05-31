<?php

namespace App\Http\Controllers;
use App\Models\Szavak;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SzavakController extends Controller
{
    //teszt
    public function SzavakExportToJson()
    {
        $szavaks = Szavak::all();
        return response()->json($szavaks);
    }


    public function index()
{
    $szavaks = Szavak::all();
    return view('szavakView', compact('szavaks'));
}

public function create(Request $request)
{
    $validatedData = $request->validate([
        'angol' => 'required',
        'magyar' => 'required',
        'temaId' => 'required',
    ]);

    Szavak::create($validatedData);

    return redirect()->route('szavak.index');
}

public function deleteRow($id)
{
    $szavak = szavak::findOrFail($id);
    $szavak->delete();

    return response()->json(['success' => true]);
}


}
