<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nom_description','post_id','commentaire_id','client_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);

    }
    public function client()
    {
        return $this->belongsTo(Client::class);

    }

    public function replies()
    {
        return $this->hasMany(Commentaire::class);

    }
    public function parent()
    {
        return $this->BelongsTo(Commentaire::class);

    }
}
