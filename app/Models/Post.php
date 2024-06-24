<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'link',
        'precio_oferta',
        'precio_regular',
        'envio',
        'tienda',
        'cupon',
        'categoria_id',
        'primer_dia',
        'ultimo_dia',
        'descripcion',
        'imagen_id',
        'user_id',
    ];
    public function savesb()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comentarioNotificacion()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function like()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function meGustas()
    {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function user()
    {
        return $this->belongsTo(User::class)->select(['username']);
    }

    public function comentario()
    {
        return $this->hasMany(Comentario::class);
    }

    public function checkLike(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }

    public function saves()
    {
        return $this->hasMany(Save::class);
    }

    public function checkSave(User $user)
    {
        return $this->saves->contains('user_id', $user->id);
    }
}
