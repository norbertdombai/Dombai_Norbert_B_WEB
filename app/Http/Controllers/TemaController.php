<?php

namespace App\Http\Controllers;
use App\Models\Tema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function TemaExportToJson()
    {
        $temas = Tema::all();
        return response()->json($temas);
    }

    public function temaindex()
    {
        $temas = Tema::all();
        return view('szavakView', compact('temas'));
    }
}
