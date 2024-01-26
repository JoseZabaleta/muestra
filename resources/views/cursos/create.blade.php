@extends('layouts.plantilla')

@section('title','cursos create')

@section('content')
<h1>Aqui se crean cursos</h1>

<form action="{{route ('cursos.store')}}" method="POST">
    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre" value="{{old('nombre')}}">{{--metodo old retorna el valor despues de verificar la validacion--}}
    </label>
    @error('nombre')
        <br>
        <span>*{{$message}}</span>
        <br>
    @enderror

    <br>
    <label>
        Slug:
        <br>
        <input type="text" name="slug" value="{{old('slug')}}">{{--metodo old retorna el valor despues de verificar la validacion--}}
    </label>
    @error('slug')
        <br>
        <span>*{{$message}}</span>
        <br>
    @enderror

    <br>

    <label for="">
        Descripcion:
        <br>
        <textarea name="descripcion" rows="5" >{{old('descripcion')}}</textarea>
    </label>
    @error('descripcion')
        <br>
        <span>*{{$message}}</span>
        <br>
    @enderror
    <br>

    <label for="">
        Categoria:
        <br>
        <input type="text" name="categoria" value="{{old('categoria')}}">
       
    </label>
        @error('categoria')
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
    <br>

    <button type="submit">Enviar Formulario</button>
</form>
@endsection




