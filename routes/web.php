<?php
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Curso;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', HomeController::class)->name('home');
Route::resource('cursos',CursoController::class);// esto crea automaticamanete las rutas.
Route::view('nosotros','nosotros')->name('nosotros');// para mostrar rutas estaticas, que no solicitan nada la base de datos
/* Route::get('contactanos',function(){

    Mail::to('jose@gamil.com')
            ->send(new ContactanosMailable);
            return"mensaje enviado";
            
})->name('contactanos'); */
Route::get('contactanos', [ContactanosController::class,'index'])
        ->name('contactanos.index');

Route::post('contactanos', [ContactanosController::class,'store'])
        ->name('contactanos.store');


    
    
  /*
Route::controller(CursoController::class)->group(function () {  
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::post('cursos',[CursoController::class,'store'])->name('cursos.store');
    Route::get('cursos/{curso}','show')->name('cursos.show');
    Route::get('cursos/{curso}/edit',[CursoController::class,'edit'])->name('cursos.edit');
    Route::put('cursos/{curso}',[CursoController::class, 'update'])->name('cursos.update');
    Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');} */
   




Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
