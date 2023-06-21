<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouvel utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('crud') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="pseudo">pseudo</label>
                <input type="text" class="form-control" id="pseudo" placeholder="Entrez un pseudo:" name="pseudo">
            </div>

            <div class="form-group mb-3">
                <label for="nom">nom</label>
                <input type="text" class="form-control" id="nom" placeholder="nom:" name="nom">
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email:" name="email">
            </div>

            <div class="form-group mb-3">
                <label for="Password">Password</label>
                <input type="text" class="form-control" id="Password": placeholder="Password:" name="Password:">
            </div>


            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" class="btn btn-primary">Enregister</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal2 -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('crud/{id}', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')

        <div class="form-group mb-3">
                <label for="pseudo">pseudo</label>
                <input type="text" class="form-control" id="pseudo" placeholder="Entrez un pseudo" name="pseudo" value="{{$user->pseudo}}">
            </div>

            <div class="form-group mb-3">
                <label for="nom">nom</label>
                <input type="text" class="form-control" id="nom" placeholder="nom" name="nom" value="{{$user->nom}}">
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{$user->email}}" >
            </div>

            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" >
            </div>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
