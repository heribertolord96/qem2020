<!-- Main Sidebar Container -->
<header class="main-header">
    @include("theme/$theme/nav")
</header>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!--Inicio-nav-->

    <!--fin-nav-->
    <!-- Brand Logo -->
    <a href="/main" class="brand-link">
        <img src="{{ asset('assets/lte/img/quickemart (2).png') }}" alt="QEM" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light danger">Quick-E-Mart</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            @guest
                <a href="{{ route('login') }}">Login</a>
                </br>
                <a href="{{ route('register') }}">Register</a>
                <div class="image">
                    <img src="https://jackmonarch.com/wp-content/uploads/2019/03/BELLA-ARAUJO-2.jpg"
                        class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <span class="right badge badge-success"> Hola {{ Auth::user()->name ?? 'Invitado' }} </span>
                    <!--session()->get('user_name')-->
                    </br>
                    <span class="right badge badge-info"> {{ session()->get('role_name') }} </span>
                </div>
            </div>
        @else
            <div class="image">
                <img src="https://jackmonarch.com/wp-content/uploads/2019/03/BELLA-ARAUJO-2.jpg"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <span class="right badge badge-success"> Hola {{ Auth::user()->name ?? 'Invitado' }} </span>
                <!--session()->get('user_name')-->
                </br>
                <span class="right badge badge-info"> {{ session()->get('role_name') }} </span>
            </div>
            <div class="pull-right">
                <a href="{{ route('logout') }}" class="nav-icon fas fa-sign-out-alt" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Exit</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include("menu_admin.menu_explorar")
            </ul>
        </nav>
    @endguest
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Inicio
                        <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex"></div>
    <!--menuexplorar></menuexplorar-->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @include("menu_admin.menu_explorar")
      </ul>
  </nav>
    <!--si->el usuario es....-->
    <!-- Sidebar Menu -->
    <!-- /.sidebar -->
</aside>
