<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::paginate();//consulta y trae todos los cursos
        
        return view('cursos.index',compact('cursos'));

    }
    public function create(){

        return view('cursos.create');
    }

    public function store(StoreCurso $request ){
        
        //eloquent metodos
       /*   $curso = new Curso();
        $curso->nombre= $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();*/
        
        
        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show',$curso);
        
    }//todo lo que se recupere del formualrio se guardara 
    public function show ($id){

        $curso = Curso::find($id);
        
        return view('cursos.show',compact('curso'));
    }
    public function edit(Curso $curso){
       // $curso =Curso::find($id);
        return view('cursos.edit', compact('curso'));
    }
    public function update(StoreCurso $request,Curso $curso){
       
             
       
        //return $request->all();
       
       /*  $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save(); */
        $curso->update($request->all());//toma el modelo, recorre el update y carga toda la infomraciion en el request.
        
        return redirect()->route('cursos.show',$curso);
    }
    public function destroy(Curso $curso) {
        $curso->delete();

        return redirect()->route('cursos.index');


    }
    
}
