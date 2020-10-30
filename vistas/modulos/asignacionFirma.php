  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Asignación de firmas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Asignación de firmas</li>
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


          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AgregarFirma">
            Agregar firma
          </button>

        </div>
      </div>

      <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">
        
          <thead>

         
            <tr>

              <th style="width: 10px;" >#</th>
              <th>Imagen</th>
              <th>Usuario</th>
              <th>Agregado</th>
              <th>Acciones</th>


            </tr>

          </thead>

          <tbody>

          <?php
            $item = null;
            $valor = null;

            $firmas = ControladorFirmas::ctrMostrarFirmas($item, $valor);

            foreach ($firmas as $key => $value) {
              
              echo '<tr>
                      <td>'.($key+1).'</td>';

                      if ($value["imagen"] != ""){

                        echo '<td><img src="'.$value["imagen"].'" class="img-thumbnail" width="40px"></td>';
        
                      }else {
                        
                        echo'<td><img src="vistas/img/firmas/default/firma2.png" class="img-thumbnail" width="40px"></td>';
        
                      }

                      $item = "iduser";
                      $valor = $value ["id_usuario"];

                      $usuario = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                      echo '<td>'.$value["id_usuario"].'</td>
                      <td>'.$value["fecha"].'</td>
                      <td>

                        <div class="btn-group">

                          <button class="btn btn-warning btnEditarFirma"idFirma="'.$value ["id"].'" data-toggle="modal" data-target="#modalEditarFirma"><i class="fas fa-pencil-alt"></i></button>

                          <button class="btn btn-danger btnEliminarFirma"idFirma="'.$value ["id"].'"imagen="'.$value["imagen"].'"id_usuario="'.$value["id_usuario"].'"><i class="fa fa-times"></i></button>

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

  <!-- MODAL AGREGAR FIRMA -->

  <div class="modal fade bd-example-modal-lg" tabindex="-1" id="AgregarFirma" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">

        <form role="form" action="#" method="POST" enctype="multipart/form-data">

          <!-- CABEZA DEL MODAL -->

          <div class="modal-header" style="background:#20c997; color:white">

            <h5 class="modal-title" id="exampleModalLabel">Agregar firma</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>

          <!-- CUERPO DEL MODAL -->

          <div class="modal-body">
            <div class="box-body">

              <div class="card-body">
              
                <!-- ENTRADA PARA SELECCIONAR EL USUARIO -->
                <div class="row">
                <div class="form-group col-md-6 ">
                    <label for="newUser">Usuario</label>
                    <select class="form-control" name="newUser" id="newUser" required="">
                      <option value="">Seleccione el usuario</option>

                      <?php
                      $item = null;
                      $valor = null;

                      $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                      foreach ($usuarios as $key => $value) {

                        echo '<option value="'.$value["usuario"].'">'.$value["usuario"].'</option>';
                      }

                      ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="imagen">Firma</label><br>
                    <input type="file" class="nuevaImagen" name="nuevaImagen" id="nuevaFoto">
                    <small>Peso maximo de la firma 2MB</small>
                    <img src="vistas/img/firmas/default/firma2.png" class="img-thumbnail visualizar" width="100px">
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
              

            </div>
          </div>

          <!-- PIE DEL MODAL -->

          <div class="modal-footer justify-content-center">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar firma</button>

          </div>
        </form>

        <?php

          $crearFirma = new ControladorFirmas();
          $crearFirma -> ctrCrearFirma();

        ?>

      </div>
    </div>
  </div>

  <!-- MODAL EDITAR FIRMA -->

  <div class="modal fade bd-example-modal-lg" tabindex="-1" id="modalEditarFirma" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">

        <form role="form" method="post" enctype="multipart/form-data">

          <!-- CABEZA DEL MODAL -->

          <div class="modal-header" style="background:#20c997; color:white">

            <h5 class="modal-title" id="exampleModalLabel">Editar firma</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>

          <!-- CUERPO DEL MODAL -->

          <div class="modal-body">
            <div class="box-body">

              <div class="card-body">
              
                <!-- ENTRADA PARA SELECCIONAR EL USUARIO -->
                <div class="row">
                <div class="form-group col-md-6 ">
                    <label for="id_usuario">Usuario SAP</label>
                    <input type="text" class="form-control" name="editarUser" id="editarUser" value="" readonly>
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="imagen">Firma</label><br>
                    <input type="file" class="nuevaImagen" name="editarImagen" id="editarImagen">
                    <small>Peso maximo de la firma 2MB</small>
                    <img src="vistas/img/firmas/default/firma2.png" class="img-thumbnail visualizar" width="100px">
                    <input type="hidden" name="imagenActual" id="imagenActual">
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
              

            </div>
          </div>

          <!-- PIE DEL MODAL -->

          <div class="modal-footer justify-content-center">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>

          </div>

          <?php

          $editarFirma = new ControladorFirmas();
          $editarFirma -> ctrEditarFirma();

        ?>

        </form>

      </div>
    </div>
  </div>

<?php

  $eliminarFirma = new ControladorFirmas();
  $eliminarFirma -> ctrEliminarFirma();

?>