@section('css')
<link rel="stylesheet" href="/css/header-style.css">
@endsection

<header class=" position-fixed w-100 HeaderDesktop">
    <div class=" col-3 d-flex justify-content-center flex-column align-items-center">
        <div class="top-header-1 w-100 ms-5">
            <h1 class="logo">acapra</h1>
        </div>
        <div class="bottom-header-1  d-flex w-100 gap-2 ms-5">
            <i class="bi bi-whatsapp"></i>
            <i class="bi bi-facebook"></i>
            <i class="bi bi-instagram"></i>
        </div>
    </div>
    <div class=" col-6  d-flex flex-column justify-content-center align-items-center">
        <div class="top-header-2 w-75 mt-3">
            <div class="search-container">
                <i class="bi bi-search-heart me-2"></i>
                <input type="text" placeholder="Busque as sessões do site" />
              </div>
        </div>
        <div class="bottom-header-2 mt-4 mb-2 d-flex justify-content-center gap-1">
            <button class="bg-transparent rounded-5 btn-header-2">Home</button>
            <button class="bg-transparent rounded-5 btn-header-2">Sobre Nós</button>
            <button class="bg-transparent rounded-5 btn-header-2">Procurar Pets</button>
            <button class="bg-transparent rounded-5 btn-header-2">Doações</button>
            <button class="bg-transparent rounded-5 btn-header-2">Adoções</button>
        </div>
    </div>
    <div class=" col-3 me-5 d-flex justify-content-center flex-column align-items-center">
        <div class="top-header-3">
            <a href="#" class="link-right">Contatos</a>
            <a href="#" class="link-right">Form. Adoção</a>
        </div>
        <div class="bottom-header-3 icons-right">
            <i class="bi bi-person-arms-up icon-3"></i>
            <i class="bi bi-person icon-4"></i>
        </div>
    </div>
</Header>

<Header class="HeaderMobile position-fixed w-100 justify-content-between align-items-center p-3">
    <div class="col-3 d-flex justify-content-center align-items-center" id="menuIcon">
        <i class="bi bi-list" id="openMenu"></i>
    </div>
    <div class="col-6 d-flex justify-content-center" id="logoTitle">
        <h1 class="logo">acapra</h1>
    </div>
    <div class="col-3 d-flex justify-content-center gap-2 align-items-center" id="iconRight">
        <i class="bi bi-search" id="searchIcon"></i>
        <i class="bi bi-person"></i>
    </div>


    <div class="search-container w-100 px-3 d-none" id="searchContainer">
        <i class="bi bi-search-heart me-2"></i>
        <input type="text" placeholder="Busque as sessões do site" id="searchInput" />
    </div>

</header>

<div id="menuMobile" class="menu-mobile shadow-lg">
    <ul class="list-unstyled m-0 p-3">
        <li><i class="bi bi-globe2 me-2"></i> Redes Sociais</li>
        <li><i class="bi bi-house-door me-2"></i> Home</li>
        <li><i class="bi bi-people me-2"></i> Sobre Nós</li>
        <li><i class="bi bi-search-heart me-2"></i> Procurar Pets</li>
        <li><i class="bi bi-heart me-2"></i> Doações</li>
        <li><i class="bi bi-suit-heart me-2"></i> Adoção</li>
        <li><i class="bi bi-headset me-2"></i> Fale Conosco</li>
        <li><i class="bi bi-journal-text me-2"></i> Formulários de adoção</li>
        <li><i class="bi bi-envelope me-2"></i> Contatos</li>
    </ul>
</div>

<script>
    let lastScrollTop = 0;

    window.addEventListener("scroll", function () {
      const scrollTop = window.scrollY || document.documentElement.scrollTop;
      const elements = [
        document.querySelector(".bottom-header-1"),
        document.querySelector(".bottom-header-2"),
        document.querySelector(".bottom-header-3")
      ];

      if (scrollTop === 0 || scrollTop < lastScrollTop) {
        elements.forEach(el => el.classList.remove("hidden-section"));
      } else {
        elements.forEach(el => el.classList.add("hidden-section"));
      }
      lastScrollTop = scrollTop;
    });


    const openMenuBtn = document.getElementById("openMenu");
    const menuMobile = document.getElementById("menuMobile");

    openMenuBtn.addEventListener("click", () => {
        menuMobile.classList.toggle("active");
    });

    const searchIcon = document.getElementById("searchIcon");
    const searchContainer = document.getElementById("searchContainer");
    const searchInput = document.getElementById("searchInput");

    const menuIcon = document.getElementById("menuIcon");
    const logoTitle = document.getElementById("logoTitle");
    const iconRight = document.getElementById("iconRight");

    function showSearch() {
        menuIcon.classList.add("d-none");
        logoTitle.classList.add("d-none");
        iconRight.classList.add("d-none");

        searchContainer.classList.remove("d-none");
        searchInput.focus();
    }

    function restoreHeader() {
        menuIcon.classList.remove("d-none");
        logoTitle.classList.remove("d-none");
        iconRight.classList.remove("d-none");

        searchContainer.classList.add("d-none");
        searchInput.value = "";
    }

    searchIcon.addEventListener("click", showSearch);
    searchInput.addEventListener("blur", restoreHeader);
    searchInput.addEventListener("keydown", (e) => {
        if (e.key === "Enter") restoreHeader();
    });
  </script>

