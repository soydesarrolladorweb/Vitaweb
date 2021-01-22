  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrar solicitudes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Administrar solicitudes</li>
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
          <a href="crear-solicitud">
          <button type="button" class="btn btn-primary">
            Agregar solicitud
          </button>
          </a>
        </div>
      </div>

      <div class="card-body">

        <table id="example1" class="table table-bordered table-striped">
        
          <thead>
            <tr>

              <th style="width: 10px;" >#</th>
              <th>Codigo Solicitud</th>
              <th>Ciudad</th>
              <th>Fecha</th>
              <th>Solicitante</th>
              <th>Tipo de ingreso</th>
              <th>Cargo</th>
              <th>Motivo</th>
              <th>Estatus</th>
              <th>Acciones</th>


            </tr>

          </thead>

          <tbody>

            <?php

              $item = null;
              $valor = null;

              $respuesta = ControladorSolicitudes::ctrMostrarSolicitudes($item, $valor);

              foreach ($respuesta as $key => $value) {
                
                 echo '
                 <tr>
                 <td>'.($key+1).'</td>
                 <td>'.$value["codigo"].'</td>
                 <td>'.$value["ciudad"].'</td>
                 <td>'.$value["fecha"].'</td>';

                 $itemUsuario = "usuario";
                 $valorUsuario = $value["id_usuario"];

                 $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                 echo '<td>'.$respuestaUsuario["nombre"].'</td>

                 <td>'.$value["tipo_ingreso"].'</td>
                 <td>'.$value["cargo_solicitado"].'</td>
                 <td>'.$value["motivo"].'</td>
                 <td><button class="btn btn-primary btn-xs">SOLICITADO</button></td>
                 <td>
   
                   <div class="btn-group">
   
                     <button class="btn btn-info btnImprimirSolicitud" codigoFormulario="'.$value["codigo"].'">
                     
                      <i class="fas fa-eye"></i>
                     
                     </button>
   
                     <button class="btn btn-warning btnEditarSolicitud" idSolicitud="'.$value["id"].'"><i class="fas fa-pencil-alt"></i></button>

                     <button class="btn btn-danger btnEliminarSolicitud"idTiposolicitud="'.$value["id"].'"codigoUnico="'.$value["codigo"].'"><i class="fa fa-times"></i></button>
   
                   </div>
                 </td>
               </tr>

                 ';   

              }
            
            ?>
            

          </tbody>

        </table>

      </div>
  </div>
  </section>
  </div>

  <?php

    $borrarSolicitud = new ControladorSolicitudes();
    $borrarSolicitud -> ctrBorrarSolicitud();

  ?>
