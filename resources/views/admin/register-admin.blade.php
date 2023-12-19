<header id="header">
    @include('header')
</header>

<section id="crear_articulos" class="crear_articulos">
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Registro</h1>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="POST" action="{{ route('users.store') }}" class="p-4 p-md-5 border rounded-3 bg-light">
          @csrf
     

          <div class="form-floating mb-3">
          <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" placeholder="Nombre de usuario" required>
          <label for="nombre">Ingrese su nombre</label>
          </div>
          
          @error('nombre')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         

          <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo electrónico" required>
            <label for="Email">Ingrese su direccion de correo</label>
          </div>
          @error('email')
                 <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          

          <div class="form-floating mb-3">
          <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Contraseña" required>
            <label for="email">Ingrese su contraseña</label>
          </div>
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         


          <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
        </form>
         <a href="{{ route('showLogin') }}" class="nav-link">Iniciar Sesion</a></button>
      </div>
    </div>
  </div>
</select>


<footer id="footer" class="footer">

  @include('footer')

</footer>
   




