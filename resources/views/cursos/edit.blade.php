@extends('layouts.plantilla')

@section('title','cursos edit')

@section('content')
<h1>En esta pagina se editan un curso</h1>

<form action="{{route ('cursos.update',$curso)}}" method="POST">
    @csrf
    @method('put')
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre" value ="{{old('nombre',$curso->nombre)}}">{{--si la validacion falla recupera lo ingresado, si no falla continua--}}
    </label>
    @error('nombre')
    <br>
    <span>*{{$message}}</span>
    <br>
    @enderror {{--Validation--}}

    <br>
    <label>
        Slug:
        <br>
        <input type="text" name="slug" value ="{{old('slug',$curso->slug)}}">{{--si la validacion falla recupera lo ingresado, si no falla continua--}}
    </label>
    @error('slug')
    <br>
    <span>*{{$message}}</span>
    <br>
    @enderror {{--Validation--}}

    <br>
    <label for="">
        Descripcion:
        <br>
        <textarea name="descripcion" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
    </label>
    @error('descripcion')
    <br>
    <span>*{{$message}}</span>
    <br>{{--Validation--}}
@enderror
    <br>

    <label for="">
        Categoria:
        <br>
        <input type="text" name="categoria" value ="{{old('categoria',$curso->categoria)}}">
       
    </label>
    @error('categoria')
    <br>
    <span>*{{$message}}</span>
    <br>{{--validation--}}
@enderror
    <br>

    <button type="submit">Actualizar Formulario</button>
</form>
@endsection




