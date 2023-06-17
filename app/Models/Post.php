<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['description','path_photo','client_id'];

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);

    }

    public function client()
    {
        return $this->belongsTo(Client::class);

    }
}
