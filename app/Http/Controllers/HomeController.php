<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;

class HomeController extends Controller
{
    public function index()
    {
        $recetas = Receta::paginate();
        return view('landing', compact('recetas'));
    }

    public function home()
    {
        return view('home');
    }

    public function verReceta($id)
    {
        $receta = Receta::find($id);
        return view('verReceta', compact('receta'));
    }
}
