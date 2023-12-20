
@include('navbar-admin')

<div class="container mt-4 ">
    <div class="row">
        <div class="col-md-8">
            <h2 class="text-center">Usuarios y servicios contratados</h2>
            @foreach ($guestUsers as $user)
                <div class="card mb-3">
                    <div class="card-body bg-light">
                        <h4 class="card-title">Usuario: {{ $user->nombre }}</h4>
                        <p class="card-text"><strong>Servicios contratados:</strong></p>
                        <ul class="list-group list-group-flush">
                            @foreach ($user->contractedServices as $service)
                                <li class="list-group-item">{{ $service->title }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@include('footer')