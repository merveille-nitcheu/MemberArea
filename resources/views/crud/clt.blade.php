 @extends('layouts.user_type.auth')

@section('content')
<div>
  <div class="row">
    <div class="col-12">
      <div class="card mb-4 mx-4">
        <div class="card-header pb-0">
          <div class="d-flex flex-row justify-content-between">
            <div>
              <h5 class="mb-0">Liste des Utilisateurs</h5>
            </div>
            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter</button>
          </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table text-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10 ps-2">Pseudo</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Nom</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Email</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Role</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Status</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Action</th>
                </tr>
              </thead>
              @foreach ($users as $user)
              <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->pseudo}}</td>
                  <td>{{$user->nom }}</td>
                  <td>{{$user->email}}</td>
                  <td>@if ($user->is_admin)
                       Admin
                  @else
                     Client
                  @endif</td>
                  <td>{{$user->status}}</td>
                  <td>
                    <form action="{{ route('activer',$user->id) }}" method="POST">
                        @csrf


                        <a class="btn  btn-primary" data-toggle="modal" data-target="#update"><i class="fas fa-user-edit text-secondary"></i></a>
                        @if ($user->status =='actif')
                          <button type="submit" class="btn btn-danger"><i class="cursor-pointer fas fa-eye fa-lg text-secondary"></i></button>
                        @else
                            <button type="submit" class="btn btn-danger"><i class="cursor-pointer fas fa-eye-slash fa-lg text-secondary"></i></button>
                        @endif


                    </form>
                  </td>
               </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('crud/modal')
@endsection







