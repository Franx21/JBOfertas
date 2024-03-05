<?php

namespace App\Http\Controllers;

use App\Models\ImageUpload;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImagenController extends Controller
{
    public function index()
    {

        //$this->authorize('viewAny', Post::class);
        // return view(
        //     'posts.imagenupload'
        // );
    }

    public function store(Post $post, Request $request)
    {
        $imagen = $request->file('file');
        $manager = new ImageManager(new Driver());
        $nombreImagen = hexdec(uniqid()) . '_' . $imagen->getClientOriginalName();
        $ruta = $manager->read($imagen)->resize(200, 200)->toJpeg(80)->save(base_path('public/uploads/posts/' . $nombreImagen));
        $urlimagenes[]['url'] = 'public/uploads/posts/' . $nombreImagen;

        // $ImageUpload = new ImageUpload();
        // $ImageUpload->filename = $nombreImagen;
        // $ImageUpload->user_id = auth()->user()->id;
        // $ImageUpload->post_id = $request->id;
        // $ImageUpload->save();

        return response()->json(['imagen' => $nombreImagen]);
        //return redirect()->route('dashboard', auth()->user()->username);
    }
}
