
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
  <div class="sidenav-header">
    <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
        <img src="{{asset('assets/img/logo.png')}}" class="navbar-brand-img h-100">
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('dashboard') ? 'active' : '') }}" href="{{ route('dashboard') }}">
            <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-home text-lg opacity-10" aria-hidden="true"></i>
              </div>
          <span class="nav-link-text ms-1">Início</span>
        </a>
      </li>
      <li class="nav-item mt-2">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Gerenciador</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('perfil') ? 'active' : '') }} " href="{{ route('perfil') }}">
            <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-user-circle-o text-lg opacity-10" aria-hidden="true"></i>
              </div>
            <span class="nav-link-text ms-1">Gerenciar acesso</span>
        </a>
      </li>
      <li class="nav-item pb-2">
        <a class="nav-link {{ (Request::is('categoria') ? 'active' : '') }}" href="{{ route('categoria') }}">
            <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-server text-lg opacity-10" aria-hidden="true"></i>
              </div>
            <span class="nav-link-text ms-1">Categorias</span>
        </a>
      </li>
      <li class="nav-item mt-2">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Paginas</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('contato') ? 'active' : '') }}" href="{{ route('contato') }}">
            <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-vcard-o text-lg opacity-10" aria-hidden="true"></i>
              </div>
          <span class="nav-link-text ms-1">Contato</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('missao') ? 'active' : '') }}" href="{{ route('missao') }}">
            <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-building text-lg opacity-10" aria-hidden="true"></i>
              </div>
          <span class="nav-link-text ms-1">Missão</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('parceiros') ? 'active' : '') }}" href="{{ route('parceiros') }}">
            <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-users text-lg opacity-10" aria-hidden="true"></i>
              </div>
          <span class="nav-link-text ms-1">Parceiros</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('noticias') ? 'active' : '') }}" href="{{ route('noticias') }}">
            <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-newspaper-o text-lg opacity-10" aria-hidden="true"></i>
              </div>
          <span class="nav-link-text ms-1">Notícias</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('produtos') ? 'active' : '') }}" href="{{ route('produtos') }}">
            <div class="icon icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-shopping-bag text-lg opacity-10" aria-hidden="true"></i>
              </div>
          <span class="nav-link-text ms-1">Produtos</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidenav-footer mx-3 ">
    <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
      <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpeg')"></div>
      <div class="card-body text-start p-3 w-100">
        <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
          <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
        </div>
        <div class="docs-info">
          <h6 class="text-white up mb-0">Precisa de ajuda?</h6>
          <p class="text-xs font-weight-bold">Entre em contato com o suporte!</p>
          <a href="https://wa.me/5519991415811?text=Ol%C3%A1%2C+vim+pelo+sistema+feito+pela+Eazy+e+gostaria+de+tirar+uma+d%C3%BAvida%21" target="_blank" class="btn btn-white btn-sm w-100 mb-0">Clique aqui</a>
        </div>
      </div>
    </div>
  </div>
</aside>
