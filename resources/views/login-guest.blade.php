@include('header')
<section id="crear_articulos" class="crear_articulos">
<div class="container">
    <div class="row justify-content-evenly">
        <div class="col text-center">
            <a href="{{ route('guests.create') }}" class="btn btn-primary btnHov">Registrarse</a>
        </div>
        <div class="col text-center">
            <a href="{{ route('showAccess') }}" class="btn btn-primary btnHov">Iniciar Sesion</a>
        </div>
    </div>
</div>
</section>
<footer>
   @include('footer') 
</footer>

