<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image')}}">
        </div>
        <div class="info">
          <a href=" {{ Auth::user()->name }}" class="d-block"> {{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="home" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </ul>
          </li>
          
          <li class="nav-item">
            <a href="kategori" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Kategori
                
              </p>
            </a>
            <ul class="nav nav-treeview">
           
            </ul>
          </li>
         <li class="nav-item">
             <a href="bahan" class="nav-link">
                                           
              <i class="nav-icon fa fa-th"></i>
              <p>
                Bahan
                <span class="right badge badge-danger">:(</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="jenis" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Jenis

</p>
              </a>
            
         
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Product
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="produk" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Produk</p>
                </a>
       
          
            </ul>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
               <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              <i class="nav-icon fa fa-circle-o text-danger"></i>
Logout            </a>
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>