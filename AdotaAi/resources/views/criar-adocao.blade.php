@extends('layouts.admin')

@section('title', 'Cadastro de Pets')

@section('css')
    <link rel="stylesheet" href="/css/criar-adocao-style.css">
@endsection

@section('content')

<header id="headerPets">
    <h1>Antes de começar...</h1>
    <p class="mb-0">
      Certifique-se de ter todas as informações validadas antes de fazer algum
      registro.
    </p>
  </header>

  <main class="container my-4">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card bg-white">
          <div class="card-body">
            <label
              for="imageUpload"
              class="form-label w-100 text-center bg-light text-dark py-5 rounded"
              style="cursor: pointer"
            >
              <img
                src="/img/logo-img.png"
                alt="Upload"
                class="mx-auto bg-light rounded d-flex align-items-center justify-content-center p-4"
                id="previewUploadImage"
              />
            </label>
            <p class="mt-2 text-dark">
              Arraste ou selecione as imagens do pet.
            </p>
            <input
              type="file"
              class="form-control d-none"
              id="imageUpload"
              multiple
              accept="image/*"
            />
            <div
              class="mt-3 border p-2 rounded bg-light"
              id="imageList"
              style="height: 150px; overflow-y: auto"
            ></div>
            <p class="mt-2 text-dark">Última imagem anexada</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-white">
          <div class="card-body">
            <div class="mb-3">
              <label for="nome" class="form-label">Nome do pet *</label>
              <input type="text" class="form-control" id="nome" required />
            </div>
            <div class="mb-3">
              <label for="tamanho" class="form-label">Tamanho *</label>
              <input type="text" class="form-control" id="tamanho" required />
            </div>
            <div class="mb-3">
              <label for="peso" class="form-label">Peso *</label>
              <input type="text" class="form-control" id="peso" required />
            </div>
            <div class="mb-3">
              <label for="idade" class="form-label">Idade *</label>
              <input type="text" class="form-control" id="idade" required />
            </div>
            <button class="btn btn-dark w-100 mt-3" onclick="cadastrarPet()">
              Cadastrar
            </button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-white">
          <div class="card-body">
            <h5 class="card-title">Pré-visualização</h5>
            <div
              class="bg-light rounded mb-3 d-flex align-items-center justify-content-center"
              id="previewImage"
              style="height: 200px"
            >
              <img src="/img/logo-img.png" alt="Imagem PNG" />
            </div>
            <div class="d-flex justify-content-between mb-2">
              <button class="btn btn-sm seta" onclick="prevImage()">
                &#8592;
              </button>
              <button class="btn btn-sm seta" onclick="nextImage()">
                &#8594;
              </button>
            </div>
            <div id="previewInfo" class="text-dark">
              <strong>Nome Pet</strong><br />
              Tamanho: <br />
              Peso: <br />
              Idade:
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection


@section('js')
  <script src="/js/criar-adocao-style.js"></script>
@endsection
