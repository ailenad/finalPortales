@include('header')
<section id="crear_articulos" class="crear_articulos">
<div class="container">
    <div class="row justify-content-evenly">
        <div class="col">
            <a href="{{ route('guests.create') }}" class="btn btn-primary">Registrarse</a>
        </div>
        <div class="col">
            <a href="{{ route('showAccess') }}" class="btn btn-primary">Iniciar Sesion</a>
        </div>
    </div>
</div>
</section>
@include('footer')
