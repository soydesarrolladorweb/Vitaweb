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
                      <input type="text" class="form-control" id="editarSolicitante" value="<?php echo $usuario["nombre"]; ?>" readonly>
                      <input type="hidden" name="idSolicitante" value="<?php echo $usuario["usuario"]; ?>" readonly="">
                      <small id="id_usuarioHelp" class="form-text text-muted text-center">Nombre del solicitante</small>
                    </div>

                    <div class="form-group col-md-4 ">
                      <label for="codigo"></label>
                      <input type="text" class="form-control" id="editarCodigo" name="editarCodigo" value="<?php echo $solicitud["codigo"]; ?>" readonly>
                      <small id="codigoHelp" class="form-text text-muted text-center">Codigo solicitud</small>
                    </div>

                    <div class="form-group col-md-4 ">
                      <label for="ciudad"></label>
                      <select class="form-control" name="editarCiudad" required="">
                        <option value="<?php echo $solicitud["ciudad"]; ?>"><?php echo $solicitud["ciudad"] ?></option>
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
                      <select class="form-control" name="editar_ingreso" required="">
                        <option value="<?php echo $solicitud["tipo_ingreso"]; ?>"><?php echo $solicitud["tipo_ingreso"] ?></option>

                        <?php

                        $item = null;
                        $valor = null;

                        $traertipoIngreso = ControladorIngresos::ctrMostrarTiposingresos($item, $valor);

                        foreach ($traertipoIngreso as $key => $value) {

                          echo '<option value="' . $value["ingreso"] . '">' . $value["ingreso"] . '</option>';
                        }

                        ?>
                      </select>
                      <small id="tipo_ingresoHelp" class="form-text text-muted text-center">Seleccione el tipo de ingreso</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="horario"></label>
                      <select class="form-control" name="editarHorario" id="editarHorario" required="">
                        <option value="<?php echo $solicitud["horario"]; ?>"><?php echo $solicitud["horario"] ?></option>
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
                      <select class="form-control" name="editarCodigo_ceco" id="editarCodigo_ceco" required="">
                        <option value="<?php echo $solicitud["codigo_ceco"]; ?>"><?php echo $solicitud["codigo_ceco"] ?></option>
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
                      <select class="form-control" name="editarNombre_ceco" id="editarNombre_ceco" required="">
                        <option value="<?php echo $solicitud["nombre_ceco"]; ?>"><?php echo $solicitud["nombre_ceco"] ?></option>
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
                      <select class="form-control" name="editarArea_personal" id="editarArea_personal" required="">
                        <option value="<?php echo $solicitud["area_personal"]; ?>"><?php echo $solicitud["area_personal"] ?></option>
                        <option value="Mano de obra directa">Mano de obra directa</option>
                        <option value="Mano de obra indirecta">Mano de obra indirecta</option>
                        <option value="Administración">Administración</option>
                        <option value="Comercial">Comercial</option>
                      </select>
                      <small id="area_personalHelp" class="form-text text-muted text-center">Seleccione el Area de personal</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="cargo_solicitado"></label>
                      <input type="text" class="form-control" name="editarCargo" id="editarCargo" placeholder="Cargo solicitado" value="<?php echo $solicitud["cargo_solicitado"]; ?>" required="">
                      <small id="cargo_solicitadoHelp" class="form-text text-muted text-center">Cargo solicitado</small>
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-md-4 ">
                      <label for="motivo"></label>
                      <input type="text" class="form-control" name="editarMotivo" id="editarMotivo" placeholder="Motivo de la solicitud" value="<?php echo $solicitud["motivo"]; ?>" required="">
                      <small id="motivoHelp" class="form-text text-muted text-center">Motivo de la solicitud</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="editarFormacion"></label>
                      <select class="form-control" name="editarFormacion">
                        <option value="<?php echo $solicitud["formacion"]; ?>"><?php echo $solicitud["formacion"] ?></option>
                        <option value="Bachiller">Bachiller</option>
                        <option value="Tecnico">Tecnico</option>
                        <option value="Tecnologo">Tecnologo</option>
                        <option value="Profesional">Profesional</option>
                        <option value="Posgrado">Posgrado</option>
                      </select>
                      <small id="formacionHelp" class="form-text text-muted text-center">Seleccione la formación academica</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="otra_formacion"></label>
                      <input type="text" class="form-control" name="editarOtraformacion" id="editarOtraformacion" placeholder="Otra formación academica" value="<?php echo $solicitud["otra_formacion"]; ?>">
                      <small id="otraHelp" class="form-text text-muted text-center">Formación adicional si aplica</small>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-4 ">
                      <label for="genero"></label>
                      <select class="form-control" name="editarGenero" required="">
                        <option value="<?php echo $solicitud["genero"]; ?>"><?php echo $solicitud["genero"] ?></option>
                        <option value=">Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Indiferente">Indiferente</option>
                      </select>
                      <small id="generoHelp" class="form-text text-muted text-center">Seleccione el genero</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="exp_lab"></label>
                      <select class="form-control" name="editarExp_lab" required="">
                        <option value="<?php echo $solicitud["exp_lab"]; ?>"><?php echo $solicitud["exp_lab"] ?></option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                      </select>
                      <small id="exp_labHelp" class="form-text text-muted text-center">Requiere experiencia laboral</small>
                    </div>

                    <div class="form-group col-md-4 ">
                      <label for="tiempo_exp"></label>
                      <input type="text" class="form-control" name="editarTiempo_exp" id="editarTiempo_exp" value="<?php echo $solicitud["tiempo_exp"]; ?>" required="">
                      <small id="tiempo_expHelp" class="form-text text-muted text-center">Tiempo de experiencia</small>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-4 ">
                      <label for="experiencia_en"></label>
                      <input type="text" class="form-control" rows="2"  name="editarExperiencia_en" id="editarExperiencia_en" value="<?php echo $solicitud["experiencia_en"]; ?>">
                      <small id="experiencia_enHelp" class="form-text text-muted text-center">"Requiere experiencia en</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="ciudad_labor"></label>
                      <select class="form-control" name="editarciudadLabor" required="">
                        <option value="<?php echo $solicitud["ciudad_labor"]; ?>"><?php echo $solicitud["ciudad_labor"] ?></option>
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
                      <select class="form-control" name="editarSalario">
                        <option value="<?php echo $solicitud["tipo_salario"]; ?>"><?php echo $solicitud["tipo_salario"] ?></option>
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
                      <input type="text" class="form-control" name="editar_otroSalario" id="editar_otroSalario" value="<?php echo $solicitud["monto_salario"]; ?>">
                      <small id="otraHelp" class="form-text text-muted text-center">Otro salario si aplica</small>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="tipo_contrato"></label>
                      <select class="form-control" name="editarTipo_contrato">
                        <option value="<?php echo $solicitud["tipo_contrato"]; ?>"><?php echo $solicitud["tipo_contrato"] ?></option>
                        <option value="Fijo a tres meses">Fijo a tres meses</option>
                        <option value="Indefinido">Indefinido</option>
                        <option value="Aprendizaje">Aprendizaje</option>
                      </select>
                      <small id="tipo_contratoHelp" class="form-text text-muted text-center">Seleccione el tipo de contrato</small>
                    </div>
                    <div class="form-group col-md-4 ">
                      <label for="otra_duracion"></label>
                      <input type="text" class="form-control" name="editar_otra_duracion" id="editar_otra_duracion" value="<?php echo $solicitud["otra_duracion"]; ?>">
                      <small id="otraHelp" class="form-text text-muted text-center">Otro tipo de contrato si aplica</small>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="observaciones"></label>
                      <input type="text" class="form-control" rows="2" name="editarObservaciones" id="editarObservaciones" value="<?php echo $solicitud["observaciones"]; ?>">
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

              <div class="row">
                    <div class="form-group col-md-4 ">
                    <label for="ti_pc"></label>
                    <select class="form-control" name="editar_ti_pc" required="">
                    <option value="<?php echo $solicitud["ti_pc"]; ?>"><?php echo $solicitud["ti_pc"] ?></option>
                        <option>El cargo requiere computador</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                    <small id="tipo_contratoHelp" class="form-text text-muted text-center">Seleccione si requiere computador</small>
                    </div>
                <div class="form-group col-md-4">
                <label for="tipo_contrato"></label>
                <select class="form-control" name="editar_ti_telefono" required="">
                <option value="<?php echo $solicitud["ti_telefono"]; ?>"><?php echo $solicitud["ti_telefono"] ?></option>
                        <option>El cargo requiere teléfono</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                    <small id="tipo_contratoHelp" class="form-text text-muted text-center">Seleccione si requiere teléfono</small>
                </div>
                <div class="form-group col-md-4 ">
                <label for="tipo_contrato"></label>
                    <select class="form-control" name="editar_ti_correo" required="">
                    <option value="<?php echo $solicitud["ti_correo"]; ?>"><?php echo $solicitud["ti_correo"] ?></option>
                        <option>El cargo requiere correo</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                    <small id="tipo_contratoHelp" class="form-text text-muted text-center">Seleccione si requiere correo</small>
                    </div>
                </div>


                <div class="row">
                  <div class="form-group col-md-4">
                    <label for="pc_observaciones"></label>
                    <input type="text" class="form-control" rows="2" name="editar_pc_observaciones" placeholder="ESPECIFICACIONES PARA EL PC" value="<?php echo $solicitud["pc_observaciones"]; ?>">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="tel_observaciones"></label>
                    <input type="text" class="form-control" rows="2"  name="editar_tel_observaciones" placeholder="ESPECIFICACIONES PARA EL TELEFONO" value="<?php echo $solicitud["tel_observaciones"]; ?>">
                  </div>

                  <div class="form-group col-md-4">
                    <label for="correo_observaciones"></label>
                    <input type="text" class="form-control" rows="2" name="editar_correo_observaciones" placeholder="ESPECIFICACIONES PARA EL CORREO"  value="<?php echo $solicitud["correo_observaciones"]; ?>">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="ti_observaciones"></label>
                    <input type="text" class="form-control" rows="2" name="editar_ti_observaciones" placeholder="OBSERVACIONES GENERALES PARA TI" value="<?php echo $solicitud["ti_observaciones"]; ?>">
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