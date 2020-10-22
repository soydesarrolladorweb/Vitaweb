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
              <th>Codigo</th>
              <th>Descripción</th>
              <th>Usuario</th>
              <th>Agregado</th>
              <th>Acciones</th>


            </tr>

          </thead>

          <tbody>

            <tr>
              <td>1</td>
              <td><img src="vistas/img/firmas/default/firma2.png" class="img-thumbnail" width="40px"></td>
              <td>101</td>
              <td>Firma Larga</td>
              <td>20782</td>
              <td>2020-07-10 08:54:32</td>
              <td>

                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>

                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td><img src="vistas/img/firmas/default/firma2.png" class="img-thumbnail" width="40px"></td>
              <td>102</td>
              <td>Firma Larga</td>
              <td>20780</td>
              <td>2020-07-10 08:55:19</td>
              <td>

                <div class="btn-group">

                  <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>

                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                </div>
              </td>
            </tr>

            <tr>
              <td>3</td>
              <td><img src="vistas/img/firmas/default/firma2.png" class="img-thumbnail" width="40px"></td>
              <td>203</td>
              <td>Firma Larga</td>
              <td>20900</td>
              <td>2020-07-10 08:56:42</td>
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
                    <label for="nuevoCodigo">Codigo</label>
                    <input type="text" class="form-control" name="nuevoCodigo" id="nuevoCodigo" placeholder="Ingresar Codigo" required="">
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="nuevaDescripcion">Descripción</label>
                    <input type="password" class="form-control" name="nuevaDescripcion" id="nuevaDescripcion" placeholder="Firma Larga" required="">
                  </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6 ">
                    <label for="newUser">Usuario</label>
                    <select class="form-control" name="newUser" id="newUser" required="">
                      <option>Seleccione el usuario</option>
                      <option value="">20780</option>
                      <option value="">20782</option>
                      <option value="">20900</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="nuevaImagen">Firma</label><br>
                    <input type="file" name="nuevaImagen" id="nuevaImagen">
                    <small>Peso maximo de la firma 2MB</small>
                    <img src="vistas/img/firmas/default/firma2.png" class="img-thumbnail" width="100px">
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

      </div>
    </div>
  </div>