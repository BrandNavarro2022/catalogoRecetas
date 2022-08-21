<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\Categoria;
use Illuminate\Http\Request;

/**
 * Class RecetaController
 * @package App\Http\Controllers
 */
class RecetaController extends Controller
{
    public function index()
    {
        $recetas = Receta::paginate();

        return view('receta.index', compact('recetas'))
            ->with('i', (request()->input('page', 1) - 1) * $recetas->perPage());
    }

    public function create()
    {
        $categorias = Categoria::pluck('nombre', 'id');
        $receta = new Receta();
        return view('receta.create', compact('receta', 'categorias'));
    }

    public function store(Request $request)
    {
        $receta = $request->all();
        request()->validate(Receta::$rules);
        if ($request->imagen){
            $nombre = $request->imagen->getClientOriginalName();
            $request->imagen->move('images', $nombre);
            $curso['imagen'] = $nombre;
        }
        $receta = Receta::create($receta);

        return redirect()->route('recetas.index')
            ->with('success', 'Receta creada con éxito');
    }

    public function show($id)
    {
        $receta = Receta::find($id);
        return view('receta.show', compact('receta'));
    }

    public function edit($id)
    {
        $categorias = Categoria::pluck('nombre', 'id');
        $receta = Receta::find($id);
        return view('receta.edit', compact('curso', 'categorias'));
    }

    public function update(Request $request, Receta $receta)
    {
        $recetaEdit = $request->all();
        request()->validate(Receta::$rules);
        if ($request->imagen){
            $nombre = $request->imagen->getClientOriginalName();
            $request->imagen->move('images', $nombre);
            $cursoEdit['imagen'] = $nombre;
        }
        $receta->update($recetaEdit);
        return redirect()->route('recetas.index')
            ->with('success', 'Receta actualizada con éxito');
    }

    public function destroy($id)
    {
        $receta = Receta::find($id)->delete();

        return redirect()->route('recetas.index')
            ->with('success', 'Receta eliminada con éxito');
    }
}
