@include('header')

<div class="container">
    <div class="row justify-content-evenly">
        <div class="col text-center">
            <a href="{{ route('login-guest') }}" class="btn btn-primary btnHov">Soy Usuario</a>
        </div>
        <div class="col text-center">
            <a href="{{ route('login-admin') }}" class="btn btn-primary btnHov">Soy Administrador</a>
        </div>
    </div>
</div>



   @include('footer')
