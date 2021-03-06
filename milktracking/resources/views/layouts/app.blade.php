<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="app">
      @foreach (['danger', 'success'] as $key)
       @if(Session::has($key))
          <p id="alert" class="alert alert-{{ $key }}" display:none>{{ Session::get($key) }}</p>
          <script type='text/javascript'> setTimeout(function(){ document.getElementById("alert").style.display = 'none'; }, 3000);
          </script>
       @endif
      @endforeach
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if($isLogin)
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ $userName }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <?php $role = Session::get('role'); ?>
                                @if($role == 'admin')
                                  <a class="dropdown-item" href="{{ route('register') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('register-form').submit();">
                                      {{ __('Thêm nhân viên') }}
                                  </a>
                                @endif
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Thoát') }}
                                  </a>
                                  <form id="register-form" action="{{ route('register') }}" method="get" style="display: none;">
                                      @csrf
                                  </form>
                                  <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>

                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
          @yield('content')
        </main>
    </div>
</body>
</html>
