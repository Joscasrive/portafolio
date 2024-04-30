<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProyectoRequest;
use App\Models\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProyectoController extends Controller
{
   public function __construct() {
    $this->middleware('auth');
   }
    public function index(Request $request): View
    {
        $file = File::first();
       
        $proyectos = Proyecto::paginate();

        return view('proyecto.index', compact('proyectos','file'))
            ->with('i', ($request->input('page', 1) - 1) * $proyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $proyecto = new Proyecto();

        return view('proyecto.create', compact('proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProyectoRequest $request)//: RedirectResponse
    {   
        $proyecto =request()->except('_token');
     
        if ($request->file('img')) {
          $proyecto['img'] = $request->file('img')->store('img','public');
        }
        Proyecto::create($proyecto);
        
    
          return Redirect::route('proyectos.index')
             ->with('success', 'Proyecto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProyectoRequest $request, Proyecto $proyecto): RedirectResponse
    {
        $update = $request->except('_token');

        if ($request->file('img')) {
            // Eliminar imagen anterior
            Storage::disk('public')->delete($proyecto->img);
    
            // Guardar nueva imagen
            $update['img'] = $request->file('img')->store('img', 'public');
        }
    
        // Actualizar registro en la base de datos
        $proyecto->update($update);

        return Redirect::route('proyectos.index')
            ->with('success', 'Proyecto updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Proyecto::find($id)->delete();

        return Redirect::route('proyectos.index')
            ->with('success', 'Proyecto deleted successfully');
    }
}
