<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
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
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item menu-open " >
            <i class="nav-icon far fa-circle text-success"></i>
            <a href="{{route('departements.index') }}" class="btn btn-outline-none" style="hover:red">
              <p>
                Departement
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <i class="nav-icon far fa-circle text-success"></i>
            <a href="{{ route('filieres.index') }}" class="btn btn-outline-none">
              <p>
                Filiere
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <i class="nav-icon far fa-circle text-success"></i>
            <a href="{{ route('entreprises.index') }}" class="btn btn-outline-none">
             <p>
                Entrepise
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <i class="nav-icon far fa-circle text-success"></i>
            <a href="{{ route('promos.index') }}" class="btn btn-outline-none">
             <p>
                Promotion
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <i class="nav-icon far fa-circle text-success"></i>
            <a href="{{ route('stages.index') }}" class="btn btn-outline-none">
             <p>
                Stages
              </p>
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
