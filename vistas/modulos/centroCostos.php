  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrar Centros de  Costo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Administrar Centros de  Costo</li>
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


          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AgregarCeco">
            Agregar Centro de costo
          </button>

        </div>
      </div>

      <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">
        
          <thead>
            <tr>

              <th style="width: 10px;" >#</th>
              <th>Codigo</th>
              <th>Nombre del Centro de Costo</th>
              <th>Ingreso al sistema</th>
              <th>Acciones</th>


            </tr>

          </thead>

          <tbody>

          <?php

            $item = null;
            $valor = null;

            $centros = ControladorCentros::ctrMostrarCentros($item, $valor);

            foreach ($centros as $key => $value) {
              
              echo
               '<tr>

                <td>'.($key+1).'</td>

                <td>'.$value["codigo"].'</td>

                <td>'.$value["nombre"].'</td>

                <td>'.$value["fecha_ceco"].'</td>

                <td>

                  <div class="btn-group">

                    <button class="btn btn-warning btnEditarCentro" data-toggle="modal" data-target="#modalEditarCentro" idCentro="'.$value["id"].'"><i class="fas fa-pencil-alt"></i></button>

                    <button class="btn btn-danger btnEliminarCentro" idCentro="'.$value["id"].'"><i class="fa fa-times"></i></button>

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

  <!-- MODAL AGREGAR CENTROS DE COSTO -->

  <div class="modal fade bd-example-modal-lg" tabindex="-1" id="AgregarCeco" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">

        <form role="form" action="#" method="POST">

          <!-- CABEZA DEL MODAL -->

          <div class="modal-header" style="background:#20c997; color:white">

            <h5 class="modal-title" id="exampleModalLabel">Agregar Centro de costo</h5>

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
                    <label for="codigo">Codigo Ceco</label>
                    <input type="number" class="form-control" name="nuevoCentro" id="nuevoCentro" placeholder="Ingresar Codigo Centro de Costo" required="">
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="nombre">Nombre Ceco</label>
                    <input type="text" class="form-control" name="nuevoNombreCentro" id="nuevoNombreCentro" placeholder="Ingresar el nombre del Centro de Costo" required="">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->


            </div>
          </div>

          <!-- PIE DEL MODAL -->

          <div class="modal-footer justify-content-center">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar Centro Costo</button>

          </div>
        </form>

        <?php

          $crearCentro = new ControladorCentros();
          $crearCentro -> ctrCrearCentro();

        ?>

      </div>
    </div>
  </div>

  <!-- MODAL EDITAR CENTROS DE COSTO -->

  <div class="modal fade bd-example-modal-lg" tabindex="-1" id="modalEditarCentro" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">

        <form role="form" action="#" method="POST">

          <!-- CABEZA DEL MODAL -->

          <div class="modal-header" style="background:#20c997; color:white">

            <h5 class="modal-title" id="exampleModalLabel">Editar Centro de costo</h5>

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
                    <label for="codigo">Codigo Ceco</label>
                    <input type="number" class="form-control" name="editarCentro" id="editarCentro" required="">
                    <input type="hidden" id="idCentro" name="idCentro">
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="nombre">Nombre Ceco</label>
                    <input type="text" class="form-control" name="editarNombreCentro" id="editarNombreCentro" required="">
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
        </form>

        <?php

          $editarCentro = new ControladorCentros();
          $editarCentro -> ctrEditarCentro();

        ?>
        
      </div>
    </div>
  </div>

  <?php

    $eliminarCentro = new ControladorCentros();
    $eliminarCentro -> ctrEliminarCentro();

  ?>