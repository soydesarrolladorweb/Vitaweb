  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrar usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Administrar usuarios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">

          
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AgregarUsuario">
          Agregar usuario
          </button>
          
        </div>
      </div>

      <div class="card-body">

        <table class="table table-bordered table-striped">
          <thead>
            <tr>

              <th>#</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Foto</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Ultimo login</th>
              <th>Acciones</th>


            </tr>

          </thead>

          <tbody>

          <tr>
            <td>1</td>
            <td>Fabian Barrera</td>
            <td>20782</td>
            <td><img src="vistas/dist/img/avatar5.png" class="img-thumbnail" width="40px"></td>
            <td>Administrador</td>
            <td><button class="btn btn-success btn-xs">Activado</button></td>
            <td>2020-14-09 15:05:32</td>
            <td>

            <div class="btn-group">

            <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>

            <button class="btn btn-danger"><i class="fa fa-times"></i></button>

            </div>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>Magreth Angulo</td>
            <td>20222</td>
            <td><img src="vistas/dist/img/avatar2.png" class="img-thumbnail" width="40px"></td>
            <td>Jefe de área TI</td>
            <td><button class="btn btn-danger btn-xs">Desactivado</button></td>
            <td>2020-14-09 16:47:29</td>
            <td>

            <div class="btn-group">

            <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>

            <button class="btn btn-danger"><i class="fa fa-times"></i></button>

            </div>
            </td>
          </tr>
          </tbody>

        </table>

      </div>
   </div>
  </section>
  </div>

  <!-- MODAL Agregar Usuario -->

  <!-- Modal -->
  <div class="modal fade bd-example-modal-xl" tabindex="-1" id="AgregarUsuario" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  
<div class="modal-dialog" role="document">
    
  <div class="modal-content">

      <div class="modal-header" style="background:#20c997; color:white">

        <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>

      <div class="modal-body">
      <div class="box-body">
      <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon"><i class="far fa-user"></i></span>
        <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre completo" required>
      </div>

      </div>

      </div>
      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>

      </div>
    </div>
  </div>
</div>
