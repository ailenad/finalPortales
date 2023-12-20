
 @include('navbar-admin')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">Estadísticas de usuarios registrados por día</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Fecha</th>
                                    <th>Usuarios Registrados</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usersPerDay as $data)
                                    <tr>
                                        <td>{{ $data->date }}</td>
                                        <td>{{ $data->count }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')