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

        <table id="example1" class="table table-bordered table-striped">
        
          <thead>
            <tr>

              <th style="width: 10px;" >#</th>
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

  <div class="modal fade bd-example-modal-lg" tabindex="-1" id="AgregarUsuario" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">

        <form role="form" action="#" method="POST" enctype="multipart/form-data">

          <!-- CABEZA DEL MODAL -->

          <div class="modal-header" style="background:#20c997; color:white">

            <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>

          <!-- CUERPO DEL MODAL -->

          <div class="modal-body">
            <div class="box-body">

              <div class="card-body">

                <div class="row">
                  <div class="form-group col-md-6 ">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" class="form-control" name="nuevoNombre" id="nombre" placeholder="Fabian Enrique Barrera Maldonado" required="">
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="correo">Email</label>
                    <input type="email" class="form-control" name="nuevoCorreo" id="correo" placeholder="pasante.ti@vitalis.com.co" required="">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6 ">
                    <label for="usuario">Usuario SAP</label>
                    <input type="number" class="form-control" name="nuevoUsuario" id="usuario" placeholder="UsuarioSap" required="">
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="contraseña">Clave</label>
                    <input type="password" class="form-control" name="nuevoPassword" id="contraseña" placeholder="Alfa numerica min 8 caracteres" required="">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6 ">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" name="nuevoTelefono" id="telefono" placeholder="3007614919" required="">
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="area">Área</label>
                    <select class="form-control" name="nuevaArea" id="area" required="">
                      <option>Seleccione el área a la que pertenece</option>
                      <option value="1">Administrativa y Financiera</option>
                      <option value="2">Comercial</option>
                      <option value="2">Operaciones</option>
                      <option value="3">Calidad</option>
                      <option value="4">Control</option>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6 ">
                    <label for="perfil">Perfil</label>
                    <select class="form-control" name="nuevoPerfil" id="perfil" required="">
                      <option>Seleccione un Rol</option>
                      <option value="1">Administrador</option>
                      <option value="2">Gerente</option>
                      <option value="2">Dirección Financiera</option>
                      <option value="3">Jefe de Area</option>
                      <option value="4">Desarrollo Humano</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="estado">Estatus</label>
                    <select class="form-control" name="nuevoEstado" id="estado" required="">
                      <option>Activar Usuario</option>
                      <option value="0">Desactivar</option>
                      <option value="1">Activar</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6 ">
                    <label for="firma">Firma Digital </label><br>
                    <input type="file" name="firma" id="nuevaFirma" required="">
                    <small>Peso maximo de la firma 200 MB</small>
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="foto">Foto </label><br>
                    <input type="file" name="foto" id="nuevaFoto" required="">
                    <small>Peso maximo de la foto 200 MB</small>
                    <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->


            </div>
          </div>

          <!-- PIE DEL MODAL -->

          <div class="modal-footer justify-content-center">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>

          </div>
        </form>

      </div>
    </div>
  </div>