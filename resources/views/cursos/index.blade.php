@extends('layouts.plantilla')

@section('title', 'Tipo_proyecto')

@section('content')
<h1>Esta es la página de los tipos de proyecto</h1>
<ul>
    @foreach ($tipo_proy as $tipo)
        <li>{{$tipo->tipo_proyecto}}</li>
    @endforeach
</ul>
@endsection