  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar solicitud</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Editar solicitud</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background:#20c997;">
                <h3 class="card-title">REQUISICIÓN DE PERSONAL A DESARROLLO HUMANO</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">

                  <?php

                  $item = "id";
                  $valor = $_GET["idSolicitud"];

                  $solicitud = ControladorSolicitudes::ctrMostrarSolicitudes($item, $valor);

                  $itemUsuario = "usuario";
                  $valorUsuario = $solicitud["id_usuario"];

                  $usuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                  $itemIngreso = "id";
                  $valorIngreso = $solicitud["tipo_ingreso"];

                  $ingreso = ControladorIngresos::ctrMostrarTiposingresos($itemIngreso, $valorIngreso);

                  $itemHorario = "id";
                  $valorHorario = $solicitud["horario"];

                  $horario = ControladorHorarios::ctrMostrarHorarios($itemHorario, $valorHorario);

                  $itemCeco = "id";
                  $valorCeco = $solicitud["codigo_ceco"];

                  $ceco = ControladorCentros::ctrMostrarCentros($itemCeco, $valorCeco);

                  $itemNomceco = "id";
                  $valorNomceco = $solicitud["nombre_ceco"];

                  $nombreCeco = ControladorCentros::ctrMostrarCentros($itemNomceco, $valorNomceco);


                  ?>

                  <div class="row">
                    <div class="form-group col-md-4 ">
                      <label for="id_usuario"></label>
                      <input type="text" class="form-control" id="nuevoSolicitante" value="<?php echo $usuario["nombre"]; ?>" readonly>
                      <input type="hidden" name="idSolicitante" value="<?php echo $usuario["usuario"]; ?>">
                      <small id="id_usuarioHelp" class="form-text text-muted text-center">Nombre del solicitante</small>
                    </div>

                    <div class="form-group col-md-4 ">
                      <label for="codigo"></label>
                      <input type="text" class="form-control" id="nuevoCodigo" name="editarCodigo" value="<?php echo $solicitud["codigo"]; ?>" readonly>
                      <small id="codigoHelp" class="form-text text-muted text-center">Codigo solicitud</small>
                    </div>

                    <div class="form-group col-md-4 ">
                      <label for="ciudad"></label>
                      <select class="form-control" name="nuevaCiudad" id="ciudad" required="">
                        <option value="<?php echo $solicitud["id"]; ?>"><?php echo $solicitud["ciudad"] ?></option>
                        <option value="Bogotá">Bogotá</option>
                        <option value="Sopo">Sopo</option>
                        <option value="Medellin">Medellin</option>
                        <option value="Barranquilla">Barranquilla</option>
                        <option value="Cartagena">Cartagena</option>
                        <option value="Cali">Cali</option>
                        <option value="Bucaramanga">Bucaramanga</option>
                      </select>
                      <small id="ciudadHelp" class="form-text text-muted text-center">Seleccione Ciudad/Municipio</small>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4 ">
                      <label for="tipo_ingreso"></label>
                      <select class="form-control" name="nuevo_ingreso" id="nuevo_ingreso" required="">
                        <option value="<?php echo $solicitud["id"]; ?>"><?php echo $solicitud["tipo_ingreso"] ?></option>

                        <?php

                        $item = null;
                        $valor = null;

                        $traertipoIngreso = ControladorIngresos::ctrMostrarTiposingresos($item, $valor);

                        foreach ($traertipoIngreso as $key => $value) {

                          echo '<option value="' . $value["id"] . '">' . $value["ingreso"] . '</option>';
                        }

                        ?>
                      </select>
                      <small id="tipo_ingresoHelp" class="form-text text-muted text-center">Seleccione el tipo de ingreso</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="horario"></label>
                      <select class="form-control" name="nuevoHorario" id="nuevoHorario" required="">
                        <option value="<?php echo $solicitud["id"]; ?>"><?php echo $solicitud["horario"] ?></option>
                        <?php

                        $item = null;
                        $valor = null;

                        $traerHorario = ControladorHorarios::ctrMostrarHorarios($item, $valor);

                        foreach ($traerHorario as $key => $value) {

                          echo '<option value="' . $value["horario"] . '">' . $value["horario"] . '</option>';
                        }

                        ?>
                      </select>
                      <small id="horarioHelp" class="form-text text-muted text-center">Seleccione el horario</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="codigo_ceco"></label>
                      <select class="form-control" name="nuevoCodigo_ceco" id="codigo_ceco" required="">
                        <option value="<?php echo $solicitud["id"]; ?>"><?php echo $solicitud["codigo_ceco"] ?></option>
                        <?php

                        $item = null;
                        $valor = null;

                        $traerCodigo = ControladorCentros::ctrMostrarCentros($item, $valor);

                        foreach ($traerCodigo as $key => $value) {

                          echo '<option value="' . $value["codigo"] . '">' . $value["codigo"] . ' ' . $value["nombre"] . '</option>';
                        }

                        ?>
                      </select>
                      <small id="codigo_cecoHelp" class="form-text text-muted text-center">Seleccione el codigo del centro de costo</small>
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-md-4 ">
                      <label for="nombre_ceco"></label>
                      <select class="form-control" name="nuevoNombre_ceco" id="nombre_ceco" required="">
                        <option value="<?php echo $solicitud["id"]; ?>"><?php echo $solicitud["nombre_ceco"] ?></option>
                        <?php

                        $item = null;
                        $valor = null;

                        $traerCecos = ControladorCentros::ctrMostrarCentros($item, $valor);

                        foreach ($traerCecos as $key => $value) {

                          echo '<option value="' . $value["nombre"] . '">' . $value["nombre"] . '</option>';
                        }

                        ?>
                      </select>
                      <small id="nombre_cecoHelp" class="form-text text-muted text-center">Agregue el nombre del centro de costo</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="area_personal"></label>
                      <select class="form-control" name="nuevArea_personal" id="nuevArea_personal" required="">
                        <option value="<?php echo $solicitud["id"]; ?>"><?php echo $solicitud["area_personal"] ?></option>
                        <option value="Mano de obra directa">Mano de obra directa</option>
                        <option value="Mano de obra indirecta">Mano de obra indirecta</option>
                        <option value="Administración">Administración</option>
                        <option value="Comercial">Comercial</option>
                      </select>
                      <small id="area_personalHelp" class="form-text text-muted text-center">Seleccione el Area de personal</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="cargo_solicitado"></label>
                      <input type="text" class="form-control" name="nuevoCargo" id="nuevoCargo" placeholder="Cargo solicitado" value="<?php echo $solicitud["cargo_solicitado"]; ?>" required="">
                      <small id="cargo_solicitadoHelp" class="form-text text-muted text-center">Cargo solicitado</small>
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-md-4 ">
                      <label for="motivo"></label>
                      <input type="text" class="form-control" name="nuevoMotivo" id="nuevoMotivo" placeholder="Motivo de la solicitud" value="<?php echo $solicitud["motivo"]; ?>" required="">
                      <small id="motivoHelp" class="form-text text-muted text-center">Motivo de la solicitud</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="formacion"></label>
                      <select class="form-control" name="nuevaFormacion" id="nuevaFormacion" placeholder="Formación academica">
                        <option value="<?php echo $solicitud["id"]; ?>"><?php echo $solicitud["formacion"] ?></option>
                        <option value=">Bachiller">Bachiller</option>
                        <option value="Tecnico">Tecnico</option>
                        <option value="Tecnologo">Tecnologo</option>
                        <option value="Profesional">Profesional</option>
                        <option value="Posgrado">Posgrado</option>
                      </select>
                      <small id="formacionHelp" class="form-text text-muted text-center">Seleccione la formación academica</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="otra_formacion"></label>
                      <input type="text" class="form-control" name="otraformacion" id="otraformacion" placeholder="Otra formación academica" value="<?php echo $solicitud["otra_formacion"]; ?>">
                      <small id="otraHelp" class="form-text text-muted text-center">Formación adicional si aplica</small>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-4 ">
                      <label for="genero"></label>
                      <select class="form-control" name="nuevoGenero" id="nuevoGenero" required="">
                        <option value="<?php echo $solicitud["id"]; ?>"><?php echo $solicitud["genero"] ?></option>
                        <option value=">Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Indiferente">Indiferente</option>
                      </select>
                      <small id="generoHelp" class="form-text text-muted text-center">Seleccione el genero</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="exp_lab"></label>
                      <select class="form-control" name="nuevaExp_lab" id="nuevaExp_lab" required="">
                        <option value="<?php echo $solicitud["id"]; ?>"><?php echo $solicitud["exp_lab"] ?></option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                      </select>
                      <small id="exp_labHelp" class="form-text text-muted text-center">Requiere experiencia laboral</small>
                    </div>

                    <div class="form-group col-md-4 ">
                      <label for="tiempo_exp"></label>
                      <input type="text" class="form-control" name="nuevoTiempo_exp" id="nuevoTiempo_exp" placeholder="Ejemplo: 12 Meses" value="<?php echo $solicitud["tiempo_exp"]; ?>" required="">
                      <small id="tiempo_expHelp" class="form-text text-muted text-center">Tiempo de experiencia</small>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-4 ">
                      <label for="experiencia_en"></label>
                      <input type="text" class="form-control" rows="2" value="<?php echo $solicitud["experiencia_en"]; ?>">
                      <small id="experiencia_enHelp" class="form-text text-muted text-center">"Requiere experiencia en</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="ciudad_labor"></label>
                      <select class="form-control" name="nuevaciudadLabor" id="nuevaciudadLabor" required="">
                        <option value="<?php echo $solicitud["id"]; ?>"><?php echo $solicitud["ciudad_labor"] ?></option>
                        <option value="Bogotá">Bogotá</option>
                        <option value="Sopo">Sopo</option>
                        <option value="Medellin">Medellin</option>
                        <option value="Barranquilla">Barranquilla</option>
                        <option value="Cartagena">Cartagena</option>
                        <option value="Cali">Cali</option>
                        <option value="Bucaramanga">Bucaramanga</option>
                      </select>
                      <small id="ciudad_laborHelp" class="form-text text-muted text-center">Ciudad/Municipio donde laborará</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="tipo_salario"></label>
                      <select class="form-control" name="nuevoSalario" id="nuevoSalario">
                        <option value="<?php echo $solicitud["id"]; ?>"><?php echo $solicitud["tipo_salario"] ?></option>
                        <option value="Salario minimo legal vigente">Salario minimo legal vigente</option>
                        <option value="Salario minimo integral">Salario minimo integral</option>
                        <option value="Salario minimo VITALIS S.A.C.I.">Salario minimo VITALIS S.A.C.I.</option>
                        <option value="Otro">Otro</option>
                      </select>
                      <small id="tipo_salarioHelp" class="form-text text-muted text-center">Seleccione la asignación salarial</small>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-4 ">
                      <label for="otro_salario"></label>
                      <input type="text" class="form-control" name="otroSalario" id="otroSalario" value="<?php echo $solicitud["monto_salario"]; ?>">
                      <small id="otraHelp" class="form-text text-muted text-center">Otro salario si aplica</small>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="tipo_contrato"></label>
                      <select class="form-control" name="nuevoTipo_contrato" id="nuevoTipo_contrato">
                        <option value="<?php echo $solicitud["id"]; ?>"><?php echo $solicitud["tipo_contrato"] ?></option>
                        <option value="Fijo a tres meses">Fijo a tres meses</option>
                        <option value="Indefinido">Indefinido</option>
                        <option value="Aprendizaje">Aprendizaje</option>
                      </select>
                      <small id="tipo_contratoHelp" class="form-text text-muted text-center">Seleccione el tipo de contrato</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="otra_duracion"></label>
                      <input type="text" class="form-control" name="otra_duracion" id="otra_duracion" value="<?php echo $solicitud["otra_duracion"]; ?>">
                      <small id="otraHelp" class="form-text text-muted text-center">Otro tipo de contrato si aplica</small>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="observaciones"></label>
                      <input type="text" class="form-control" rows="2" value="<?php echo $solicitud["observaciones"]; ?>">
                    </div>
                  </div>


                </div>
                <!-- /.card-body -->


            </div>
            <!-- /.card -->

            <!-- Input addon -->
            <div class="card card-primary">
              <div class="card-header" style="background:#20c997;">
                <h3 class="card-title">HERRAMIENTAS TECNOLOGICAS</h3>
              </div>
              <div class="card-body">

              <div class="row col-md-12">
                        <div class="pc col">
                        <h4>PC</h4>
                          <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="ti_pc_0" name="ti_pc" class="custom-control-input" value="<?php echo $solicitud["ti_pc"]; ?>">
                          <label class="custom-control-label" for="ti_pc_0">Si</label>
                        </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="ti_pc_1" name="ti_pc" class="custom-control-input" value="<?php echo $solicitud["ti_pc"]; ?>">
                            <label class="custom-control-label" for="ti_pc_1">No</label>
                          </div>     
                        </div>
                      
                        
                        <div class="pc col">
                        <h4>Teléfono</h4>
                          <div class="col-sm-1 custom-control custom-radio custom-control-inline">
                          <input type="radio" id="ti_telefono_0" name="ti_telefono" class="custom-control-input" value="<?php echo $solicitud["ti_telefono"]; ?>">
                          <label class="custom-control-label" for="ti_telefono_0">Si</label>
                        </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="ti_telefono_1" name="ti_telefono" class="custom-control-input" value="<?php echo $solicitud["ti_telefono"]; ?>">
                            <label class="custom-control-label" for="ti_telefono_1">No</label>
                          </div>     
                        </div>

                        <div class="pc col">
                        <h4>Correo</h4>
                          <div class="col-sm-1 custom-control custom-radio custom-control-inline">
                          <input type="radio" id="ti_correo_0" name="ti_correo" class="custom-control-input" value="<?php echo $solicitud["ti_correo"]; ?>">
                          <label class="custom-control-label" for="ti_correo_0">Si</label>
                        </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="ti_correo_1" name="ti_correo" class="custom-control-input" value="<?php echo $solicitud["ti_correo"]; ?>">
                            <label class="custom-control-label" for="ti_correo_1">No</label>
                          </div>     
                        </div>
                   </div>


                <div class="row">
                  <div class="form-group col-md-4">
                    <label for="pc_observaciones"></label>
                    <input type="text" class="form-control" rows="2" value="<?php echo $solicitud["pc_observaciones"]; ?>">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="tel_observaciones"></label>
                    <input type="text" class="form-control" rows="2" value="<?php echo $solicitud["tel_observaciones"]; ?>">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="correo_observaciones"></label>
                    <input type="text" class="form-control" rows="2" value="<?php echo $solicitud["correo_observaciones"]; ?>">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="ti_observaciones"></label>
                    <input type="text" class="form-control" rows="2" value="<?php echo $solicitud["ti_observaciones"]; ?>">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
              </div>
              </form>

              <?php

              $editarSolicitud = new ControladorSolicitudes();
              $editarSolicitud->ctrEditarSolicitud();

              ?>
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>