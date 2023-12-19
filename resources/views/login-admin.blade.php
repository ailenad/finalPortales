@include('header')
<div class="container">
    <div class="row justify-content-evenly">
        <div class="col">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Registrarse</a>
        </div>
        <div class="col">
            <a href="{{ route('showLogin') }}" class="btn btn-primary">Iniciar Sesion</a>
        </div>
    </div>
</div>

@include('footer')
