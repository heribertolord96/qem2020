
@section('menu_admin')  
   <ul class="sidebar-menu tree " data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
      <li @click="menu=8" class="nav-item">
         <a href="/" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
               Inicio
               <span class="right badge badge-danger"></span>
            </p>
         </a>
      </li>
   </ul>
<!-- /.sidebar-menu -->    
@endsection