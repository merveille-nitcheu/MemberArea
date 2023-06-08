<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['description'];

    public function post()
    {
        return $this->belongsTo(Post::class);

    }

    public function replies()
    {
        return $this->hasMany(Commentaire::class);

    }
    public function parent()
    {
        return $this->BelonsTo(Commentaire::class);

    }
}
