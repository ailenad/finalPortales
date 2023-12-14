<header id="header">
    @include('header')
</header>
 <div class="d-flex justify-content-center ">
    <a href="{{ route('services.index')}}" class="btn btn-lg btn-primary mb-3">Gestionar Servicios</a>
    </div> 
<section id="crear_articulos" class="crear_articulos"> 
   
    @include('admin.create_article')
</section>

<section id="abm_articles" class="abm_articles mb-5">
    <div class="container">
        <div class="row">
            @foreach($articulos as $articulo)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $articulo->title }}</h5>
                            <p class="card-text">{{ $articulo->content}}</p>
                            <a href="{{ route('articles.edit', $articulo->id) }}" class="btn btn-lg btn-primary mb-3">Editar</a>
                            <form action="{{ route('articles.destroy', $articulo->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar Articulo</button>
                        </form>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
    </div>
</section>
 