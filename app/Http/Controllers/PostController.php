<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Client;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // session_destroy();
        $client= Client::where('user_id',session('utilisateur')->id)->first();
        $clients = User::where([['is_admin','=',0 ] ,['id','<>',$client->id]])->get();

        $posts = Post::where('status','actif')->get();
        //$nbcomments = Commentaire::count();
        return view('dashboard',['clients'=>$clients, 'posts'=>$posts]);
    }



    public function viewpublications($id)
    {
        $client = Client::findOrFail($id);
        $posts = Post::where('client_id',$client->id)->get();
        return view('publications',compact('posts'));
    }
    public function viewpost($id)
    {
        $post = Post::findOrFail($id);
        return view('publications',compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {

    $client= Client::where('user_id',session('utilisateur')->id)->first();


        $filename = $client->id.'.'.$request->path_photo->extension();

        Post::firstOrCreate([
            'client_id'=>$client->id,
            'status'=>'actif',
            'description'=>$request->description,
            'path_photo'=>$request->path_photo->storeAs('images',$filename,'public'),

        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        $client= Client::where('user_id',session('utilisateur')->id)->first();
        $filename = $client->id.'.'.$request->path_photo->extension();

        $post->update([

            'description'=>$request->description,
            'path_photo'=>$request->path_photo->storeAs('images',$filename,'public'),

        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->back();
    }
    public function savecomment(Request $request, string $id)

    {
        $post = Post::findOrFail($id);
        $comments= Commentaire::where('post_id',$post->id);
        $nbcomments = $comments->count();
        Commentaire::firstOrCreate([
            'nom_description'=>$request->commentaire,
            'post_id'=>$post->id,
            'client_id'=>session('utilisateur')->id,
           // 'commentaire_id'=>1,

        ]);
        return Redirect::back()->with(['nbcomments'=>$nbcomments]);


    }
    public function storereplies(Request $request, string $id, string $id_post)

    {
        $commentaire = Commentaire::findOrFail($id);
        $post = Post::findOrFail($id_post);
        Commentaire::firstOrCreate([
            'nom_description'=>$request->sous_commentaire,
            'post_id'=>$post->id,
            'client_id'=>session('utilisateur')->id,
            'commentaire_id'=>$commentaire->id,

        ]);
        return redirect()->back();


    }

}
