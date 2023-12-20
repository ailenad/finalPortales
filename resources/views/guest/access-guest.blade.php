
@include('header')
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
  <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Inicio de sesión</h1>
        </div>   
          
        <div class="col-md-10 mx-auto col-lg-5">
          <form method="POST" action="{{ route('access-guest') }}" class="p-4 p-md-5 border rounded-3 bg-light">
              @csrf
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
                  <label for="Email">Ingrese su direccion de correo</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                  <label for="email">Ingrese su contraseña</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary btnHov" type="submit">Iniciar Sesion</button>
          </form>
          <a href="{{ route('guests.create') }}" class="btn  btnHov">No tienes cuenta? Registrarse</a>
        </div>
  </div>
</div>  

@include('footer')






