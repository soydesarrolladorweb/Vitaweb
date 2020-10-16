  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrar Tipos de Horario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Administrar Tipos de Horario</li>
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


          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AgregarHorario">
            Agregar horario
          </button>

        </div>
      </div>

      <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">
        
          <thead>
            <tr>

              <th style="width: 10px;" >#</th>
              <th>Tipos de horario</th>
              <th>Acciones</th>


            </tr>

          </thead>

          <tbody>

          <?php

          $item = null;
          $valor = null;

            $tiposHorario = ControladorHorarios::ctrMostrarHorarios($item, $valor);

            foreach ($tiposHorario as $key => $value) {
              
              echo
            '<tr>

                <td>'.($key+1).'</td>

                <td>'.$value["horario"].'</td>

                <td>

                  <div class="btn-group">

                    <button class="btn btn-warning btnEditarhorario"idTipohorario="'.$value["id"].'" data-toggle="modal"data-target="#modalEditarHorario"><i class="fas fa-pencil-alt"></i></button>
                    

                    <button class="btn btn-danger btnEliminarHorario"idTipohorario="'.$value["id"].'"><i class="fa fa-times"></i></button>

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

  <!-- MODAL AGREGAR TIPO DE INGRESO-->

  <div class="modal fade bd-example-modal-lg" tabindex="-1" id="AgregarHorario" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">

        <form role="form" action="#" method="POST">

          <!-- CABEZA DEL MODAL -->

          <div class="modal-header" style="background:#20c997; color:white">

            <h5 class="modal-title" id="exampleModalLabel">Agregar Horario</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>

          <!-- CUERPO DEL MODAL -->

          <div class="modal-body">
            <div class="box-body">

              <div class="card-body">

                <div class="row">
                  <div class="form-group col-md-12 ">
                    <label for="horario">Tipo de horario</label>
                    <input type="text" class="form-control" name="nuevoHorario" id="horario" placeholder="Tipo de horario" required="">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->


            </div>
          </div>

          <!-- PIE DEL MODAL -->

          <div class="modal-footer justify-content-center">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar Horario</button>

          </div>

          <?php

            $crearHorario = new ControladorHorarios();
            $crearHorario -> ctrCrearHorario();

          ?>
          
        </form>

      </div>
    </div>
  </div>

  <!-- MODAL EDITAR TIPO DE HORARIO-->

  <div class="modal fade bd-example-modal-lg" tabindex="-1" id="modalEditarHorario" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">

        <form role="form" action="#" method="POST">

          <!-- CABEZA DEL MODAL -->

          <div class="modal-header" style="background:#20c997; color:white">

            <h5 class="modal-title" id="exampleModalLabel">Editar Tipo de Horario</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>

          <!-- CUERPO DEL MODAL -->

          <div class="modal-body">
            <div class="box-body">

              <div class="card-body">

                <div class="row">
                  <div class="form-group col-md-12 ">
                    <label for="horario">Tipo de horario</label>
                    <input type="text" class="form-control" name="editarHorario" id="editarHorario" required="">
                    <input type="hidden" name="idTipohorario" id="idTipohorario" required="">
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

            $editarHorario = new ControladorHorarios();
            $editarHorario -> ctrEditarHorario();

          ?>
          
        </form>

      </div>
    </div>
  </div>

  <?php

    $borrarHorario = new ControladorHorarios();
    $borrarHorario -> ctrBorrarHorario();

  ?>