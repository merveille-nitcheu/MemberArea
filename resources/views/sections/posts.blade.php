@extends('layouts.app_dashboard_admin')

@section('content')
<div class="col-12 mt-4">
    <div class="card mb-4">
      <div class="card-header pb-0 p-3">
        <h6 class="mb-1">Liste des Posts</h6>
        <p class="text-sm"></p>
      </div>
      <div class="card-body p-3">
        <div class="row">
            @foreach ($posts as $post )
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card card-blog card-plain">
                  <div class="position-relative">
                    <a class="d-block shadow-xl border-radius-xl">
                      <img src="{{Storage::url($post->path_photo)}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                    </a>
                  </div>
                  <div class="card-body px-1 pb-0">
                    <p class="text-gradient text-dark mb-2 text-sm"> {{count($post->commentaires)}} Commentaires</p>
                    <a href="">
                      <h5>
                        publié par {{$post->client->user->pseudo}}
                      </h5>
                    </a>
                    <p class="mb-4 text-sm">
                        <?php  $lignes = explode("\n",$post->description); $debut = array_slice($lignes, 0, 2); $premieres_lignes=implode("\n",$debut)
                                        ?>

                                    {{$premieres_lignes}}
                    </p>
                    <div class="d-flex align-items-center justify-content-between">
                        @if($post->status=='actif')
                        <form action="{{route('destroy',$post->id)}}" method="post">
                            @csrf
                            <button class="btn btn-sm btn-danger" >Bloquer</button>
                        </form>
                        @elseif ($post->status=='inactif')
                        <form action="{{route('activer',$post->id)}}" method="POST">
                            @csrf
                            <button class="btn btn-sm btn-danger" >Activer</button>
                        </form>

                        @endif


                    </div>
                  </div>
                </div>
              </div>
            @endforeach




        </div>
      </div>
    </div>
  </div>
@endsection
