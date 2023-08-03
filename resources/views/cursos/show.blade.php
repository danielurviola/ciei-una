@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso)

@section('content')
    <h1>Esta es la pagina del curso {{$curso}}</h1>
@endsection