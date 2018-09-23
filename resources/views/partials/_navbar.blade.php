<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="{{ asset('img/logoElixiaSansFondReduit.png') }}" alt="">
          {{ config('app.name', 'Elixia') }}
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#patern1">À Propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#patern2">Nos Soirées</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#choices">La Carte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#privatisation">Privatisation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#location">Infos Pratiques</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">L'Équipe</a>
            </li>

            @guest
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                  Connexion
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item dp-login" href="{{ route('login') }}">{{ __('Se Connecter') }}</a>
                  <a class="dropdown-item dp-login" href="{{ route('register') }}">{{ __("S'enregistrer") }}</a>
                </div>
              </li>
            @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 {{ Auth::user()->first_name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @if(Auth::user()->admin == true)
                  <a class="dropdown-item" href="{{ route('dashboard') }}">{{ __("Dashboard") }}</a>
                  @endif

                  <a class="dropdown-item" href="{{ route('users.show', Auth::user()->id) }}">{{ __("Profil") }}</a>
                  <hr>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                    {{ __('Déconnexion') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
            @endguest
          </ul>
        </div>
      </div>
</nav>