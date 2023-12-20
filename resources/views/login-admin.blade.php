@include('header')
<div class="container">
    <div class="row justify-content-evenly">
        <div class="col text-center">
            <a href="{{ route('users.create') }}" class="btn btn-primary btnHov">Registrarse</a>
        </div>
        <div class="col text-center">
            <a href="{{ route('showLogin') }}" class="btn btn-primary btnHov">Iniciar Sesion</a>
        </div>
    </div>
</div>

@include('footer')
