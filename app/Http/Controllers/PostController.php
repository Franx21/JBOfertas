<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['show', 'index']);
    }

    public function index(User $user)
    {
        $posts = Post::where('user_id', $user->id)->latest()->paginate(12);

        return view('perfil.index', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        $categorias = Categoria::all();

        return view('posts.create', [
            'categorias' => $categorias,
        ]);
    }
    public function store(Request $request)
    {

        $this->validate(
            $request,
            [
                'titulo' => 'required|max:255',
                'link' => 'required',
                'precio_oferta' => 'required',
                'precio_regular' => 'nullable',
                'envio' => 'nullable',
                'tienda' => 'required',
                'cupon' => 'nullable',
                'categoria' => 'required',
                'primer_dia' => 'required',
                'ultimo_dia' => 'nullable',
                'descripcion' => 'required',
                'imagen' => 'required|max:5000'
            ]
        );

        Post::create([
            'titulo' => $request->titulo,
            'link' => $request->link,
            'precio_oferta' => $request->precio_oferta,
            'precio_regular' => $request->precio_regular,
            'envio' => $request->envio,
            'tienda' => $request->tienda,
            'cupon' => $request->cupon,
            'categoria_id' => $request->categoria,
            'primer_dia' => $request->primer_dia,
            'ultimo_dia' => $request->ultimo_dia,
            'descripcion' => $request->descripcion,
            'imagen_id' => $request->imagen,
            'user_id' => auth()->user()->id,
        ]);

        session()->flash('mensaje', 'La oferta se publico correctamente');

        return redirect()->route('dashboard', auth()->user()->username);
    }

    public function show(Post $post)
    {
        return view(
            'posts.show',
            [
                'post' => $post
            ]
        );
    }

    public function category(Categoria $categoria)
    {
        $posts = Post::where('categoria_id', $categoria->id)
            ->latest('id')
            ->paginate(6);
        return view('posts.categoria', compact('posts', 'categoria'));
    }

    // public function destroy(Post $post)
    // {
    //     $this->authorize('delete', $post);
    //     $post->delete();

    //     $imagen_path = public_path('uploads/' . $post->imagen);

    //     if (File::exists($imagen_path)) {
    //         unlink($imagen_path);
    //     }
    //     return redirect()->route('posts.index', auth()->user()->username);
    // }
}
