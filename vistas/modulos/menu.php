<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="inicio" class="brand-link">
      <img src="vistas/dist/img/logo3.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">VITALIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="vistas/img/usuarios/user5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Fabian Barrera</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="usuarios" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
              </p>
            </a>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
              <p>
                Solicitudes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="crear-solicitud" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Nueva solicitud</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="administrarsolicitudes" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                  <p>Ver solicitudes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="tiposIngreso" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
              <p>
                Tipos de ingresos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="centroCostos" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Centro de costos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="horarios" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Horarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="atributosCargo" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Atributos del cargo
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="reportes" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Reportes
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="configuraciones" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
              <p>
                Configuraciones Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="configurarCorreo" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                  <p>Configuración correo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="datosFormato" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                  <p>Datos formato oficial</p>
                </a>
              </li>
            </ul>
          </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>