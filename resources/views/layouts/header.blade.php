<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="/">Home</a>

    <!--  Right Side Of Navbar  -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
      @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </li>
      @else
            <li class="nav-item dropdown">
                @can('admin-only', Auth::user())
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/admin">Admin</a>
                @endcan
            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle"
              href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest
      <li class="nav-item">
        <a class="nav-link" href="/articles">Articles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users">Users</a>
      </li>
    </ul>
  </nav>
