<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SniffNear</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="container">
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Admin SniffNear</span>
        </a>

        <ul class="nav nav-pills">
          <li class="nav-item"><a href="{{ route('home') }}" class="nav-link " aria-current="page">Home</a></li>
          <li class="nav-item"><a href= "{{ route('articles.index') }}"class="nav-link">Articulos</a></li>
          <li class="nav-item"><a href= " {{route('services.index')}}"class="nav-link">Servicios </a></li>
          <li class="nav-item"><a href="{{route('guests.index')}}"  class="nav-link">Clientes</a></li>
        <li class="nav-item"><a href="{{route('users.index')}}"  class="nav-link">Estadisticas</a></li>
        </ul>
      </header>
  </div>
</section>