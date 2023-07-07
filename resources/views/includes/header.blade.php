<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">

      <a href="{{ route('home') }}" class="navbar-brand">
        {{ __("LARAVEL") }}
      </a>

      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

            <li class="nav-item">
              <a href="{{ route("home") }}" class="nav-link {{ Route::is('home') ? "active" : '' }}" aria-current="page">
                  {{ __('Главная')}}
              </a>
            </li>
{{-- 
            <li class="nav-item">
              <a href="{{ route("blog") }}" class="nav-link {{ Route::is('blog*') ? "active" : '' }}" aria-current="page">
                {{ __('Блог')}}
              </a>
            </li> --}}

        </ul>

        @guest
        <ul class="navbar-nav ms-auto mb-2 mb-md-0">

            <li class="nav-item">
              <a href="{{ route("login") }}" class="nav-link {{ Route::is('login') ? "active" : '' }}" aria-current="page">
                {{ __('Вход')}}
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route("register") }}" class="nav-link {{ Route::is('register') ? "active" : '' }}" aria-current="page">
                {{ __('Регистрация')}}
              </a>
            </li>

        </ul>
        @endguest
      
        @auth
        <ul class="navbar-nav ms-auto mb-2 mb-md-0">

            <li class="nav-item">
                <a class="dropdown-item" href="{{ route("user.profile.show", Auth::user()->id) }}" class="nav-link {{ Route::is('profile') ? "active" : '' }}" aria-current="page">
                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} 
                </a>
            </li>

            <li class="nav-item ms-3">
                <form class="dropdown-item" method="POST" action="{{ route('login.destroy') }}">
                    @csrf
                    <a class="dropdown-item" href="{{ route("login.destroy") }}" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link" aria-current="page">
                        {{ __('Выйти') }}
                    </a>
                </form>
            </li>

        </ul>
        @endauth

    </div>

</nav>