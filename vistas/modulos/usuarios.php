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

        <table id="example1" class="table table-bordered table-striped example1">
        
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


          <?php

          $item = null;
          $valor = null;

            $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

            foreach ($usuarios as $key => $value) {
            
              echo ' <tr>
              <td>'.($key+1).'</td>
              <td>'.$value["nombre"].'</td>
              <td>'.$value["usuario"].'</td>';

              if ($value["foto"] != ""){

                echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';

              }else {
                
                echo'<td><img src="vistas/dist/img/anonymous.png" class="img-thumbnail" width="40px"></td>';

              }


              echo '<td>'.$value["perfil"].'</td>';

                  if($value["estado"] != 0){

                    echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["iduser"].'" estadoUsuario="0">Activado</button></td>';

                  }else{

                    echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["iduser"].'" estadoUsuario="1">Desactivado</button></td>';

                  }             

                  echo '<td>'.$value["ultimologin"].'</td>
                  <td>

                <div class="btn-group">

                  <button class="btn btn-warning btnEditarUsuario"idUsuario="'.$value["iduser"].'"data-toggle="modal" data-target="#modalEditarUsuario"><i class="fas fa-pencil-alt"></i></button>

                  <button class="btn btn-danger btnEliminarUsuario"idUsuario="'.$value["iduser"].'"fotoUsuario="'.$value["foto"].'"usuario="'.$value["usuario"].'"><i class="fa fa-times"></i></button>

                </div>
              </td>
            </tr>';


            }

            

          ?>

            
          </tbody>

        </table>

      </div>
  </div>
  </section>
  </div>

  <!--=============================================
	MODAL AGREGAR USUARIOS
	============================================= -->

  <div class="modal fade bd-example-modal-lg" tabindex="-1" id="AgregarUsuario" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">

        <form role="form" method="post" enctype="multipart/form-data">

             <!--=============================================
	            CABEZA DEL MODAL
	            ============================================= -->

          <div class="modal-header" style="background:#20c997; color:white">

            <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>

             <!--=============================================
	            CUERPO DEL MODAL
	            ============================================= -->

          <div class="modal-body">
            <div class="box-body">

              <!--=============================================
	            INICIO DE CLASE CARD BODY
	            ============================================= -->

              <div class="card-body">

                <div class="row">
                  <div class="form-group col-md-6 ">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" class="form-control" name="nuevoNombre" id="nuevoNombre"  placeholder="Fabian Barrera Maldonado" required="">
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="correo">Email</label>
                    <input type="email" class="form-control" name="nuevoCorreo" id="nuevoCorreo" placeholder="correo@vitalis.com.co" required="">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6 ">
                    <label for="usuario">Usuario SAP</label>
                    <input type="text" class="form-control" name="nuevoUsuario" placeholder="UsuarioSap - Sin espacios" id="nuevoUsuario" required="">
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="password">Clave</label>
                    <input type="password" class="form-control" name="nuevoPassword" id="nuevoPassword" placeholder="Clave alfa numerica con min 8 caracteres" minlength="8" required="">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6 ">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" name="nuevoTelefono" id="telefono" placeholder="3007614919 - Sin espacios" required="">
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="area">Área</label>
                    <select class="form-control" name="nuevaArea" id="area" required="">
                      <option>Seleccione el área a la que pertenece</option>
                      <option value="Administrativa y Financiera">Administrativa y Financiera</option>
                      <option value="Comercial">Comercial</option>
                      <option value="Operaciones">Operaciones</option>
                      <option value="Calidad">Calidad</option>
                      <option value="Alta Dirección">Alta Dirección</option>
                      <option value="Desarrollo de Negocios">Desarrollo de Negocios</option>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6 ">
                    <label for="perfil">Perfil</label>
                    <select class="form-control" name="nuevoPerfil" id="nuevoPerfil" required="">
                      <option>Seleccione un Rol</option>
                      <option value="Administrador">Administrador</option>
                      <option value="Gerente">Gerente</option>
                      <option value="Dirección Financiera">Dirección Financiera</option>
                      <option value="Jefe de Area">Jefe de Area</option>
                      <option value="Desarrollo Humano">Desarrollo Humano</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="foto">Foto </label><br>
                    <input type="file" class="nuevaFoto"  name="nuevaFoto" id="nuevaFoto">
                    <small>Peso maximo de la foto 2MB</small>
                    <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
                  </div>
                </div>
              </div>
               <!--=============================================
	             CIERRE DE CLASE CARD BODY
	             ============================================= -->


            </div>
          </div>

          <!--=============================================
	        PIE DEL MODAL
	        ============================================= -->

          <div class="modal-footer justify-content-center">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>

          </div>

          <?php
          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();

          ?>

        </form>

      </div>
    </div>
  </div>



  <!--=============================================
	MODAL EDITAR USUARIOS
	============================================= -->

  <div class="modal fade bd-example-modal-lg" tabindex="-1" id="modalEditarUsuario" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">

        <form role="form" method="post" enctype="multipart/form-data">

         <!--=============================================
	       CABEZA DEL MODAL
	       ============================================= -->

          <div class="modal-header" style="background:#20c997; color:white">

            <h5 class="modal-title" id="exampleModalLabel">Editar usuario</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>

          <!--=============================================
	        CUERPO DEL MODAL
	        ============================================= -->

          <div class="modal-body">
            <div class="box-body">

              <div class="card-body">

                <div class="row">
                  <div class="form-group col-md-6 ">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" class="form-control" name="editarNombre" id="editarNombre"  value="" required="">
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="correo">Email</label>
                    <input type="email" class="form-control" name="editarCorreo" id="editarCorreo" value="" required="">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6 ">
                    <label for="usuario">Usuario SAP</label>
                    <input type="text" class="form-control" name="editarUsuario" id="editarUsuario" value="" readonly>
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="password">Clave</label>
                    <input type="password" class="form-control" name="editarPassword" id="editarPassword" placeholder="Clave alfa numerica con min 8 caracteres" minlength="8" required="">
                    <input type="hidden" id="passwordActual" name="passwordActual">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6 ">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" name="editarTelefono" id="editarTelefono" value="" required="">
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="area">Área</label>
                    <select class="form-control" name="editarArea"  required="">

                      <option value="" id="editarArea"></option>
                      <option value="Administrativa y Financiera">Administrativa y Financiera</option>
                      <option value="Comercial">Comercial</option>
                      <option value="Operaciones">Operaciones</option>
                      <option value="Calidad">Calidad</option>
                      <option value="Alta Dirección">Alta Dirección</option>
                      <option value="Desarrollo de Negocios">Desarrollo de Negocios</option>
                    </select>
                  </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6 ">
                      <label for="perfil">Perfil</label>
                      <select class="form-control" name="editarPerfil" required="">

                        <option value="" id="editarPerfil"></option>
                        <option value="Administrador">Administrador</option>
                        <option value="Gerente">Gerente</option>
                        <option value="Dirección Financiera">Dirección Financiera</option>
                        <option value="Jefe de Area">Jefe de Area</option>
                        <option value="Desarrollo Humano">Desarrollo Humano</option>
                      </select>
                    </div>
                  <div class="form-group col-md-6 ">
                    <label for="foto">Foto </label><br>
                    <input type="file" class="nuevaFoto"  name="editarFoto" id="editarFoto">
                    <small>Peso maximo de la foto 2MB</small>
                    <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
                    <input type="hidden" name="fotoActual" id="fotoActual">
                  </div>
                </div>
              </div>
              <!--=============================================
	             CIERRE DE CLASE CARD BODY
	            ============================================= -->


            </div>
          </div>

          <!--=============================================
	        PIE DEL MODAL
	        ============================================= -->

          <div class="modal-footer justify-content-center">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Modificar usuario</button>

          </div>

          <?php
          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario();

          ?>

        </form>

      </div>
    </div>
  </div>
  
  <?php
    $borrarUsuario = new ControladorUsuarios();
    $borrarUsuario -> ctrBorrarUsuario();

  ?>
  