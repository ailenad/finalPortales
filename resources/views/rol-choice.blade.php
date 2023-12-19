@include('header')


<div class="container">
    <div class="row justify-content-evenly">
        <div class="col">
            <a href="{{ route('login-guest') }}" class="btn btn-primary">Soy Usuario</a>
        </div>
        <div class="col">
            <a href="{{ route('login-admin') }}" class=" btn btn-primary">Soy Administrador</a>
        </div>
    </div>
</div>






@include('footer')