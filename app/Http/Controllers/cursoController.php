<?php

namespace App\Http\Controllers;

use App\Models\Tipo_proyecto;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    public function index(){
        $tipo_proy = Tipo_proyecto::all();

        return view('cursos.index', compact('tipo_proy'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        return view('cursos.show', compact('curso'));
    }
}
