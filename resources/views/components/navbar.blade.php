<nav class="navbar navbar-expand-lg bg-body-tertiary height-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Presto.it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        {{-- ! Sempre visibile  --}}
        {{-- LINK PER HOMEPAGE --}}
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">{{ __('ui.home') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('article.index')}}">{{ __('ui.all_articles') }}</a>
        </li>

        {{-- Categorie --}}
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ __('ui.category') }}</a>
          <ul class="dropdown-menu">
            @foreach ($categories as $category)
            <li>
              <a  class="dropdown-item text-capitalize" href="{{ route('byCategory', ['category'=>$category]) }}" >{{$category->name}}</a>
            </li>
            @if (!$loop->last)
            <hr class="dropdown-divider">
            @endif
            @endforeach
          </ul>
        </li>



        {{--! Visibile solo con accesso effettuato--}}
        
        @auth
        {{-- REVISORE --}}
        @if (Auth::user()->is_revisor)
        <li class="nav-item">
          <a class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25" href="{{ route('revisor.index') }}"> {{ __('ui.revisor_zone') }}
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ \App\Models\Article::toBeRevisedCount() }}

            </span>
          </a>
        </li>
          
        @endif

        <li class="nav-item dropdown">
          {{-- MESSAGGIO BENVENUTO --}}
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __('ui.hello') }},{{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('create.article') }}">crea</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            
            {{-- LOGOUT --}}
            <li>
              <a
              class="dropdown-item"
              href="#"
              onclick="event.preventDefault(); document.querySelector('#form-logout').submit()"
              >
              Logout
            </a>
            
          </li>
          <form 
          action="{{ route('logout') }}" 
          method="post" 
          class="d-none" 
          id="form-logout"
          >
          @csrf 
          
        </form>
      </ul>
    </li>
    
    {{--! Visibile se non hai effettuato l'accesso ma sparisce appena viene effettuato  --}}
    @else
    
    {{-- LINK PER LOGIN--}}
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{route('login')}}">Accedi</a>
      
    </li>
    
    
    {{-- LINK PER REGISTRARTI --}}
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="{{route('register')}}">Registrati</a>
    </li>   
    
    @endauth

    <form class="d-flex ms-auto" role="search" action="{{ route('article.search') }}" method="GET">
      <div class="input-group">
        <input type="search" name="query" class="form-control" placeholder="Search" aria-label="search">
        <button type="submit" class="input-group-text btn btn-outline-success" id="basic.addon2">Search</button>
      </div>
    </form>

    <x-_locale lang="it"/>
    <x-_locale lang="uk"/>
    <x-_locale lang="es"/>

    
  </ul>
</div>
</div>
</nav>