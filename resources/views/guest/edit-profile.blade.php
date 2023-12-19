@include('navbar-guest')
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
<div class="row align-items-center g-lg-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Editar perfil</h1>
    </div>
    <div class="col-md-10 mx-auto col-lg-5">

    <form method="POST" action="{{ route('guest_profiles.update', $guest_profiles->id) }}" class="p-4 p-md-5 border rounded-3 bg-light" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

          <div class="form-floating mb-3">
            <input type="text" name="first_name" value="{{ old('first_name', optional($profile)->first_name)}}"  id="first_name" required  class="form-control" id="floatingPassword">
            <label for="first_name">Nombre</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="last_name" value="{{ old('last_name', optional($profile)->last_name)}}"  id="last_name" required  class="form-control" id="floatingPassword">
            <label for="last_name">Apellido</label>
          </div>
          <div class="form-floating mb-3">
                <input type="file" name="avatar" value="{{ old('avatar', optional($profile)->avatar)}}" class="form-control" accept="image/*">
                <label for="avatar">Imagen de perfil</label>
            </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Publicar</button>
        </form>
      </div>
    </div>
</div>

</div>