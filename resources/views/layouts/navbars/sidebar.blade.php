<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://reyfals.com.co/" class="simple-text logo-normal">
      <img src="{{ asset('img') }}/logo.png" width="200px" alt=""/>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
          <p>{{ __('Inicio') }}</p>
        </a>
      </li>

      <!-- Usuario -->
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="fa fa-user"></i>
          <p>{{ __('Usuario') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Usuario -->

      <!-- Paciente -->
      <li class="nav-item {{ ($activePage == 'paciente' || $activePage == 'create') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#paciente" aria-expanded="true">
          <i class="fa fa-user"></i>
          <p>{{ __('Pacientes') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="paciente">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'pacientes.create' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('pacientes.create') }}">
                <span class="sidebar-mini"> CP </span>
                <span class="sidebar-normal">{{ __('Crear Paciente') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'pacientes/index' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('pacientes.index') }}">
                <span class="sidebar-mini"> P </span>
                <span class="sidebar-normal">{{ __(' Listar Pacientes') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> EP </span>
                <span class="sidebar-normal"> {{ __('Editar Paciente') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Paciente -->

      <!-- Domicilios -->
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#domicilios" aria-expanded="true">
          <i class="fa fa-truck"></i>
          <p>{{ __('Domicilios') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="domicilios">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Domicilios -->

      <!-- Tracking -->
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#tracking" aria-expanded="true">
          <i class="fa fa-line-chart"></i>
          <p>{{ __('Tracking') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="tracking">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Tracking -->

      <!-- Reporte Tracking -->
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#reporteTracking" aria-expanded="true">
          <i class="fa fa-file"></i>
          <p>{{ __('Reporte Tracking') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="reporteTracking">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Reporte Tracking -->

      <!-- Resultados -->
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#resultados" aria-expanded="true">
          <i class="fa fa-flask"></i>
          <p>{{ __('Resultados') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="resultados">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('resultados.index') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Entrega de Resultados') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Resultados -->

      <!-- Facturacion -->
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#facturacion" aria-expanded="true">
          <i class="fa fa-ticket"></i>
          <p>{{ __('Facturación') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="facturacion">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Facturacion -->

      <!-- Interfaces -->
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#interfaces" aria-expanded="true">
          <i class="fa fa-desktop"></i>
          <p>{{ __('Interfaces') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="interfaces">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Interfaces -->

      <!-- Mercadeo -->
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#mercadeo" aria-expanded="true">
          <i class="fa fa-shopping-bag"></i>
          <p>{{ __('Mercadeo') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="mercadeo">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Mercadeo -->
    </ul>
  </div>
</div>