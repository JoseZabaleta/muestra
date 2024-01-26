<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
   // protected $table = "users";para administrar otras tablas
  /*  protected $fillable = ['nombre', 'descripcion','categoria']; */
  protected $guarded =[]; // resguarda los campos protegidos para que no vulneren las aprobaciones de carga

 


}


