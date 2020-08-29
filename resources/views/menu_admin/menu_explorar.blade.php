
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="active treeview menu-open">
         <a href="#" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
               Explorar
               <i class="right fas fa-angle-left"></i>
            </p>
         </a>
         <ul class="nav nav-treeview">
            <li  class="nav-item">
               <a href="{{ route('commerces.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-store-alt"></i>
                  <p>
                     Tiendas
                     <span class="right badge badge-danger">60</span>
                     <!--Un usuario puede ver informacion (estadisticas) de 
                  otras tiendas de su compania,
              pero solo puede administrar datos de su tienda -->
                  </p>
               </a>
            </li>
            <li  class="nav-item">
               <a href="{{ route('products.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-barcode"></i>
                  <p>
                     Productos
                     <span class="right badge badge-danger">968</span>
                  </p>
               </a>
            </li>
            <li  class="nav-item">
               <a href="{{ route('promotions.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-cart-arrow-down"></i>
                  <p>
                     Promociones
                     <span class="right badge badge-danger">968</span>
                  </p>
               </a>
            </li>
            <li  class="nav-item">
               <a href="{{ route('events.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-birthday-cake"></i>
                  <p>
                     Eventos
                     <span class="right badge badge-danger">78</span>
                  </p>
               </a>
            </li>
         </ul>
      </li>
   </ul>
      </nav>
   

