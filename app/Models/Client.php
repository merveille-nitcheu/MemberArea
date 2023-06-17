<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nom_client','prenom_client','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);

    }
    public function commentaires()
    {
        return $this->hasMany(Comment::class);

    }


}
