<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use App\Models\Proyecto;

class PortafolioController extends Controller
{
   public function index(){
    $proyectos = Proyecto::paginate();
    
    return view('welcome',compact('proyectos'));
   }
}
