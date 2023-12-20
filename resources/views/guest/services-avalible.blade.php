
@include('navbar-guest')
<div class="container">
       <h2>Servicios Disponibles</h2>
    <div class="row">
        @foreach($services as $service)
        <div class="col-md-4">
                <div class="card mb-5">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service->title }}</h5>
                     
                        <p class="card-text">{{ $service->description}}</p>
                    </div>
                    <form method="POST" action="{{ route('contract_service.store') }}">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <button type="submit" class="btn btn-success btnService m-2">Contratar servicio</button>
                </form>

                            
                   
                </div>
            </div>
        @endforeach
</div>

@include('footer')
