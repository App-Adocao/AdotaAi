@extends('layouts.main')

@section('title', 'Detalhes da Adoção')

@section('css')
    <link rel="stylesheet" href="/css/detalhes-adocao-style.css">
@endsection

@section('content')

<body class="wave-bg">

  <div class="container-fluid content-wrapper mt-3">
    <div class="row flex-column flex-md-row align-items-center justify-content-center g-4">


      <div class="col-12 col-md-4 text-center">
        <div class="mb-2">
          <span class="d-block">Nome</span>
          <span class="d-block">Raça</span>
        </div>

        <div id="petCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://placehold.co/300x300?text=Cachorro" class="d-block w-100 pet-image" alt="Cachorro">
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#petCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#petCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>

        <div class="mt-3">
          <button class="btn btn-adopt">Me Adote</button>
        </div>
      </div>


      <div class="col-12 col-md-8">
        <div class="info-box mb-3">
          <strong>Sobre (Nome)</strong>
          <p class="mt-2 mb-0" style="font-size: 0.9rem;">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum."
          </p>
        </div>

        <div class="info-box">
          <strong>Detalhes</strong>
          <p class="mt-2 mb-0" style="font-size: 0.9rem;">
            Sexo: Sexo<br>
            Tamanho: Tamanho<br>
            Idade: Idade<br>
            Cor: Cor<br>
            Cuidados Especiais: Cuidados Especiais<br>
            Castrado: Castrado
          </p>
        </div>
      </div>
    </div>
  </div>

</body>

@endsection