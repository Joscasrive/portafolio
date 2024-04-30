<?php

use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\File;

Route::get('/', [PortafolioController::class,'index']);

Auth::routes();


Route::resource('proyectos', ProyectoController::class)->names('proyectos');
Route::post('files', function (Request $request) {
    $request->validate([
        'pdf' => 'required|mimes:pdf',
    ]);
$file = request()->except('_token');
if ($request->file('pdf')) {
    $file['url'] = $request->file('pdf')->store('file','public');
    File::create($file);
    
}
return redirect()->route('proyectos.index');
 
})->name('files.subir');


Route::get('descargar',function(){
    $file = File::first();
    $extension = pathinfo($file->url,PATHINFO_EXTENSION);
    return response()->download(public_path('storage/'.$file->url),'Jose'.$extension);
})->name('files.descargar');









