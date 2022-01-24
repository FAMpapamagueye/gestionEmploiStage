<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('images/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->prenom }} {{ auth()->user()->nom }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('accueil') }}" class="nav-link  ">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Accueil
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link {{ setMenuActive('dashboard') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Tableau de bord
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('departements.index') }}" class="nav-link {{ setMenuActive('departements.index') }}">
                    <i class="nav-icon far fa-circle text-success"></i>
                    <p>Departement</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('filieres.index') }}" class="nav-link {{ setMenuActive('filieres.index') }}">
                    <i class="nav-icon far fa-circle text-success"></i>
                    <p>Filiere</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('entreprises.index') }}" class="nav-link {{ setMenuActive('entreprises.index') }}">
                    <i class="nav-icon far fa-circle text-success"></i>
                    <p>Entrepise</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('promos.index') }}" class="nav-link {{ setMenuActive('promos.index') }}">
                    <i class="nav-icon far fa-circle text-success"></i>
                    <p>Promotion</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('stages.index') }}" class="nav-link {{ setMenuActive('stages.index') }}">
                    <i class="nav-icon far fa-circle text-success"></i>
                    <p>Stages</p>
                </a>
            </li>
            <li class="nav-item">

                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                    <div class="nav-link">
                        <input type="submit" class="form-control" value="Logout">
                    </div>
                </form>

            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
