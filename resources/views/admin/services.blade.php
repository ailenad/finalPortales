<header id="header">
    @include('header')
</header>
<div class="d-flex justify-content-center">
<a href="{{ route('articles.index')}}" class="btn btn-lg btn-primary mb-3">Gestionar Articulos</a>
</div>  
<section id="crear_articulos" class="crear_articulos">
 
  @include('admin.create_services')
</section>
<div class="container">
    <div class="row">
    @foreach($services as $service)
            <div class="col-md-4">
                <div class="card mb-5">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service->title }}</h5>
                     
                        <p class="card-text">{{ $service->description}}</p>
                    </div>
                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-lg btn-primary mb-3">Editar</a>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar Servicio</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
