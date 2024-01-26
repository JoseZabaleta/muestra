@extends('layouts.plantilla')

@section('title','Cursos')

@section ('content')
   
    <h1>Bienvenido a la pagina principal de Cursos</h1>

    <a href="{{route('cursos.create')}}">Crear Cursos</a>
    <ul>
        @foreach ($cursos as $curso )
            <li>
                <a href="{{route('cursos.show',$curso)}}">{{$curso->nombre}}</a>
            </li>
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection


