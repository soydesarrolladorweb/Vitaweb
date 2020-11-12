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
              <th>Ciudad</th>
              <th>Fecha</th>
              <th>Solicitante</th>
              <th>Tipo de ingreso</th>
              <th>Area</th>
              <th>Cargo</th>
              <th>Estatus</th>
              <th>Acciones</th>


            </tr>

          </thead>

          <tbody>

            <tr>
              <td>1</td>
              <td>Bogotá</td>
              <td>2020-14-09 15:05:32</td>
              <td>Javier Perez</td>
              <td>Nuevo</td>
              <td>Comercial</td>
              <td>Vendedor</td>
              <td><button class="btn btn-primary btn-xs">SOLICITADO</button></td>
              <td>

                <div class="btn-group">

                  <button class="btn btn-info"><i class="fas fa-eye"></i></button>

                  <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>

                </div>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td>Medellin</td>
              <td>2020-13-10 10:49:54</td>
              <td>Santiago Torres</td>
              <td>Reingreso</td>
              <td>Administrativa</td>
              <td>Asistente comercial</td>
              <td><button class="btn btn-primary btn-xs">SOLICITADO</button></td>
              <td>

                <div class="btn-group">

                  <button class="btn btn-info"><i class="fas fa-eye"></i></button>

                  <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>

                </div>
              </td>
            </tr>


            <tr>
              <td>3</td>
              <td>Bogotá</td>
              <td>2020-03-11 14:27:41</td>
              <td>Maria Pruebas</td>
              <td>Nuevo</td>
              <td>Operaciones</td>
              <td>Asistente</td>
              <td><button class="btn btn-success btn-xs">APROBADO</button></td>
              <td>

                <div class="btn-group">

                  <button class="btn btn-info"><i class="fas fa-eye"></i></button>

                  <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>

                </div>
              </td>
            </tr>

          </tbody>

        </table>

      </div>
  </div>
  </section>
  </div>
