@extends('layouts.main')

@section('title', 'Lista de Adoção')

@section('css')
    <link rel="stylesheet" href="/css/listaAdocao-style.css">
@endsection

@section('content')

<body>
  <div class="background-wave mt-5">

    <div class="container-fluid mb-4">
      <div class="filters">
        <select class="form-select w-auto px-5">
          <option selected>Tipo de Animal</option>
        </select>
        <select class="form-select w-auto px-5">
          <option selected>Sexo</option>
        </select>
        <select class="form-select w-auto px-5">
          <option selected>Raça</option>
        </select>
        <select class="form-select w-auto px-5">
          <option selected>Idade</option>
        </select>
      </div>
    </div>


    <div class="cards-container">

      <div>
        <div class="animal-card">
          <img src="https://placehold.co/300x200" alt="Animal">
          <div class="card-info">
            <p class="mb-0 fw-semibold">Nome</p>
            <p class="text-muted mb-0">Sexo, <span class="fw-normal">Raça</span></p>
          </div>
        </div>
      </div>

      <div>
        <div class="animal-card">
          <img src="https://placehold.co/300x200" alt="Animal">
          <div class="card-info">
            <p class="mb-0 fw-semibold">Nome</p>
            <p class="text-muted mb-0">Sexo, <span class="fw-normal">Raça</span></p>
          </div>
        </div>
      </div>

      <div>
        <div class="animal-card">
          <img src="https://placehold.co/300x200" alt="Animal">
          <div class="card-info">
            <p class="mb-0 fw-semibold">Nome</p>
            <p class="text-muted mb-0">Sexo, <span class="fw-normal">Raça</span></p>
          </div>
        </div>
      </div>

      <div>
        <div class="animal-card">
          <img src="https://placehold.co/300x200" alt="Animal">
          <div class="card-info">
            <p class="mb-0 fw-semibold">Nome</p>
            <p class="text-muted mb-0">Sexo, <span class="fw-normal">Raça</span></p>
          </div>
        </div>
      </div>
      <div>
        <div class="animal-card">
          <img src="https://placehold.co/300x200" alt="Animal">
          <div class="card-info">
            <p class="mb-0 fw-semibold">Nome</p>
            <p class="text-muted mb-0">Sexo, <span class="fw-normal">Raça</span></p>
          </div>
        </div>
      </div>
      <div>
        <div class="animal-card">
          <img src="https://placehold.co/300x200" alt="Animal">
          <div class="card-info">
            <p class="mb-0 fw-semibold">Nome</p>
            <p class="text-muted mb-0">Sexo, <span class="fw-normal">Raça</span></p>
          </div>
        </div>
      </div>
      <div>
        <div class="animal-card">
          <img src="https://placehold.co/300x200" alt="Animal">
          <div class="card-info">
            <p class="mb-0 fw-semibold">Nome</p>
            <p class="text-muted mb-0">Sexo, <span class="fw-normal">Raça</span></p>
          </div>
        </div>
      </div>
    </div>


    <div class="pagination-container text-center">
      <nav>
        <ul class="pagination justify-content-center mb-0">
          <li class="page-item"><a class="page-link" href="#">«</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
          <li class="page-item"><a class="page-link" href="#">10</a></li>
          <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
      </nav>
    </div>
  </div>
</body>

@endsection