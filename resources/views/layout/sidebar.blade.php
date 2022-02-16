 <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{session()->get('user.name') ?? ''}}</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('home.index')}}" class="nav-link @if(current(explode('.', Route::currentRouteName())) == 'home') active @endif">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('trackings.index')}}" class="nav-link @if(current(explode('.', Route::currentRouteName())) == 'trackings') active @endif">
              <i class="nav-icon fas fa-wifi"></i>
              <p>
                Trackings
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sair
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf @method('delete')</form>