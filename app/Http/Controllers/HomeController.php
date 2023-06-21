<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Commentaire;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Spatie\FlareClient\Http\Client;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function dashboard () {
        $users = User::count();
        $posts = Post::count();
        $comments = Commentaire::count();

        return view('sections/dashboard')->with([
            'postCount' => $posts,
            'commentCount' => $comments,
            'userCount' => $users,
        ]);
    }

    /**
     * Affiche la liste des users
     */
    public function clt()
    {

        $users = User::all();
        return view('crud.clt', compact('users'));

    }

     /**
     * Enregistre un nouveau users dans la base de données
     */
    public function store(Request $request)
{



     $user  = User::firstOrCreate([
            'pseudo' => $request->pseudo,
            'nom' => $request->nom,
            'email' => $request->email,
            'is_admin' => 1,
            'password' => Hash::make($request->password),

        ]);

           

     return redirect()->back();

}

    /**
     * Affiche les détails d'un post spécifique
     */

     public function show($id)
     {

         $posts = Post::findOrFail($id);
         return view('crud.show', compact('posts'));

     }

     public function posts()
     {
        $posts = Post::get();
        return view('sections.posts',compact('posts'));

     }


     /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->update([
            'pseudo' => $request->pseudo,
            'nom' => $request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->password),


        ]);

        return redirect()->back();
    }


    /**
     * Supprime le users dans la base de données
     */
    public function activer($id)
    {

        $user = User::findOrFail($id);

        if ($user->status =="actif"){

            $user->status = "inactif";
            //dd($post->status);
        }else{
            $user->status = "actif";
        }
          $user->save();
       // $post->delete();


        return redirect()->back();
    }

    /**
     * compte les elements dans la base de données
     */
    public function count (){
        $users = User::count();
        $posts = Post::count();
        $comments = Commentaire::count();

        return view('dashboard')->with([
            'postCount' => $posts,
            'commentCount' => $comments,
            'userCount' => $users,
        ]);

}




}
