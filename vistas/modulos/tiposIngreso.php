  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrar Tipos de Ingresos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Administrar Tipos de Ingresos</li>
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


          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AgregarIngreso">
            Agregar ingreso
          </button>

        </div>
      </div>

      <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">
        
          <thead>
            <tr>

              <th style="width: 10px;" >#</th>
              <th>Tipos de ingreso</th>
              <th>Acciones</th>


            </tr>

          </thead>

          <tbody>

          <?php

          $item = null;
          $valor = null;

            $tiposIngresos = ControladorIngresos::ctrMostrarTiposingresos($item, $valor);

            foreach ($tiposIngresos as $key => $value) {
              
              echo '<tr>

              <td>'.($key+1).'</td>

              <td>'.$value["ingreso"].'</td>

              <td>

                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>

                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

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

  <div class="modal fade bd-example-modal-lg" tabindex="-1" id="AgregarIngreso" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

      <div class="modal-content">

        <form role="form" action="#" method="POST">

          <!-- CABEZA DEL MODAL -->

          <div class="modal-header" style="background:#20c997; color:white">

            <h5 class="modal-title" id="exampleModalLabel">Agregar Ingreso</h5>

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
                    <label for="ingreso">Tipo de ingreso</label>
                    <input type="text" class="form-control" name="nuevoIngreso" id="ingreso" placeholder="Tipo de ingreso" required="">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->


            </div>
          </div>

          <!-- PIE DEL MODAL -->

          <div class="modal-footer justify-content-center">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar Ingreso</button>

          </div>

          <?php

            $crearIngreso = new ControladorIngresos();
            $crearIngreso -> ctrCrearIngreso();

          ?>
          
        </form>

      </div>
    </div>
  </div>