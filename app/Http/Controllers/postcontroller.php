<?php

namespace App\Http\Controllers;

use App\Models\Planets;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Método para mostrar la lista de planetas
    public function lista()
    {
        $lista = Planets::paginate(4);

        return view('post.lista', compact('lista'));
    }

    // Método para eliminar un planeta
    public function destroy($id)
    {
        $borrar = Planets::findOrFail($id);
        $borrar->delete();
        return redirect()->route('post.lista','post.show')->with('success', 'Planeta eliminado correctamente.');
    }

    // Método para mostrar el formulario de creación
    public function create()
    {
        return view('post.formulario');
    }

    // Método para procesar el formulario de creación
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'size' => 'required|numeric',
            'description' => 'required|string',
            'moons' => 'required|numeric',
            'position' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Planets::create([
            'name' => $request->name,
            'image' => $imagePath,
            'size' => $request->size,
            'description' => $request->description,
            'moons' => $request->moons,
            'position' => $request->position,

        ]);

        return redirect()->route('post.lista')->with('success', 'Planeta creado con éxito.');
    }

    // Método para mostrar el formulario de edición
    public function edit($id)
    {
        $post = Planets::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    // Método para procesar la actualización de un planeta
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'size' => 'required|numeric',
            'description' => 'required|string',
            'moons' => 'required|numeric',
            'position' => 'required|numeric',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = Planets::findOrFail($id);

        $post->name = $request->name;
        $post->size = $request->size;
        $post->description = $request->description;
        $post->moons = $request->moons;
        $post->position = $request->position;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $post->image = $imagePath;
        }

        $post->save();

        return redirect()->route('post.lista')->with('success', 'Planeta actualizado correctamente.');
    }

    // Método para mostrar detalles de un planeta
    public function show( $id)
    {
       $post = Planets::findOrFail($id);
        return view('post.show', compact('post'));
    }





public function index()
{
    $planets = Planets::all();


     // Obtiene todos los planetas
    return view('layout.home', compact('planets'));
}

}
